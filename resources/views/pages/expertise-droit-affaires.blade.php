@extends('layouts.main')

@section('title', 'Droit des affaires - Kottin&Co')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070" 
                     alt="Droit des affaires" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Notre Expertise</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Droit des affaires et des sociétés
                </h1>
                <p class="text-xl text-gray-300">
                    Une expertise complète pour accompagner votre entreprise dans toutes ses étapes de développement
                </p>
            </div>
        </div>
    </section>

    <!-- Droit des Sociétés -->
    <section class="py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Droit des sociétés</h2>
                    <p class="text-gray-600 mb-8">
                        Notre expertise en droit des sociétés couvre l'ensemble des besoins juridiques de votre entreprise, 
                        de sa création à son développement.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Création et structuration d'entreprises</h4>
                                <p class="text-gray-600">Choix de la forme juridique, rédaction des statuts et pactes d'associés</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Gouvernance d'entreprise</h4>
                                <p class="text-gray-600">Organisation des relations entre associés ou actionnaires</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Gestion juridique courante</h4>
                                <p class="text-gray-600">Rédaction des procès-verbaux, modifications statutaires, approbation des comptes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Opérations de restructuration</h4>
                                <p class="text-gray-600">Fusions, scissions, apports partiels d'actifs, transformations juridiques</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070" 
                         alt="Conseil juridique" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Fusions-Acquisitions -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=2070" 
                         alt="Contrats commerciaux" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Fusions-Acquisitions</h2>
                    <p class="text-gray-600 mb-8">
                        Nous vous accompagnons dans toutes vos opérations de croissance externe et de cession.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Audits juridiques</h4>
                                <p class="text-gray-600">Identification des risques dans le cadre des due diligences</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Conseil stratégique</h4>
                                <p class="text-gray-600">Accompagnement dans les opérations de cession, acquisition ou prise de participation</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Documentation juridique</h4>
                                <p class="text-gray-600">Négociation et rédaction des documents clés (LOI, SPA, GAP)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Suivi post-acquisition</h4>
                                <p class="text-gray-600">Accompagnement pour assurer la bonne exécution des engagements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Private Equity -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Private Equity</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise pointue dans les opérations d'investissement et de capital-investissement.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Structuration des opérations</h4>
                                <p class="text-gray-600">Levées de fonds, capital-risque, capital-développement</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Documentation contractuelle</h4>
                                <p class="text-gray-600">Rédaction et négociation des pactes d'actionnaires et accords d'investissement</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Montages complexes</h4>
                                <p class="text-gray-600">LBO, MBO et autres opérations financières structurées</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Gestion des relations</h4>
                                <p class="text-gray-600">Conseil pour les fonds d'investissement et résolution des litiges</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559526324-593bc073d938?q=80&w=2070" 
                         alt="Fusions et acquisitions" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Droit Commercial -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015" 
                         alt="Restructuration" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Droit Commercial</h2>
                    <p class="text-gray-600 mb-8">
                        Un accompagnement complet dans vos relations commerciales et contractuelles.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Contrats commerciaux</h4>
                                <p class="text-gray-600">CGV, contrats de distribution, franchise, prestations de services</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Relations commerciales</h4>
                                <p class="text-gray-600">Mise en place, modification ou rupture des accords</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Gestion des litiges</h4>
                                <p class="text-gray-600">Inexécution contractuelle, recouvrement, conflits entre partenaires</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Prévention des risques</h4>
                                <p class="text-gray-600">Analyse et sécurisation des pratiques commerciales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Droit de la Concurrence -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Droit de la Concurrence</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise pointue en droit de la concurrence national et européen.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Conformité réglementaire</h4>
                                <p class="text-gray-600">Conseil sur les règles de concurrence nationales et européennes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Pratiques commerciales</h4>
                                <p class="text-gray-600">Analyse des risques d'abus de position dominante et ententes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Enquêtes et contrôles</h4>
                                <p class="text-gray-600">Assistance lors des procédures devant les autorités</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Contentieux</h4>
                                <p class="text-gray-600">Gestion des litiges de concurrence et actions en réparation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070" 
                         alt="Conseil juridique" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Droit Bancaire et Financier -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative h-[500px] rounded-lg overflow-hidden order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1559526324-593bc073d938?q=80&w=2070" 
                         alt="Fusions et acquisitions" 
                         class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6">Droit Bancaire et Financier</h2>
                    <p class="text-gray-600 mb-8">
                        Une expertise complète en matière de financement et de réglementation bancaire.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Financements</h4>
                                <p class="text-gray-600">Crédits syndiqués, financements d'acquisition, immobilier</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Réglementation</h4>
                                <p class="text-gray-600">Conformité avec les normes bancaires françaises et européennes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Contentieux</h4>
                                <p class="text-gray-600">Gestion des litiges bancaires et financiers</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-beige mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold mb-2">Fintech</h4>
                                <p class="text-gray-600">Conseil en matière de services financiers digitaux</p>
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
                    Besoin d'un Accompagnement Juridique ?
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Contactez-nous pour discuter de vos projets et découvrir comment notre expertise peut vous aider.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-beige text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-90 transition-all">
                    Prendre Rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection
