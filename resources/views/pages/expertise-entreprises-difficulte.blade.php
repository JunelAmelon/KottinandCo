@extends('layouts.main')

@section('title', 'Droit des entreprises en difficulté - Kottin&Co')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070" 
                     alt="Entreprises en difficulté" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Notre Expertise</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Droit des entreprises en difficulté
                </h1>
                <p class="text-xl text-gray-300">
                    Un accompagnement sur mesure pour surmonter les difficultés et préserver votre activité
                </p>
            </div>
        </div>
    </section>

    <!-- Prévention des Difficultés -->
    <section class="py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Prévention des Difficultés</h2>
                    <p class="text-gray-600 mb-8">
                        Une approche préventive pour identifier et traiter les difficultés le plus en amont possible.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Diagnostic précoce</h4>
                                <p class="text-gray-600">Analyse approfondie de la situation économique et financière</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Stratégie de redressement</h4>
                                <p class="text-gray-600">Élaboration de solutions adaptées aux spécificités de l'entreprise</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Accompagnement des dirigeants</h4>
                                <p class="text-gray-600">Conseil personnalisé et suivi régulier de la situation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?q=80&w=2074" 
                         alt="Prévention des difficultés" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Procédures Amiables -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070" 
                         alt="Procédures amiables" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Procédures Amiables</h2>
                    <p class="text-gray-600 mb-8">
                        Un accompagnement dans la recherche de solutions négociées avec vos partenaires.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Mandat ad hoc</h4>
                                <p class="text-gray-600">Négociation confidentielle avec les principaux créanciers</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Conciliation</h4>
                                <p class="text-gray-600">Recherche d'accords avec les créanciers sous l'égide d'un conciliateur</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Accords de restructuration</h4>
                                <p class="text-gray-600">Négociation et rédaction des protocoles d'accord</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Procédures Collectives -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Procédures Collectives</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise reconnue dans la gestion des procédures judiciaires.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Sauvegarde</h4>
                                <p class="text-gray-600">Assistance dans la mise en place et le suivi de la procédure</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Redressement judiciaire</h4>
                                <p class="text-gray-600">Élaboration et mise en œuvre du plan de redressement</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Liquidation judiciaire</h4>
                                <p class="text-gray-600">Accompagnement dans la gestion de la procédure</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070" 
                         alt="Procédures collectives" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Plans de Continuation -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070" 
                         alt="Plans de continuation" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Plans de Continuation</h2>
                    <p class="text-gray-600 mb-8">
                        Un accompagnement dans l'élaboration et la mise en œuvre des solutions de sortie de crise.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Élaboration du plan</h4>
                                <p class="text-gray-600">Définition des modalités de remboursement et de restructuration</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Négociation</h4>
                                <p class="text-gray-600">Discussion avec les créanciers et les organes de la procédure</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Suivi d'exécution</h4>
                                <p class="text-gray-600">Accompagnement dans la mise en œuvre du plan adopté</p>
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
                    Votre Entreprise Traverse des Difficultés ?
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Contactez-nous pour une analyse confidentielle de votre situation et des solutions adaptées.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-beige text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-all">
                    Prendre Rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection
