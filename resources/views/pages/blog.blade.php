@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] h-[60vh] flex items-center mt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="https://img.freepik.com/free-photo/business-partners-meeting-cafe_53876-20919.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558&semt=ais_hybrid') }}" 
                 alt="Background" 
                 class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Études de cas</h3>
                <h1 class="text-6xl font-light text-white mb-6">{{ $article->title ?? 'Nos Publications' }}</h1>
                <p class="text-xl text-gray-300">
                    {{ $article->excerpt ?? 'Découvrez nos derniers articles et analyses sur le droit des affaires, l\'actualité juridique et les enjeux de demain.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main>
     

        <!-- Featured Article -->
        @if($featuredArticle)
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="relative h-[500px] rounded-lg overflow-hidden">
                        @if($featuredArticle->featured_image)
                            <img src="{{ Storage::url($featuredArticle->featured_image) }}" 
                                 alt="{{ $featuredArticle->title }}" 
                                 class="absolute inset-0 w-full h-full object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85" 
                                 alt="Featured Article" 
                                 class="absolute inset-0 w-full h-full object-cover">
                        @endif
                    </div>
                    <div>
                        <span class="text-beige mb-4 inline-block">{{ $featuredArticle->category->name }}</span>
                        <h2 class="text-4xl font-light text-[#1B2A4A] mb-6">{{ $featuredArticle->title }}</h2>
                        <p class="text-gray-600 mb-8">{{ $featuredArticle->excerpt }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="assets/img/team/member1.jpg" alt="Me Kottin" class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-medium">Me Kottin</h4>
                                    <p class="text-gray-600 text-sm">Avocat fondateur</p>
                                </div>
                            </div>
                            <a href="{{ route('blog.show', $featuredArticle->slug) }}" class="inline-flex items-center text-beige hover:text-[#1B2A4A] transition-colors">
                                Lire l'article
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <!-- Categories -->
        <div class="container mx-auto px-4 mb-12">
            <h2 class="text-2xl font-bold mb-6">Catégories</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('blog') }}" 
                   class="px-4 py-2 {{ !request('category') ? 'bg-beige' : 'bg-[#1B2A4A]' }} text-white rounded hover:bg-opacity-90 transition-all">
                    Tous
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('blog', ['category' => $category->slug]) }}" 
                       class="px-4 py-2 {{ request('category') == $category->slug ? 'bg-beige' : 'bg-[#1B2A4A]' }} text-white rounded hover:bg-opacity-90 transition-all">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Recent Articles -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center mb-16">
                    <h3 class="text-beige mb-4 text-lg">Nos Articles</h3>
                    <h2 class="text-[#1a1a1a] text-5xl font-light mb-8">Articles Récents</h2>
                    <p class="text-xl text-gray-600">Restez informé des dernières actualités juridiques et de nos analyses</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @forelse($articles as $article)
                    <article class="bg-white rounded-lg overflow-hidden shadow-lg group transform hover:-translate-y-1 transition-all duration-300">
                        <a href="{{ route('blog.show', $article->slug) }}" class="block">
                            <div class="relative h-64">
                                @if($article->featured_image)
                                    <img src="{{ Storage::url($article->featured_image) }}" 
                                         alt="{{ $article->title }}" 
                                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                @else
                                    <img src="https://images.unsplash.com/photo-1664575602554-2087b04935a5?auto=format&fit=crop&q=80" 
                                         alt="Default Image" 
                                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                @endif
                            </div>
                            <div class="p-6">
                                <span class="text-beige text-sm">{{ $article->category->name }}</span>
                                <h3 class="text-xl font-medium mt-2 mb-4 text-[#1B2A4A] group-hover:text-beige transition-colors">
                                    {{ $article->title }}
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    {{ $article->excerpt }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/img/team/member1.jpg" alt="Me Kottin" class="w-8 h-8 rounded-full object-cover mr-3">
                                        <div class="text-sm">
                                            <h4 class="font-medium">Me Kottin</h4>
                                            <p class="text-gray-500">{{ $article->created_at->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                    <i class="fas fa-arrow-right text-beige group-hover:translate-x-2 transition-transform"></i>
                                </div>
                            </div>
                        </a>
                    </article>
                    @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">Aucun article trouvé.</p>
                    </div>
                    @endforelse
                </div>
                
                <!-- Pagination -->
                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
            </div>
        </section>
    </main>
@endsection