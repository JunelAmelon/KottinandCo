<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'KOTTIN PARTNERS - Cabinet d\'Avocats')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/kt.logo.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1B2A4A',
                        beige: '#C19A6B',
                        gold: '#B8860B'
                    }
                }
            }
        }
    </script>
    @yield('styles')
</head>
<body>

<header class="fixed w-full top-0 z-50 bg-[#1B2A4A] shadow-lg">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/assets/img/logo.png" alt="KOTTIN PARTNERS" class="h-56">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-white font-medium hover:text-beige transition-colors">Accueil</a>
                <a href="{{ route('cabinet') }}" class="text-white font-medium hover:text-beige transition-colors">Notre cabinet</a>
                <a href="{{ route('expertise') }}" class="text-white font-medium hover:text-beige transition-colors">Nos expertises</a>
                <a href="{{ route('equipe') }}" class="text-white font-medium hover:text-beige transition-colors">Notre équipe</a>
                <a href="{{ route('join') }}" class="text-white font-medium hover:text-beige transition-colors">Nous rejoindre</a>
                <a href="{{ route('blog') }}" class="text-white font-medium hover:text-beige transition-colors">Actualités</a>
            </div>

            <!-- CTA Button -->
            <a href="{{ route('contact') }}" class="hidden md:inline-block bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                Contactez-nous
            </a>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-beige focus:outline-none">
                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <img src="/assets/img/logo.png" alt="Logo" class="h-56">
                    <button id="close-mobile-menu-button" class="text-white hover:text-beige focus:outline-none">
                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav class="flex-grow flex flex-col justify-center px-8">
                    <div class="space-y-8">
                        <a href="{{ route('home') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Accueil</a>
                        <a href="{{ route('cabinet') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Notre cabinet</a>
                        <a href="{{ route('expertise') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Nos expertises</a>
                        <a href="{{ route('equipe') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Notre équipe</a>
                        <a href="{{ route('join') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Nous rejoindre</a>
                        <a href="{{ route('blog') }}" class="mobile-menu-link block text-3xl font-semibold text-white hover:text-beige transform hover:translate-x-2 transition-all duration-300">Actualités</a>
                    </div>
                </nav>

                <!-- Footer Info -->
                <div class="p-8">
                    <p class="text-white text-sm mb-2">1 rue d'Astorg 75008 Paris</p>
                    <p class="text-white text-sm">+33 (0)6 19 13 04 61</p>
                </div>
            </div>
        </div>
    </div>
</header>



    <!-- Main Content -->
    <main class="mt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#1B2A4A] text-white ">
        <div class="container mx-auto px-4">
         

            <!-- Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 py-20">
                <!-- Brand -->
                <div class="col-span-1">
                    <img src="/assets/img/logo.png" alt="KOTTIN PARTNERS" class="h-56 mb-6">
                    <p class="text-gray-300 mb-6">
                        Cabinet d'avocats spécialisé en droit des affaires et en contentieux  des affaires.
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
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Notre cabinet</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-beige text-sm transition-colors">Nos expertises</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-beige text-sm transition-colors">Notre equipe</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-beige text-sm transition-colors">Nous rejoindre</a></li>
                        <li><a href="{{ route('blog') }}" class="text-gray-300 hover:text-beige text-sm transition-colors"> Actualités</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
<!-- Services -->
<div class="col-span-1">
    <h3 class="text-xl font-medium mb-6">Nos expertises</h3>
    <ul class="space-y-4">
        <li>
            <a href="{{ route('expertise.droit-affaires') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">
                Droit des affaires et des sociétés
            </a>
        </li>
        <li>
            <a href="{{ route('expertise.entreprises-difficulte') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">
                Droit des entreprises en difficulté
            </a>
        </li>
        <li>
            <a href="{{ route('expertise.contentieux-affaires') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">
                Contentieux des affaires
            </a>
        </li>
        <li>
            <a href="{{ route('expertise.penal-affaires') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">
                Droit pénal des affaires et compliance
            </a>
        </li>
    </ul>
</div>


                <!-- Contact -->
                <div class="col-span-1">
                    <h3 class="text-xl font-medium mb-6">Contact</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1.5 mr-3"></i>
                            <span class="text-gray-300">1 rue d'Astorg 75008 Paris</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3"></i>
                            <span class="text-gray-300">+33 (0)6 19 13 04 61</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span class="text-gray-300">contact@kottinpartners.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-white/10 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300 text-sm mb-4 md:mb-0">
                        2024 KOTTIN PARTNERS. Tous droits réservés.
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

    <script src="{{ asset('/js/contact.js') }}"></script>
    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-mobile-menu-button');
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

        // Close menu when clicking a link
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').slice(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    if (!mobileMenu.classList.contains('translate-x-full')) {
                        closeMobileMenu();
                    }
                }
            });
        });

        // Form Validation and Submission
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Message sent successfully!');
                contactForm.reset();
            });
        }
    </script>
    @yield('scripts')
</body>
</html>
