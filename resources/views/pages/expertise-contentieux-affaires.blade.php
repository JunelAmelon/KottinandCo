@extends('layouts.main')

@section('title', 'Contentieux des affaires - Kottin&Co')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20">
        <div class="absolute inset-0">
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2070" 
                     alt="Contentieux des affaires" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Notre Expertise</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Contentieux des affaires
                </h1>
                <p class="text-xl text-gray-300">
                    Une expertise pointue dans la gestion et la résolution des litiges commerciaux
                </p>
            </div>
        </div>
    </section>

    <!-- Contentieux Commercial -->
    <section class="py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Contentieux Commercial</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise approfondie dans la résolution des litiges commerciaux complexes.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Rupture de relations commerciales</h4>
                                <p class="text-gray-600">Gestion des litiges liés à la rupture brutale des relations d'affaires</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Contentieux contractuel</h4>
                                <p class="text-gray-600">Résolution des litiges liés à l'exécution des contrats commerciaux</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Recouvrement de créances</h4>
                                <p class="text-gray-600">Mise en œuvre des procédures de recouvrement efficaces</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=2071" 
                         alt="Contentieux commercial" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Contentieux Sociétaire -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069" 
                         alt="Contentieux sociétaire" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Contentieux Sociétaire</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise dans la résolution des conflits entre associés et actionnaires.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Conflits entre associés</h4>
                                <p class="text-gray-600">Gestion des différends relatifs à la gouvernance et au contrôle</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Responsabilité des dirigeants</h4>
                                <p class="text-gray-600">Défense des intérêts des dirigeants mis en cause</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Contentieux post-acquisition</h4>
                                <p class="text-gray-600">Résolution des litiges suite aux opérations de M&A</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Procédures d'Urgence -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Procédures d'Urgence</h2>
                    <p class="text-gray-600 mb-8">
                        Une réactivité maximale dans les situations nécessitant une intervention rapide.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Référés</h4>
                                <p class="text-gray-600">Obtention de mesures provisoires ou conservatoires</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Saisies conservatoires</h4>
                                <p class="text-gray-600">Mise en œuvre des mesures de sauvegarde des droits</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Ordonnances sur requête</h4>
                                <p class="text-gray-600">Obtention de mesures non contradictoires</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070" 
                         alt="Procédures d'urgence" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Modes Alternatifs -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1453906971074-ce568cccbc63?q=80&w=2070" 
                         alt="Modes alternatifs" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Modes Alternatifs de Résolution des Conflits</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise dans la recherche de solutions négociées.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Médiation</h4>
                                <p class="text-gray-600">Accompagnement dans la recherche d'accords amiables</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Arbitrage</h4>
                                <p class="text-gray-600">Représentation devant les tribunaux arbitraux</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Négociation</h4>
                                <p class="text-gray-600">Recherche de solutions transactionnelles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-[#1B2A4A]">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Vous Faites Face à un Litige ?
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Contactez-nous pour une analyse approfondie de votre situation et des solutions adaptées.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-beige text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-all">
                    Prendre Rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection
