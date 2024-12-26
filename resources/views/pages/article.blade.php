@extends('layouts.app')

@section('title', $article->title)

@section('content')
<article class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <header class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $article->title }}</h1>
                <div class="flex items-center text-gray-500 text-sm">
                    <span>{{ $article->published_at->format('d/m/Y') }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ $article->user->name }}</span>
                </div>
            </header>

            @if($article->excerpt)
                <div class="text-xl text-gray-600 mb-8">
                    {{ $article->excerpt }}
                </div>
            @endif

            <div class="prose prose-lg max-w-none">
                {!! $article->content !!}
            </div>

            <div class="mt-12 pt-8 border-t">
                <a href="{{ route('blog') }}" class="text-blue-600 hover:text-blue-800">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Retour aux articles
                </a>
            </div>
        </div>
    </div>
</article>
@endsection

@push('styles')
<style>
    .prose img {
        border-radius: 0.5rem;
        margin: 2rem auto;
    }
    .prose h2 {
        color: #1a202c;
        font-weight: 700;
        font-size: 1.875rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    .prose p {
        margin-bottom: 1.25rem;
        line-height: 1.75;
    }
    .prose ul {
        list-style-type: disc;
        padding-left: 1.25rem;
        margin-bottom: 1.25rem;
    }
    .prose ol {
        list-style-type: decimal;
        padding-left: 1.25rem;
        margin-bottom: 1.25rem;
    }
    .prose a {
        color: #2563eb;
        text-decoration: underline;
    }
    .prose a:hover {
        color: #1d4ed8;
    }
    .prose blockquote {
        border-left: 4px solid #e5e7eb;
        padding-left: 1rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #4b5563;
    }
</style>
@endpush
