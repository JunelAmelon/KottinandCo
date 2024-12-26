<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Kottin&Co</title>
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
                        <img src="assets/img/logo.png" alt="Kottin&Co" class="h-36">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-white font-medium hover:text-beige transition-colors">Accueil</a>
                    <a href="{{ route('about') }}" class="text-white font-medium hover:text-beige transition-colors">À propos</a>
                    <a href="#services" class="text-white font-medium hover:text-beige transition-colors">Services</a>
                    <a href="{{ route('blog') }}" class="text-white font-medium hover:text-beige transition-colors">Blog</a>
                    <a href="{{ route('contact') }}" class="text-white font-medium hover:text-beige transition-colors">Contact</a>
                </div>

                <!-- CTA Button -->
                <a href="{{ route('contact') }}" class="hidden md:inline-block bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                    Prendre rendez-vous
                </a>

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
                        <img src="assets/img/logo.png" alt="Logo" class="h-24">
                        <button id="close-mobile-menu-button" class="text-white hover:text-beige focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Navigation Links -->
                    <nav class="flex-grow flex flex-col justify-center px-8">
                        <div class="space-y-8">
                            <a href="{{ route('home') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Accueil</a>
                            <a href="{{ route('about') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">À propos</a>
                            <a href="#services" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Services</a>
                            <a href="{{ route('blog') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Blog</a>
                            <a href="{{ route('contact') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Contact</a>
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

    <!-- Main Content -->
    <main>
        <!-- Blog Hero Section -->
        <section class="relative bg-[#1B2A4A] h-[60vh] flex items-center mt-20">
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                     alt="Background" 
                     class="w-full h-full object-cover opacity-10">
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h3 class="text-beige mb-4 text-lg">Notre Blog</h3>
                    <h1 class="text-6xl font-light text-white mb-6">Actualités & Insights<br>Juridiques</h1>
                    <p class="text-xl text-gray-300">
                        Découvrez nos derniers articles et analyses sur le droit des affaires, l'actualité juridique et les enjeux de demain.
                    </p>
                </div>
            </div>
        </section>

        <!-- Featured Article -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="relative h-[500px] rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80" 
                             alt="Featured Article" 
                             class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="text-beige mb-4 inline-block">Droit des affaires</span>
                        <h2 class="text-4xl font-light text-[#1B2A4A] mb-6">Les nouvelles réglementations pour les entreprises en 2024</h2>
                        <p class="text-gray-600 mb-8">
                            Découvrez les changements majeurs qui impacteront les entreprises françaises en 2024 et comment s'y préparer efficacement.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Thomas Martin" class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <h4 class="font-medium">Thomas Martin</h4>
                                    <p class="text-gray-600 text-sm">Avocat en droit des affaires</p>
                                </div>
                            </div>
                            <a href="article.html" class="inline-flex items-center text-beige hover:text-[#1B2A4A] transition-colors">
                                Lire l'article
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories -->
        <div class="container mx-auto px-4 mb-12">
            <h2 class="text-2xl font-bold mb-6">Catégories</h2>
            <div class="flex flex-wrap gap-4">
                <a href="#" class="px-4 py-2 bg-beige text-white rounded hover:bg-opacity-90 transition-all">Tous</a>
                <a href="#" class="px-4 py-2 bg-[#1B2A4A] text-white rounded hover:bg-opacity-90 transition-all">Conseils</a>
                <a href="#" class="px-4 py-2 bg-[#1B2A4A] text-white rounded hover:bg-opacity-90 transition-all">Actualités</a>
                <a href="#" class="px-4 py-2 bg-[#1B2A4A] text-white rounded hover:bg-opacity-90 transition-all">Études de cas</a>
                <a href="#" class="px-4 py-2 bg-[#1B2A4A] text-white rounded hover:bg-opacity-90 transition-all">Tendances</a>
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
                    <!-- Article 1 -->
                    <article class="bg-white rounded-lg overflow-hidden shadow-lg group transform hover:-translate-y-1 transition-all duration-300">
                        <a href="article.html" class="block">
                            <div class="relative h-64">
                                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80" 
                                     alt="Article" 
                                     class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="p-6">
                                <span class="text-beige text-sm">Propriété intellectuelle</span>
                                <h3 class="text-xl font-medium mt-2 mb-4 text-[#1B2A4A] group-hover:text-beige transition-colors">
                                    Protection des marques à l'ère du digital
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Comment protéger efficacement sa marque dans l'environnement numérique actuel ?
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sophie Bernard" class="w-8 h-8 rounded-full object-cover mr-3">
                                        <div class="text-sm">
                                            <h4 class="font-medium">Sophie Bernard</h4>
                                            <p class="text-gray-500">12 Dec 2024</p>
                                        </div>
                                    </div>
                                    <i class="fas fa-arrow-right text-beige group-hover:translate-x-2 transition-transform"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <!-- Article 2 -->
                    <article class="bg-white rounded-lg overflow-hidden shadow-lg group transform hover:-translate-y-1 transition-all duration-300">
                        <a href="article.html" class="block">
                            <div class="relative h-64">
                                <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&q=80" 
                                     alt="Article" 
                                     class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="p-6">
                                <span class="text-beige text-sm">Droit international</span>
                                <h3 class="text-xl font-medium mt-2 mb-4 text-[#1B2A4A] group-hover:text-beige transition-colors">
                                    Expansion internationale : les points clés
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Les aspects juridiques essentiels à considérer lors de l'expansion de votre entreprise.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Pierre Dubois" class="w-8 h-8 rounded-full object-cover mr-3">
                                        <div class="text-sm">
                                            <h4 class="font-medium">Pierre Dubois</h4>
                                            <p class="text-gray-500">10 Dec 2024</p>
                                        </div>
                                    </div>
                                    <i class="fas fa-arrow-right text-beige group-hover:translate-x-2 transition-transform"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <!-- Article 3 -->
                    <article class="bg-white rounded-lg overflow-hidden shadow-lg group transform hover:-translate-y-1 transition-all duration-300">
                        <a href="article.html" class="block">
                            <div class="relative h-64">
                                <img src="https://images.unsplash.com/photo-1664575602554-2087b04935a5?auto=format&fit=crop&q=80" 
                                     alt="Article" 
                                     class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="p-6">
                                <span class="text-beige text-sm">Droit immobilier</span>
                                <h3 class="text-xl font-medium mt-2 mb-4 text-[#1B2A4A] group-hover:text-beige transition-colors">
                                    Les nouveautés en droit immobilier
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Analyse des dernières évolutions législatives en matière de droit immobilier.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Pierre Dubois" class="w-8 h-8 rounded-full object-cover mr-3">
                                        <div class="text-sm">
                                            <h4 class="font-medium">Pierre Dubois</h4>
                                            <p class="text-gray-500">8 Dec 2024</p>
                                        </div>
                                    </div>
                                    <i class="fas fa-arrow-right text-beige group-hover:translate-x-2 transition-transform"></i>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                
                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-4 py-2 rounded bg-[#1B2A4A] text-white">1</a>
                        <a href="#" class="px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">2</a>
                        <a href="#" class="px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">3</a>
                        <span class="px-4 py-2 text-gray-500">...</span>
                        <a href="#" class="px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">8</a>
                        <a href="#" class="px-4 py-2 rounded border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </section>
    </main>

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
                <img src="assets/img/logo.png" alt="Kottin&Co" class="h-36 mb-6">
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
                    <li><a href="index.html" class="text-gray-300 hover:text-beige text-sm transition-colors">Accueil</a></li>
                    <li><a href="#about" class="text-gray-300 hover:text-beige text-sm transition-colors">À propos</a></li>
                    <li><a href="#services" class="text-gray-300 hover:text-beige text-sm transition-colors">Services</a></li>
                    <li><a href="blog.html" class="text-gray-300 hover:text-beige text-sm transition-colors">Blog</a></li>
                    <li><a href="#contact" class="text-gray-300 hover:text-beige text-sm transition-colors">Contact</a></li>
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