<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} - Kottin&Co</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'beige': '#D4B68F',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 bg-[#1B2A4A] shadow-lg">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Kottin&Co" class="h-36">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-beige transition-colors">Accueil</a>
                    <a href="{{ route('home') }}#about" class="text-white hover:text-beige transition-colors">À propos</a>
                    <a href="{{ route('home') }}#services" class="text-white hover:text-beige transition-colors">Services</a>
                    <a href="{{ route('blog') }}" class="text-white hover:text-beige transition-colors">Blog</a>
                    <a href="{{ route('home') }}#contact" class="text-white hover:text-beige transition-colors">Contact</a>
                    <a href="#contact" class="bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                        Prendre rendez-vous
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white hover:text-beige focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu" class="fixed inset-0 bg-[#1B2A4A] transform translate-x-full transition-transform duration-300 ease-in-out z-50">
                <div class="h-full flex flex-col">
                    <!-- Header with close button -->
                    <div class="flex justify-between items-center p-6">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-24">
                        <button id="close-menu-button" class="text-white hover:text-beige focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Navigation Links -->
                    <nav class="flex-grow flex flex-col justify-center px-8">
                        <div class="space-y-8">
                            <a href="{{ route('home') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Accueil</a>
                            <a href="{{ route('home') }}#about" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">À propos</a>
                            <a href="{{ route('home') }}#services" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Services</a>
                            <a href="{{ route('blog') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Blog</a>
                            <a href="{{ route('home') }}#testimonials" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Témoignages</a>
                            <a href="{{ route('home') }}#contact" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Contact</a>
                        </div>
                    </nav>

                    <!-- Footer Info -->
                    <div class="p-8">
                        <p class="text-white text-sm mb-2">123 Avenue des Champs-Élysées, 75008 Paris</p>
                        <p class="text-white text-sm">+33 (0)1 23 45 67 89</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Article Content -->
    <article class="pt-28 pb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="text-sm mb-8">
                    <ol class="list-none p-0 flex items-center text-gray-500">
                        <li><a href="{{ route('home') }}" class="hover:text-beige transition-colors">Accueil</a></li>
                        <li class="mx-2">/</li>
                        <li><a href="{{ route('blog') }}" class="hover:text-beige transition-colors">Blog</a></li>
                        <li class="mx-2">/</li>
                        <li>{{ $article->title }}</li>
                    </ol>
                </nav>

                <!-- Article Header -->
                <header class="mb-12">
                    <div class="flex gap-2 mb-6">
                        <span class="px-3 py-1 bg-blue-100 text-primary text-sm rounded-full">{{ $article->category->name }}</span>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $article->title }}</h1>
                    <div class="flex items-center text-gray-600">
                        <span>Par {{ $article->user->name }}</span>
                        <span class="mx-2">•</span>
                        <time>{{ $article->published_at ? $article->published_at->locale('fr')->format('d F Y') : 'Non publié' }}</time>
                    </div>
                </header>

                <!-- Featured Image -->
                @if($article->featured_image)
                <img src="{{ Storage::url($article->featured_image) }}" 
                     alt="Image de {{ $article->title }}" 
                     class="w-full h-96 object-cover rounded-lg mb-12">
                @endif

                <!-- Article Body -->
                <div class="prose prose-lg max-w-none">
                    @if($article->excerpt)
                    <p class="text-gray-600 mb-6">
                        {{ $article->excerpt }}
                    </p>
                    @endif

                    <div class="text-gray-600">
                        {!! $article->content !!}
                    </div>
                </div>

                <!-- Share Section -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Partager cet article</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}" 
                           target="_blank"
                           class="text-gray-400 hover:text-primary">
                            LinkedIn
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}" 
                           target="_blank"
                           class="text-gray-400 hover:text-primary">
                            Twitter
                        </a>
                        <a href="mailto:?subject={{ urlencode($article->title) }}&body={{ urlencode(request()->url()) }}" 
                           class="text-gray-400 hover:text-primary">
                            Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Footer -->
    <footer class="bg-[#1B2A4A] text-white">
        <div class="container mx-auto px-4">
            <!-- Newsletter Section -->
            <div class="border-b border-gray-700">
                <div class="container mx-auto px-4 py-12">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="text-center md:text-left mb-6 md:mb-0 md:w-1/2">
                            <h3 class="text-2xl md:text-3xl font-bold mb-2">Newsletter</h3>
                            <p class="text-gray-300 text-sm md:text-base">Restez informé de l'actualité juridique et de nos dernières publications</p>
                        </div>
                        <div class="w-full md:w-1/2 max-w-md">
                            <form class="flex flex-col sm:flex-row gap-4">
                                <input 
                                    type="email" 
                                    placeholder="Votre email" 
                                    class="flex-grow px-4 py-3 rounded bg-white/10 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-beige"
                                    required
                                >
                                <button 
                                    type="submit" 
                                    class="px-6 py-3 bg-beige text-white rounded hover:bg-opacity-90 transition-all whitespace-nowrap"
                                >
                                    S'inscrire
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 py-20">
                <!-- Brand -->
                <div class="col-span-1">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Kottin&Co" class="h-36 mb-6">
                    <p class="text-gray-300 mb-6">
                        Cabinet d'avocats de référence, spécialisé en droit des affaires et droit international.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-white/90 transition-colors">
                            <i class="fab fa-linkedin-in text-beige"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-white/90 transition-colors">
                            <i class="fab fa-twitter text-beige"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-white/90 transition-colors">
                            <i class="fab fa-facebook-f text-beige"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-span-1">
                    <h3 class="text-xl font-medium mb-6">Liens rapides</h3>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Accueil</a></li>
                        <li><a href="{{ route('home') }}#about" class="text-gray-300 hover:text-beige text-sm transition-colors">À propos</a></li>
                        <li><a href="{{ route('home') }}#services" class="text-gray-300 hover:text-beige text-sm transition-colors">Services</a></li>
                        <li><a href="{{ route('blog') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Blog</a></li>
                        <li><a href="{{ route('home') }}#contact" class="text-gray-300 hover:text-beige text-sm transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-span-1">
                    <h3 class="text-xl font-medium mb-6">Services</h3>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Droit des affaires</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Droit international</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Droit immobilier</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Contentieux</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Propriété intellectuelle</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-span-1">
                    <h3 class="text-xl font-medium mb-6">Contact</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1.5 mr-3"></i>
                            <span class="text-gray-300">123 Avenue des Champs-Élysées<br>75008 Paris, France</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3"></i>
                            <span class="text-gray-300">+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span class="text-gray-300">contact@kottinco.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-white/10 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300 text-sm mb-4 md:mb-0">
                        2024 Kottin&Co. Tous droits réservés.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Mentions légales</a>
                        <a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Politique de confidentialité</a>
                        <a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">CGU</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

        function openMobileMenu() {
            document.body.style.overflow = 'hidden';
            mobileMenu.classList.remove('translate-x-full');
            mobileMenu.classList.add('translate-x-0');
        }

        function closeMobileMenu() {
            document.body.style.overflow = '';
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
        }

        mobileMenuButton.addEventListener('click', openMobileMenu);
        closeMenuButton.addEventListener('click', closeMobileMenu);

        // Fermer le menu quand on clique sur un lien
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    </script>
</body>
</html>