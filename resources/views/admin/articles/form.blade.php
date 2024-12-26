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
<div class="bg-white rounded-lg shadow-sm">
    <form method="POST" 
          action="{{ isset($article) ? route('admin.articles.update', $article->id) : route('admin.articles.store') }}" 
          class="p-6">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif

        <!-- Title -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
            <input type="text" 
                   name="title" 
                   id="title" 
                   class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                   value="{{ old('title', $article->title ?? '') }}" 
                   required>
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Excerpt -->
        <div class="mb-6">
            <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Extrait</label>
            <textarea name="excerpt" 
                      id="excerpt" 
                      class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                      rows="3" 
                      required>{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
            @error('excerpt')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Content -->
        <div class="mb-6">
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenu</label>
            <textarea name="content" 
                      id="content" 
                      class="w-full">{{ old('content', $article->content ?? '') }}</textarea>
            @error('content')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Is Published -->
        <div class="mb-6">
            <label class="inline-flex items-center">
                <input type="checkbox" 
                       name="is_published" 
                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                       {{ old('is_published', $article->is_published ?? false) ? 'checked' : '' }}>
                <span class="ml-2">Publier l'article</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                {{ isset($article) ? 'Mettre à jour' : 'Créer' }}
            </button>
        </div>
    </form>
</div>
@endsection
