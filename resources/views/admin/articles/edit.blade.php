@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-light text-gray-800">Modifier l'article</h1>
                <a href="{{ route('admin.articles.index') }}" 
                   class="text-gray-600 hover:text-gray-900 transition-colors">
                    <i class="fas fa-times"></i>
                </a>
            </div>

            <form action="{{ route('admin.articles.update', $article) }}" 
                  method="POST" 
                  enctype="multipart/form-data"
                  class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Titre -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           value="{{ old('title', $article->title) }}"
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
                                    {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
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
                              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $article->excerpt) }}</textarea>
                    @error('excerpt')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Contenu -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
                    <textarea name="content" 
                              id="content" 
                              class="tinymce">{{ old('content', $article->content) }}</textarea>
                </div>

                <!-- Image -->
                <div>
                    <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-1">Image à la une</label>
                    @if($article->featured_image)
                        <div class="mb-2">
                            <img src="{{ Storage::url($article->featured_image) }}" 
                                 alt="Image actuelle" 
                                 class="w-32 h-32 object-cover rounded">
                        </div>
                    @endif
                    <input type="file" 
                           name="featured_image" 
                           id="featured_image"
                           accept="image/*"
                           class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-beige focus:border-beige @error('featured_image') border-red-500 @enderror">
                    @error('featured_image')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Statut de publication -->
                <div class="flex items-center space-x-2">
                    <input type="checkbox" 
                           name="is_published" 
                           id="is_published" 
                           {{ $article->is_published ? 'checked' : '' }}
                           class="rounded border-gray-300 text-beige focus:ring-beige">
                    <label for="is_published" class="text-sm text-gray-700">
                        Publier l'article
                    </label>
                </div>

                <!-- Boutons -->
                <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-4">
                    <a href="{{ route('admin.articles.index') }}"
                       class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C19A6B]">
                        Annuler
                    </a>
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#C19A6B] hover:bg-[#A88A5B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C19A6B]">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
