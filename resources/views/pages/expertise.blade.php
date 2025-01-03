@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] h-[60vh] flex items-center mt-20">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black opacity-70"></div>
            <img src="https://img.freepik.com/free-photo/dark-skinned-woman-colleagues-corporate-start-up-office-working-finish-project-diverse-team-business-people-analyzing-company-financial-reports-from-computer_482257-7321.jpg?uid=R143971211&ga=GA1.1.1911634789.1729294558&semt=ais_hybrid" 
                 alt="Background" 
                 class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-white mb-4 text-6xl  mb-6">Nos domaines d'expertise</h1>
                
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-white py-20 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Droit des affaires -->
                <div class="bg-white p-8 rounded-lg border border-gray-200 hover:border-[#C4A24D] transition-colors shadow-lg hover:shadow-xl">
                    <div class="mb-6">
                        <i class="fas fa-balance-scale text-4xl text-[#C4A24D]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B2A4A] mb-4">Droit des Affaires</h3>
                    <p class="text-gray-600 mb-6">Expertise complète en droit des sociétés, fusions-acquisitions, et restructurations d'entreprises.</p>
                    <a href="{{ route('expertise.droit-affaires') }}" class="text-[#C4A24D] hover:text-[#1B2A4A] inline-flex items-center group">
                        En savoir plus
                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Entreprises en difficulté -->
                <div class="bg-white p-8 rounded-lg border border-gray-200 hover:border-[#C4A24D] transition-colors shadow-lg hover:shadow-xl">
                    <div class="mb-6">
                        <i class="fas fa-building text-4xl text-[#C4A24D]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B2A4A] mb-4">Droit des entreprises en difficulté</h3>
                    <p class="text-gray-600 mb-6">Solutions pour la prévention et le traitement des difficultés des entreprises.</p>
                    <a href="{{ route('expertise.entreprises-difficulte') }}" class="text-[#C4A24D] hover:text-[#1B2A4A] inline-flex items-center group">
                        En savoir plus
                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Contentieux des affaires -->
                <div class="bg-white p-8 rounded-lg border border-gray-200 hover:border-[#C4A24D] transition-colors shadow-lg hover:shadow-xl">
                    <div class="mb-6">
                        <i class="fas fa-gavel text-4xl text-[#C4A24D]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B2A4A] mb-4">Contentieux des affaires</h3>
                    <p class="text-gray-600 mb-6">Gestion et résolution des litiges commerciaux et conflits entre entreprises.</p>
                    <a href="{{ route('expertise.contentieux-affaires') }}" class="text-[#C4A24D] hover:text-[#1B2A4A] inline-flex items-center group">
                        En savoir plus
                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Droit pénal des affaires -->
                <div class="bg-white p-8 rounded-lg border border-gray-200 hover:border-[#C4A24D] transition-colors shadow-lg hover:shadow-xl">
                    <div class="mb-6">
                        <i class="fas fa-shield-alt text-4xl text-[#C4A24D]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#1B2A4A] mb-4">Droit pénal des affaires</h3>
                    <p class="text-gray-600 mb-6">Protection et conseil en matière de risques pénaux et compliance.</p>
                    <a href="{{ route('expertise.penal-affaires') }}" class="text-[#C4A24D] hover:text-[#1B2A4A] inline-flex items-center group">
                        En savoir plus
                        <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
