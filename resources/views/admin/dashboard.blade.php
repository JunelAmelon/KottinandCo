@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('page-title', 'Tableau de bord')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Total Articles -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                    <i class="fas fa-newspaper text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-gray-500 text-sm">Total Articles</h4>
                    <h3 class="text-2xl font-bold">{{ $stats['total_articles'] }}</h3>
                </div>
            </div>
        </div>

        <!-- Published Articles -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-500">
                    <i class="fas fa-check-circle text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-gray-500 text-sm">Articles Publiés</h4>
                    <h3 class="text-2xl font-bold">{{ $stats['published_articles'] }}</h3>
                </div>
            </div>
        </div>

        <!-- Draft Articles -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
                    <i class="fas fa-edit text-2xl"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-gray-500 text-sm">Brouillons</h4>
                    <h3 class="text-2xl font-bold">{{ $stats['draft_articles'] }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
        <h3 class="text-lg font-semibold mb-4">Actions Rapides</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{ route('admin.articles.create') }}" 
               class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="ml-4">
                    <p class="font-semibold">Nouvel Article</p>
                    <p class="text-sm text-gray-500">Créer un nouvel article</p>
                </div>
            </a>

            <a href="{{ route('admin.articles.index') }}" 
               class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                <div class="p-3 rounded-full bg-green-100 text-green-500">
                    <i class="fas fa-list"></i>
                </div>
                <div class="ml-4">
                    <p class="font-semibold">Gérer les Articles</p>
                    <p class="text-sm text-gray-500">Voir et modifier les articles existants</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent Articles -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Articles Récents</h3>
            <a href="{{ route('admin.articles.index') }}" class="text-blue-500 hover:text-blue-700">
                Voir tout <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
        
        <div class="divide-y">
            @forelse($stats['recent_articles'] as $article)
                <div class="py-3">
                    <div class="flex justify-between items-center">
                        <div>
                            <h4 class="font-medium">{{ $article->title }}</h4>
                            <p class="text-sm text-gray-500">
                                {{ $article->created_at->format('d/m/Y H:i') }}
                            </p>
                        </div>
                        <span class="px-2 py-1 text-xs rounded-full {{ $article->is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $article->is_published ? 'Publié' : 'Brouillon' }}
                        </span>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 text-center py-4">Aucun article récent</p>
            @endforelse
        </div>
    </div>
@endsection
