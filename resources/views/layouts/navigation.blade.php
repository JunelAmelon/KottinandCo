<nav class="bg-[#1B2A4A] fixed w-full z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-white text-2xl font-bold">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Kottin & Co" class="h-12">
            </a>

            <!-- Navigation principale -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-beige">Accueil</a>
                <a href="{{ route('about') }}" class="text-white hover:text-beige">À propos</a>
                <div class="relative group">
                    <button class="text-white hover:text-beige">Expertises</button>
                    <div class="hidden group-hover:block absolute left-0 mt-2 w-64 bg-white shadow-lg rounded-lg py-2">
                        <a href="{{ route('expertise.droit-affaires') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Droit des affaires
                        </a>
                        <a href="{{ route('expertise.entreprises-difficulte') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Entreprises en difficulté
                        </a>
                        <a href="{{ route('expertise.contentieux-affaires') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Contentieux des affaires
                        </a>
                        <a href="{{ route('expertise.penal-affaires') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                            Droit pénal des affaires
                        </a>
                    </div>
                </div>
                <a href="{{ route('blog') }}" class="text-white hover:text-beige">Blog</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-beige">Contact</a>
            </div>

            <!-- Menu mobile -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#1B2A4A] pb-4">
        <div class="container mx-auto px-4">
            <a href="{{ route('home') }}" class="block py-2 text-white hover:text-beige">Accueil</a>
            <a href="{{ route('about') }}" class="block py-2 text-white hover:text-beige">À propos</a>
            <div class="py-2">
                <span class="block text-white mb-2">Expertises</span>
                <a href="{{ route('expertise.droit-affaires') }}" class="block py-1 pl-4 text-white hover:text-beige">
                    Droit des affaires
                </a>
                <a href="{{ route('expertise.entreprises-difficulte') }}" class="block py-1 pl-4 text-white hover:text-beige">
                    Entreprises en difficulté
                </a>
                <a href="{{ route('expertise.contentieux-affaires') }}" class="block py-1 pl-4 text-white hover:text-beige">
                    Contentieux des affaires
                </a>
                <a href="{{ route('expertise.penal-affaires') }}" class="block py-1 pl-4 text-white hover:text-beige">
                    Droit pénal des affaires
                </a>
            </div>
            <a href="{{ route('blog') }}" class="block py-2 text-white hover:text-beige">Blog</a>
            <a href="{{ route('contact') }}" class="block py-2 text-white hover:text-beige">Contact</a>
        </div>
    </div>
</nav>
