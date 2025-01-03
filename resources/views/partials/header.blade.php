<header class="fixed w-full top-0 z-50 bg-[#1B2A4A] shadow-lg">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Kottin&Co" class="h-36">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-white font-medium hover:text-beige transition-colors">Accueil</a>
                <a href="{{ route('about') }}" class="text-white font-medium hover:text-beige transition-colors">À propos</a>
                <a href="{{ route('expertise.droit-affaires') }}" class="text-white font-medium hover:text-beige transition-colors">Notre expertise</a>
                <a href="{{ route('blog') }}" class="text-white font-medium hover:text-beige transition-colors">Blog</a>
                <a href="{{ route('contact') }}" class="text-white font-medium hover:text-beige transition-colors">Contact</a>
            </div>

            <!-- CTA Button -->
            <a href="{{ route('contact') }}" class="hidden md:inline-block bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                Prendre rendez-vous
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-white">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden fixed inset-0 bg-[#1B2A4A] z-50">
            <div class="container mx-auto px-4 py-6">
                <div class="flex justify-end mb-8">
                    <button id="close-menu-button" class="text-white">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                <div class="flex flex-col space-y-6">
                    <a href="{{ route('home') }}" class="text-white text-xl hover:text-beige transition-colors">Accueil</a>
                    <a href="{{ route('about') }}" class="text-white text-xl hover:text-beige transition-colors">À propos</a>
                    <a href="{{ route('expertise.droit-affaires') }}" class="text-white text-xl hover:text-beige transition-colors">Notre expertise</a>
                    <a href="{{ route('blog') }}" class="text-white text-xl hover:text-beige transition-colors">Blog</a>
                    <a href="{{ route('contact') }}" class="text-white text-xl hover:text-beige transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </div>
</header>
