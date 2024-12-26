<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kottin&Co - Cabinet d'Avocats</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        beige: '#C19A6B', // Beige plus riche et intense
                        primary: '#1B2A4A',
                        gold: '#B8860B'
                    }
                }
            }
        }
    </script>
</head>
<body>
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

    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] min-h-screen mt-20">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=2000&q=80" 
                 alt="Hero background" 
                 class="w-full h-full object-cover opacity-10">
        </div>
        <div class="container mx-auto px-4 h-screen flex items-center relative z-10">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Expertise Juridique<br>
                    & Solutions Sur Mesure
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Cabinet d'avocats spécialisé en droit des affaires et droit international
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-beige text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                    Prendre rendez-vous
                </a>
            </div>
        </div>
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light mb-4">Pourquoi Nous Choisir</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Une expertise juridique de premier plan au service de votre réussite
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Expertise Financière -->
                <div class="group relative h-[500px] overflow-hidden rounded-lg">
                    <!-- Image de fond -->
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80" 
                             alt="Expertise Financière" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1B2A4A] via-[#1B2A4A]/80 to-transparent"></div>
                    <!-- Contenu -->
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="text-beige mb-4">
                            <i class="fas fa-chart-line text-4xl"></i>
                        </div>
                        <h3 class="text-3xl font-light text-white mb-4">Expertise <span class="text-beige">Financière</span></h3>
                        <p class="text-gray-200 text-lg mb-6">
                            Accompagnement stratégique dans vos opérations financières, fusions-acquisitions et levées de fonds. Notre expertise garantit la sécurité juridique de vos transactions.
                        </p>
                         
                    </div>
                </div>

                <!-- Droit de la Famille -->
                <div class="group relative h-[500px] overflow-hidden rounded-lg">
                    <!-- Image de fond -->
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80" 
                             alt="Droit de la Famille" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1B2A4A] via-[#1B2A4A]/80 to-transparent"></div>
                    <!-- Contenu -->
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="text-beige mb-4">
                            <i class="fas fa-home text-4xl"></i>
                        </div>
                        <h3 class="text-3xl font-light text-white mb-4">Droit de la <span class="text-beige">Famille</span></h3>
                        <p class="text-gray-200 text-lg mb-6">
                            Une approche humaine et personnalisée pour vous accompagner dans tous les aspects du droit de la famille : divorce, succession, protection des mineurs.
                        </p>
                        
                    </div>
                </div>

                <!-- Contrats de Mariage -->
                <div class="group relative h-[500px] overflow-hidden rounded-lg">
                    <!-- Image de fond -->
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80" 
                             alt="Contrats de Mariage" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1B2A4A] via-[#1B2A4A]/80 to-transparent"></div>
                    <!-- Contenu -->
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="text-beige mb-4">
                            <i class="fas fa-file-signature text-4xl"></i>
                        </div>
                        <h3 class="text-3xl font-light text-white mb-4">Contrats de <span class="text-beige">Mariage</span></h3>
                        <p class="text-gray-200 text-lg mb-6">
                            Conseil et rédaction de contrats de mariage sur mesure pour protéger vos intérêts et votre patrimoine. Une expertise pointue en droit matrimonial.
                        </p>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Services Section -->
<section class="bg-[#1B2A4A] py-20 relative overflow-hidden">
    <!-- Forme décorative en haut à gauche -->
    <div class="absolute top-0 left-0 w-64 h-64 transform -translate-x-1/2 -translate-y-1/2">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="text-[#C4A24D] opacity-10">
            <path fill="currentColor" d="M45.3,-59.1C58.9,-51.1,70.3,-37.7,75.2,-22.1C80.1,-6.4,78.5,11.4,71.4,26.3C64.4,41.2,51.9,53.1,37.6,60.7C23.4,68.4,7.3,71.8,-8.6,69.9C-24.5,68.1,-40.3,61,-54.4,49.7C-68.5,38.4,-81,22.9,-83.1,5.9C-85.2,-11.1,-77,-29.6,-64.3,-42.7C-51.6,-55.8,-34.4,-63.4,-18.1,-65.8C-1.8,-68.2,13.6,-65.3,28.9,-62.1C44.3,-58.9,59.6,-55.3,45.3,-59.1Z" transform="translate(100 100)" />
        </svg>
    </div>

    <!-- Forme décorative en bas à droite -->
    <div class="absolute bottom-0 right-0 w-96 h-96 transform translate-x-1/3 translate-y-1/3">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="text-[#C4A24D] opacity-10">
            <path fill="currentColor" d="M38.5,-47.1C52.9,-36.1,69.4,-25.9,74.2,-11.2C79,3.5,72,22.8,60.1,35.5C48.1,48.2,31.2,54.3,14.3,57.9C-2.6,61.4,-19.5,62.3,-35.1,56.3C-50.7,50.3,-65,37.3,-71.8,20.5C-78.5,3.7,-77.7,-16.9,-68.5,-32.5C-59.3,-48,-41.7,-58.5,-25.5,-68.1C-9.3,-77.7,5.5,-86.4,18.2,-81.2C30.8,-76,45.3,-56.9,38.5,-47.1Z" transform="translate(100 100)" />
        </svg>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <p class="text-[#C4A24D] mb-4">Nos Services</p>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Solutions Juridiques Complètes</h2>
            <p class="text-gray-300">Une expertise juridique de premier plan pour répondre à tous vos besoins</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <!-- Droit des affaires -->
            <div class="bg-[#1B2A4A] p-8 rounded-lg border border-gray-700/50 hover:border-[#C4A24D]/50 transition-colors">
                <div class="mb-6">
                    <i class="fas fa-balance-scale text-4xl text-[#C4A24D]"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Droit des Affaires</h3>
                <p class="text-gray-300 mb-6">Expertise complète en droit des sociétés, fusions-acquisitions, et restructurations d'entreprises.</p>
                <a href="{{ route('expertise.droit-affaires') }}" class="text-[#C4A24D] hover:text-[#d4b15d] inline-flex items-center group">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Entreprises en difficulté -->
            <div class="bg-[#1B2A4A] p-8 rounded-lg border border-gray-700/50 hover:border-[#C4A24D]/50 transition-colors">
                <div class="mb-6">
                    <i class="fas fa-building text-4xl text-[#C4A24D]"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Entreprises en difficulté</h3>
                <p class="text-gray-300 mb-6">Solutions pour la prévention et le traitement des difficultés des entreprises.</p>
                <a href="{{ route('expertise.entreprises-difficulte') }}" class="text-[#C4A24D] hover:text-[#d4b15d] inline-flex items-center group">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Contentieux des affaires -->
            <div class="bg-[#1B2A4A] p-8 rounded-lg border border-gray-700/50 hover:border-[#C4A24D]/50 transition-colors">
                <div class="mb-6">
                    <i class="fas fa-gavel text-4xl text-[#C4A24D]"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Contentieux des affaires</h3>
                <p class="text-gray-300 mb-6">Gestion et résolution des litiges commerciaux et conflits entre entreprises.</p>
                <a href="{{ route('expertise.contentieux-affaires') }}" class="text-[#C4A24D] hover:text-[#d4b15d] inline-flex items-center group">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <!-- Droit pénal des affaires -->
            <div class="bg-[#1B2A4A] p-8 rounded-lg border border-gray-700/50 hover:border-[#C4A24D]/50 transition-colors">
                <div class="mb-6">
                    <i class="fas fa-shield-alt text-4xl text-[#C4A24D]"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Droit pénal des affaires</h3>
                <p class="text-gray-300 mb-6">Protection et conseil en matière de risques pénaux et conformité.</p>
                <a href="{{ route('expertise.penal-affaires') }}" class="text-[#C4A24D] hover:text-[#d4b15d] inline-flex items-center group">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('about') }}" class="inline-block border border-[#C4A24D] text-[#C4A24D] px-8 py-3 rounded hover:bg-[#C4A24D] hover:text-white transition-all">
                En savoir plus
            </a>
        </div>
    </div>
</section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                <!-- Colonne de texte -->
                <div class="md:col-span-5">
                    <h2 class="text-[#1a1a1a] text-4xl md:text-5xl font-light leading-tight mb-8">
                        Notre Expertise<br>
                        Au Service de<br>
                        Nos Clients
                    </h2>
                    <p class="text-gray-600 text-lg mb-6 max-w-xl">
                        Avec plus de 5 ans d'expérience, notre cabinet s'engage à fournir des solutions juridiques innovantes et personnalisées pour répondre à vos besoins spécifiques.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#C4A24D] mr-3"></i>
                            <span class="text-gray-600">Expertise juridique approfondie</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#C4A24D] mr-3"></i>
                            <span class="text-gray-600">Accompagnement personnalisé</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#C4A24D] mr-3"></i>
                            <span class="text-gray-600">Solutions innovantes</span>
                        </li>
                    </ul>
                </div>
                <!-- Colonne image et stats -->
                <div class="md:col-span-7">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8">
                        <div class="md:col-span-8">
                            <img src="https://img.freepik.com/free-photo/law-justice-concept-legal-office_1423-3274.jpg" 
                                 alt="Cabinet d'avocats moderne" 
                                 class="w-full h-[500px] object-cover rounded-lg shadow-lg"
                                 loading="lazy">
                        </div>
                        <div class="md:col-span-4 space-y-4 md:space-y-8">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <span class="text-[#C4A24D] text-4xl font-light">4</span>
                                <p class="text-gray-800 font-medium">Avocats Professionnels</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <span class="text-[#C4A24D] text-4xl font-light">5</span>
                                <p class="text-gray-800 font-medium">Années d'Expérience</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <span class="text-[#C4A24D] text-4xl font-light">40+</span>
                                <p class="text-gray-800 font-medium">Clients Satisfaits</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <span class="text-[#C4A24D] text-4xl font-light">20</span>
                                <p class="text-gray-800 font-medium">Affaires Gagnées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h3 class="text-[#C4A24D] mb-4 text-lg">Témoignages</h3>
                <h2 class="text-4xl md:text-5xl font-bold mb-8">Ce que disent nos clients</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Découvrez les expériences de nos clients et leur satisfaction à travailler avec notre cabinet.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-6">
                        <img src="https://img.freepik.com/free-photo/side-view-lawyer-portrait_23-2151202437.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558&semt=ais_hybrid" alt="Client 1" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Jean Dupont</h4>
                            <p class="text-gray-600">PDG, Entreprise SA</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Une équipe professionnelle et réactive qui a su comprendre nos besoins et nous accompagner dans nos démarches juridiques."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80" alt="Client 2" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Marie Martin</h4>
                            <p class="text-gray-600">Directrice, StartUp Inc</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Leur expertise en droit des affaires nous a permis de développer notre entreprise en toute sérénité."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-6">
                        <img src="https://img.freepik.com/free-photo/side-view-lawyer-portrait_23-2151202437.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558&semt=ais_hybrid" 
                             alt="Saarah Johnson" 
                             class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Sarah Johnson</h4>
                            <p class="text-gray-600">Directrice Marketing</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Une équipe professionnelle et réactive qui a su comprendre nos besoins et nous accompagner dans nos démarches juridiques."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <h3 class="text-[#C4A24D] mb-4 text-lg">Blog</h3>
                <h2 class="text-[#1a1a1a] text-5xl font-light mb-8">Actualités Juridiques</h2>
                <p class="text-gray-600 text-lg">
                    Restez informé des dernières actualités juridiques et de nos analyses.
                </p>
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
            <div class="text-center mt-12">
                <a href="blog.html" class="inline-block bg-beige text-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition-all">
                    Voir plus d'articles
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-[#1B2A4A] text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à Démarrer Votre Projet ?</h2>
            <p class="text-xl mb-8 opacity-90">
                Prenez rendez-vous pour une consultation personnalisée
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-beige px-8 py-4 rounded hover:bg-gray-100 transition-all inline-flex items-center">
                Contactez-nous maintenant
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left Column - Form -->
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-4xl font-bold mb-2">Contactez-nous</h2>
                    <p class="text-2xl mb-8">Nous sommes à votre écoute</p>
                    
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <input type="text" name="firstname" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Prénom" required>
                            </div>
                            <div>
                                <input type="text" name="lastname" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Nom" required>
                            </div>
                        </div>
                        
                        <div>
                            <input type="email" name="email" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Email professionnel" required>
                        </div>
                        
                        <div>
                            <textarea name="message" rows="4" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Décrivez-nous votre projet ou votre besoin juridique. Notre équipe d'experts vous répondra dans les plus brefs délais." required></textarea>
                        </div>
                        
                        <button type="submit" class="bg-beige text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                            Envoyer le message
                        </button>
                    </form>
                </div>

                <!-- Right Column - Map and Info -->
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-4xl font-bold mb-6">Nos bureaux</h2>
                    <p class="text-gray-600 mb-8">
                        Venez nous rencontrer dans nos locaux au cœur de Paris. Notre équipe vous accueille du lundi au vendredi de 9h à 18h.
                    </p>
                    
                    <!-- Google Maps Embed -->
                    <div class="w-full h-64 rounded-lg overflow-hidden shadow-lg mb-6">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937604!2d2.292292615509614!3d48.85836997928678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1631234567890!5m2!1sfr!2sfr" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>

                    <!-- Contact Info -->
                    <div class="text-gray-600">
                        <p class="mb-2"><i class="fas fa-map-marker-alt mt-1.5 mr-3"></i>123 Avenue des Champs-Élysées, 75008 Paris</p>
                        <p><i class="fas fa-phone mr-3"></i>+33 (0)1 23 45 67 89</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-[#98FB98] opacity-20 rounded-full transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#98FB98] opacity-20 rounded-full transform -translate-x-1/2 translate-y-1/2"></div>
    </section>

   <!-- Footer -->
<footer class="bg-[#1B2A4A] text-white">
    <div class="container mx-auto px-4">
        <!-- Newsletter Section -->
        <div class="border-b border-white/10">
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
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">À propos</a></li>
                    <li><a href="#services" class="text-gray-300 hover:text-beige text-sm transition-colors">Services</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-beige text-sm transition-colors">Contact</a></li>
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
                        <span class="text-gray-300">123 Avenue des Champs-Élysées, 75008 Paris</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-3"></i>
                        <span class="text-gray-300">+33 (0)1 23 45 67 89</span>
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

        // Fermer le menu quand on clique sur un lien
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
                    
                    // Fermer le menu mobile si ouvert
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
                // Add your form submission logic here
                alert('Message sent successfully!');
                contactForm.reset();
            });
        }
    </script>
</body>
</html>
