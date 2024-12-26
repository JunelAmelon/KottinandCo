@extends('layouts.main')

@section('title', 'Nos Services - Kottin&Co')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{ asset('assets/img/services-hero.jpg') }}" 
                 alt="Services background" 
                 class="w-full h-full object-cover opacity-20">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Nos Services Juridiques
                </h1>
                <p class="text-xl text-gray-300">
                    Une expertise complète au service de vos projets
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ asset('assets/img/services/business-law.jpg') }}" 
                             alt="Droit des affaires" 
                             class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-4">Droit des Affaires</h3>
                        <p class="text-gray-600 mb-4">
                            Expertise complète en droit des sociétés, fusions-acquisitions, et restructurations d'entreprises.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Création et structuration de sociétés
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Fusions et acquisitions
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Pactes d'actionnaires
                            </li>
                        </ul>
                        <a href="#contact" class="inline-block bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                            En savoir plus
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ asset('assets/img/services/international-law.jpg') }}" 
                             alt="Droit International" 
                             class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-4">Droit International</h3>
                        <p class="text-gray-600 mb-4">
                            Accompagnement dans vos projets internationaux et vos investissements en Afrique.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Contrats internationaux
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Implantation à l'étranger
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Arbitrage international
                            </li>
                        </ul>
                        <a href="#contact" class="inline-block bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                            En savoir plus
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ asset('assets/img/services/real-estate.jpg') }}" 
                             alt="Droit Immobilier" 
                             class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-4">Droit Immobilier</h3>
                        <p class="text-gray-600 mb-4">
                            Conseil et assistance dans vos projets immobiliers.
                        </p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Transactions immobilières
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Baux commerciaux
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-beige mr-2"></i>
                                Promotion immobilière
                            </li>
                        </ul>
                        <a href="#contact" class="inline-block bg-beige text-white px-6 py-3 rounded hover:bg-opacity-90 transition-all">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-[#1B2A4A] py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Prêt à Démarrer Votre Projet ?
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Contactez-nous pour une consultation personnalisée
                </p>
                <a href="#contact" 
                   class="inline-block bg-beige text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                    Prendre rendez-vous
                </a>
            </div>
        </div>
    </section>

    @include('sections.contact')
@endsection
