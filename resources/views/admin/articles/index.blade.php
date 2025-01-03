@extends('layouts.admin')

@section('title', 'Articles')

@section('page-title', 'Gestion des Articles')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-light text-gray-800">Gestion des Articles</h1>
            <a href="{{ route('admin.articles.create') }}" class="bg-beige text-white px-4 py-2 rounded hover:bg-opacity-90 transition-all">
                Nouvel Article
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($articles as $article)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{ $article->title }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $article->user->name ?? 'Utilisateur inconnu' }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.articles.toggle-publish', $article) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="text-sm {{ $article->is_published ? 'text-green-600' : 'text-gray-500' }} hover:text-beige transition-colors">
                                        {{ $article->is_published ? 'Publié' : 'Brouillon' }}
                                    </button>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{ $article->created_at->format('d/m/Y H:i') }}</div>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="{{ route('admin.articles.edit', $article) }}" class="text-beige hover:text-opacity-80 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 transition-colors" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                Aucun article trouvé
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
