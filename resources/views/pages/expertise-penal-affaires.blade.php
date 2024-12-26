@extends('layouts.main')

@section('title', 'Droit pénal des affaires et compliance - Kottin&Co')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?q=80&w=2070" 
                     alt="Pénal des affaires" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Notre Expertise</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Droit pénal des affaires et compliance
                </h1>
                <p class="text-xl text-gray-300">
                    Une expertise pointue en matière de prévention des risques et de défense pénale
                </p>
            </div>
        </div>
    </section>

    <!-- Droit Pénal des Affaires -->
    <section class="py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Droit Pénal des Affaires</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise approfondie dans la défense des dirigeants et des entreprises.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Abus de biens sociaux</h4>
                                <p class="text-gray-600">Défense dans les cas d'utilisation abusive des ressources de l'entreprise</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Fraude fiscale</h4>
                                <p class="text-gray-600">Assistance dans les procédures de contrôle et de contentieux fiscal</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Blanchiment d'argent</h4>
                                <p class="text-gray-600">Défense dans les enquêtes relatives au blanchiment de capitaux</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070" 
                         alt="Prévention des risques" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070" 
                         alt="Défense pénale" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Compliance</h2>
                    <p class="text-gray-600 mb-8">
                        Une approche préventive pour assurer la conformité de votre entreprise.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Programmes de conformité</h4>
                                <p class="text-gray-600">Mise en place et suivi des programmes de conformité</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Audits de conformité</h4>
                                <p class="text-gray-600">Évaluation des risques et des procédures internes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Formation</h4>
                                <p class="text-gray-600">Sensibilisation des équipes aux enjeux de conformité</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enquêtes Internes -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Enquêtes Internes</h2>
                    <p class="text-gray-600 mb-8">
                        Une méthodologie éprouvée pour la conduite d'enquêtes internes.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Conduite d'enquêtes</h4>
                                <p class="text-gray-600">Organisation et supervision des investigations internes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Gestion de crise</h4>
                                <p class="text-gray-600">Accompagnement dans la gestion des situations sensibles</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Recommandations</h4>
                                <p class="text-gray-600">Élaboration de mesures correctives et préventives</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070" 
                         alt="Compliance" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Protection des Données -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=2070" 
                         alt="Protection des données" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Protection des Données</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise en matière de protection des données personnelles et de cybersécurité.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Conformité RGPD</h4>
                                <p class="text-gray-600">Mise en conformité avec la réglementation sur les données personnelles</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Cybersécurité</h4>
                                <p class="text-gray-600">Conseil en matière de sécurité des systèmes d'information</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Gestion des incidents</h4>
                                <p class="text-gray-600">Accompagnement en cas de violation de données</p>
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
                    Besoin d'un Accompagnement en Droit Pénal des Affaires ?
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Contactez-nous pour une analyse confidentielle de votre situation.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-beige text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-all">
                    Prendre Rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection
