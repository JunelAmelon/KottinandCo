@extends('layouts.admin')

@section('title', isset($article) ? 'Modifier l\'article' : 'Nouvel article')

@section('page-title', isset($article) ? 'Modifier l\'article' : 'Créer un nouvel article')

@section('content')
    <div class="bg-white rounded-lg shadow-sm">
        <form action="{{ isset($article) ? route('admin.articles.update', $article) : route('admin.articles.store') }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf
            @if(isset($article))
                @method('PUT')
            @endif

            <div class="p-6 border-b border-gray-200">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-beige focus:ring focus:ring-beige focus:ring-opacity-50" 
                               value="{{ old('title', $article->title ?? '') }}" 
                               required>
                    </div>

                    <div>
                        <label for="excerpt" class="block text-sm font-medium text-gray-700">Extrait</label>
                        <textarea name="excerpt" 
                                  id="excerpt" 
                                  rows="3" 
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-beige focus:ring focus:ring-beige focus:ring-opacity-50">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
                    </div>

                    <div>
                        <label for="featured_image" class="block text-sm font-medium text-gray-700">Image à la une</label>
                        @if(isset($article) && $article->featured_image)
                            <div class="mt-2">
                                <img src="{{ Storage::url($article->featured_image) }}" 
                                     alt="Image actuelle" 
                                     class="h-32 w-32 object-cover rounded">
                            </div>
                        @endif
                        <input type="file" 
                               name="featured_image" 
                               id="featured_image" 
                               class="mt-1 block w-full" 
                               accept="image/*">
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
                        <textarea name="content" 
                                  id="content" 
                                  class="tinymce">{{ old('content', $article->content ?? '') }}</textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" 
                               name="is_published" 
                               id="is_published" 
                               class="rounded border-gray-300 text-beige focus:ring-beige" 
                               {{ old('is_published', $article->is_published ?? false) ? 'checked' : '' }}>
                        <label for="is_published" class="ml-2 block text-sm text-gray-700">
                            Publier immédiatement
                        </label>
                    </div>
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-4">
                <a href="{{ route('admin.articles.index') }}" 
                   class="bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 transition-all">
                    Annuler
                </a>
                <button type="submit" 
                        class="bg-beige text-white px-4 py-2 rounded hover:bg-opacity-90 transition-all">
                    {{ isset($article) ? 'Mettre à jour' : 'Créer' }}
                </button>
            </div>
        </form>
    </div>
@endsection
