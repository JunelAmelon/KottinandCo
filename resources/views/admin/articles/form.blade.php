@extends('layouts.admin')

@section('title', isset($article) ? 'Modifier l\'article' : 'Nouvel article')

@push('scripts')
<script>
    tinymce.init({
        selector: '#content',
        height: 500,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
        menubar: 'file edit view insert format tools table help',
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true,
        images_upload_url: '{{ route("admin.upload.image") }}',
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '{{ route("admin.upload.image") }}');
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);
                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            
            xhr.send(formData);
        },
        setup: function(editor) {
            editor.on('change', function() {
                editor.save();
            });
        }
    });
</script>
@endpush

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-light text-gray-800 mb-6">
                {{ isset($article) ? 'Modifier l\'article' : 'Nouvel article' }}
            </h1>

            <form action="{{ isset($article) ? route('admin.articles.update', $article) : route('admin.articles.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @if(isset($article))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <!-- Titre -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $article->title ?? '') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('title') border-red-500 @enderror">
                        @error('title')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Catégorie -->
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                        <select name="category_id" 
                                id="category_id" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('category_id') border-red-500 @enderror">
                            <option value="">Sélectionnez une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" 
                                        {{ old('category_id', $article->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Extrait -->
                    <div>
                        <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Extrait</label>
                        <textarea name="excerpt" 
                                  id="excerpt" 
                                  rows="3" 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
                        @error('excerpt')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contenu -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenu</label>
                        <textarea name="content" 
                                  id="content" 
                                  rows="10" 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('content') border-red-500 @enderror">{{ old('content', $article->content ?? '') }}</textarea>
                        @error('content')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div>
                        <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-1">Image à la une</label>
                        <input type="file" 
                               name="featured_image" 
                               id="featured_image"
                               accept="image/*"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('featured_image') border-red-500 @enderror">
                        @error('featured_image')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                        @if(isset($article) && $article->featured_image)
                            <div class="mt-2">
                                <img src="{{ Storage::url($article->featured_image) }}" 
                                     alt="Image actuelle" 
                                     class="w-32 h-32 object-cover rounded">
                            </div>
                        @endif
                    </div>

                    <!-- Boutons -->
                    <div class="flex justify-end space-x-4 pt-4">
                        <a href="{{ route('admin.articles.index') }}" 
                           class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                            Annuler
                        </a>
                        <button type="submit" 
                                class="px-6 py-2 bg-beige text-white rounded-md hover:bg-opacity-90 transition-colors">
                            {{ isset($article) ? 'Mettre à jour' : 'Enregistrer' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
