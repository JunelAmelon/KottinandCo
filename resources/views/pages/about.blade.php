<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Kottin&Co</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        beige: '#C19A6B',
                        primary: '#1B2A4A',
                        gold: '#B8860B'
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-overlay {
            background: linear-gradient(to right, rgba(27, 42, 74, 0.95), rgba(27, 42, 74, 0.8));
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .team-gradient {
            background: linear-gradient(45deg, rgba(27, 42, 74, 0.95), rgba(193, 154, 107, 0.9));
        }
        .decorative-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, #C19A6B, #1B2A4A);
            opacity: 0.1;
            z-index: -1;
        }
        .shape-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
        }
        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
        }
        .shape-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            right: 10%;
        }
    </style>
</head>
<body class="font-sans">
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
    <section class="relative bg-[#1B2A4A] py-32 mt-20 mb-36">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=2000&q=80" 
                     alt="About" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">À propos de nous</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Notre Cabinet
                </h1>
                <p class="text-xl text-gray-300">
                    Une expertise juridique au service de votre réussite
                </p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
                <!-- Images Column -->
                <div class="md:col-span-5">
                    <div class="grid grid-cols-2 gap-4 sticky top-24">
                        <div class="rounded-2xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=2070" 
                                 alt="Notre Équipe" 
                                 class="w-full h-[300px] object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="rounded-2xl overflow-hidden mt-8">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069" 
                                 alt="Notre Cabinet" 
                                 class="w-full h-[300px] object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="md:col-span-7 space-y-8">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        L'Excellence au Service <br>de Votre Réussite
                    </h2>
                    
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-600 leading-relaxed">
                            Kottin & Co. est un cabinet d'avocats d'affaires indépendant pluridisciplinaire qui intervient en conseil et en contentieux des affaires en France et en Afrique.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Le cabinet accompagne une large gamme de clients, notamment des fonds d'investissement, startups, des PME, ETI, des entrepreneurs et des dirigeants, dans la gestion de leurs problématiques juridiques, réglementaires, transactionnelles et contentieuses.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Le cabinet offre un service sur mesure, alliant rigueur juridique, compréhension approfondie du monde des affaires et maîtrise des enjeux économiques et financiers. Cette approche personnalisée permet au cabinet d'apporter des solutions adaptées aux spécificités et aux objectifs de chaque dossier traité.
                        </p>
                    </div>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-3 gap-8 py-8 border-t border-b border-gray-200">
                        <div class="text-center">
                            <span class="block text-4xl font-bold text-primary mb-2">15+</span>
                            <span class="text-gray-600 text-sm">Années d'Expérience</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-4xl font-bold text-primary mb-2">250+</span>
                            <span class="text-gray-600 text-sm">Dossiers Traités</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-4xl font-bold text-primary mb-2">98%</span>
                            <span class="text-gray-600 text-sm">Clients Satisfaits</span>
                        </div>
                    </div>

                    <div class="text-center md:text-left">
                        <a href="{{ route('contact') }}" 
                           class="inline-block bg-primary text-white px-8 py-4 rounded-full hover:bg-beige transition-colors text-lg font-semibold">
                            Prendre Rendez-vous
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12 md:py-20">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-primary to-primary/80 mb-16">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto py-16 md:py-24">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <!-- Image -->
                        <div class="relative aspect-square md:aspect-[4/5] rounded-2xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=2070" 
                                 alt="Justin Kottin" 
                                 class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <!-- Info -->
                        <div class="text-white space-y-6">
                            <h1 class="text-4xl md:text-6xl font-bold">Justin Kottin</h1>
                            <p class="text-xl md:text-2xl text-white/90">Avocat Associé Fondateur</p>
                            <div class="flex flex-wrap gap-4 pt-4">
                                <a href="mailto:contact@kottin.co" 
                                   class="inline-flex items-center px-6 py-3 bg-white text-primary rounded-full hover:bg-beige hover:text-white transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Contact
                                </a>
                                <a href="#" 
                                   class="inline-flex items-center px-6 py-3 border-2 border-white text-white rounded-full hover:bg-white hover:text-primary transition-colors">
                                    <i class="fab fa-linkedin mr-2"></i>
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <!-- Présentation -->
                <div class="max-w-4xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold text-primary mb-8 text-center">POLYVALENT PAR NATURE</h2>
                    <div class="prose prose-lg max-w-none">
                        <p class="lead text-xl text-gray-900 mb-6">
                            Avocat inscrit au Barreau de Paris, Justin est diplômé de l'ESSEC Business School et de l'Université Paris Nanterre en gestion des entreprises et en droit des affaires.
                        </p>
                        <p class="text-gray-600 mb-4">
                            Avant de fonder Kottin & Co., Justin a acquis une solide expérience dans de prestigieux cabinets d'avocats d'affaires internationaux (Clifford Chance, Skadden et White & Case) et auprès d'entreprises françaises et internationales de premier plan (Deloitte, BNP Paribas, Raizers) à Paris, à Londres et à Casablanca.
                        </p>
                        <p class="text-gray-600 mb-4">
                            Entrepreneur dans l'âme et fort de sa double formation juridique et financière, Justin conseille une clientèle variée, allant des start-ups aux PME, en passant par les investisseurs, actionnaires et dirigeants, dans des secteurs d'activité divers.
                        </p>
                        <p class="text-gray-600">
                            Justin représente également des clients devant les juridictions civiles, commerciales et pénales en France et en Afrique.
                        </p>
                    </div>
                </div>

                <!-- Expertise & Langues -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Expertise -->
                    <div class="md:col-span-2 bg-white p-8 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-semibold text-primary mb-6">
                            <i class="fas fa-gavel text-beige mr-3"></i>
                            Domaines d'expertise
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <h4 class="font-medium text-primary mb-2">Droit des affaires</h4>
                                <p class="text-sm text-gray-600">Conseil et contentieux</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <h4 class="font-medium text-primary mb-2">Contentieux commercial</h4>
                                <p class="text-sm text-gray-600">Litiges complexes</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <h4 class="font-medium text-primary mb-2">Droit pénal des affaires</h4>
                                <p class="text-sm text-gray-600">Compliance & fraude</p>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors">
                                <h4 class="font-medium text-primary mb-2">Restructuring</h4>
                                <p class="text-sm text-gray-600">Entreprises en difficulté</p>
                            </div>
                        </div>
                    </div>

                    <!-- Langues -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-semibold text-primary mb-6">
                            <i class="fas fa-globe text-beige mr-3"></i>
                            Langues
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700">Français</span>
                                <div class="flex space-x-1">
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700">Anglais</span>
                                <div class="flex space-x-1">
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                    <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-700">Espagnol</span>
                                <div class="flex space-x-1">
                                    <div class="w-2 h-2 rounded-full bg-primary"></div>
                                    <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                                    <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formation & Parcours -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    <!-- Formation -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-semibold text-primary mb-8">
                            <i class="fas fa-graduation-cap text-beige mr-3"></i>
                            Formation
                        </h3>
                        <div class="space-y-8">
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2021</div>
                                <h4 class="font-medium text-gray-900">Certificat d'Aptitude à la Profession d'Avocat</h4>
                                <p class="text-gray-600">Droit des Affaires, EFB</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2019</div>
                                <h4 class="font-medium text-gray-900">Master in Management</h4>
                                <p class="text-gray-600">Programme Grande École, ESSEC Business School</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2019</div>
                                <h4 class="font-medium text-gray-900">Diplôme Universitaire</h4>
                                <p class="text-gray-600">Droit de l'Energie, de l'Investissement et de l'Arbitrage International</p>
                            </div>
                            <div class="relative pl-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-primary"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2016</div>
                                <h4 class="font-medium text-gray-900">Master en Droit des Affaires</h4>
                                <p class="text-gray-600">Université Paris Nanterre</p>
                            </div>
                        </div>
                    </div>

                    <!-- Parcours -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-semibold text-primary mb-8">
                            <i class="fas fa-briefcase text-beige mr-3"></i>
                            Parcours
                        </h3>
                        <div class="space-y-8">
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2023-2024</div>
                                <h4 class="font-medium text-gray-900">Clifford Chance</h4>
                                <p class="text-gray-600">Avocat collaborateur</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2022-2023</div>
                                <h4 class="font-medium text-gray-900">Deloitte</h4>
                                <p class="text-gray-600">Auditeur financier</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2021</div>
                                <h4 class="font-medium text-gray-900">Skadden</h4>
                                <p class="text-gray-600">Avocat stagiaire</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2021</div>
                                <h4 class="font-medium text-gray-900">White & Case</h4>
                                <p class="text-gray-600">Avocat stagiaire</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2020</div>
                                <h4 class="font-medium text-gray-900">Clifford Chance</h4>
                                <p class="text-gray-600">Avocat stagiaire</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2020</div>
                                <h4 class="font-medium text-gray-900">Raizers</h4>
                                <p class="text-gray-600">Avocat stagiaire</p>
                            </div>
                            <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2017-2019</div>
                                <h4 class="font-medium text-gray-900">BNP Paribas</h4>
                                <p class="text-gray-600">Compliance officer</p>
                            </div>
                            <div class="relative pl-8 border-l-2 border-gray-200">
                                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-beige"></div>
                                <div class="text-sm text-beige font-semibold mb-2">2016</div>
                                <h4 class="font-medium text-gray-900">Raizers</h4>
                                <p class="text-gray-600">Juriste stagiaire</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Associations -->
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-semibold text-primary mb-6">
                        <i class="fas fa-users text-beige mr-3"></i>
                        Associations & Engagements
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-check-circle text-beige mt-1"></i>
                            <span class="text-gray-700">Fondateur du think thank Minerva Business Networking Club</span>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-check-circle text-beige mt-1"></i>
                            <span class="text-gray-700">Membre de l'Association des Professionnels du Contentieux des Affaires</span>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-check-circle text-beige mt-1"></i>
                            <span class="text-gray-700">Membre de l'Association des Professionnels du Contentieux Économique et Financier</span>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-check-circle text-beige mt-1"></i>
                            <span class="text-gray-700">Membre de l'Institut Français des Praticiens des Procédures Collectives</span>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-check-circle text-beige mt-1"></i>
                            <span class="text-gray-700">Membre du Club des Juristes d'Affaires Africains</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Cards -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-primary mb-4">Nos Expertises</h2>
                <p class="text-xl text-gray-600">Des solutions juridiques adaptées à vos besoins</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Expertise 1 -->
                <a href="{{ route('expertise.droit-affaires') }}" class="group">
                    <div class="relative h-80 rounded-xl overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069" 
                             alt="Droit des affaires" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Droit des affaires</h3>
                            <p class="text-beige group-hover:text-white transition-colors">
                                Expertise complète en droit des sociétés et fusions-acquisitions
                            </p>
                        </div>
                    </div>
                </a>

                <!-- Expertise 2 -->
                <a href="{{ route('expertise.entreprises-difficulte') }}" class="group">
                    <div class="relative h-80 rounded-xl overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1573167243872-43c6433b9d40?q=80&w=2069" 
                             alt="Entreprises en difficulté" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Entreprises en difficulté</h3>
                            <p class="text-beige group-hover:text-white transition-colors">
                                Solutions pour la prévention et le traitement des difficultés
                            </p>
                        </div>
                    </div>
                </a>

                <!-- Expertise 3 -->
                <a href="{{ route('expertise.contentieux-affaires') }}" class="group">
                    <div class="relative h-80 rounded-xl overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2070" 
                             alt="Contentieux des affaires" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Contentieux des affaires</h3>
                            <p class="text-beige group-hover:text-white transition-colors">
                                Gestion et résolution des litiges commerciaux
                            </p>
                        </div>
                    </div>
                </a>

                <!-- Expertise 4 -->
                <a href="{{ route('expertise.penal-affaires') }}" class="group">
                    <div class="relative h-80 rounded-xl overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?q=80&w=2069" 
                             alt="Droit pénal des affaires" 
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent opacity-90 group-hover:opacity-95 transition-opacity"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Droit pénal des affaires</h3>
                            <p class="text-beige group-hover:text-white transition-colors">
                                Protection et conseil en matière de risques pénaux
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
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

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>