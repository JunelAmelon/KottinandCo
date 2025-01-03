@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary/10 py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">Droit des entreprises en difficulté</h1>
               
            </div>
        </div>
    </div>

    <!-- Missions Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Prévention -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-shield-alt text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Prévention</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Diagnostic</h4>
                                <p class="text-gray-600">Analyse approfondie de la situation financière et identification des risques.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Alerte</h4>
                                <p class="text-gray-600">Mise en place de procédures d'alerte et de prévention des difficultés.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Restructuration</h4>
                                <p class="text-gray-600">Conseil en restructuration financière et opérationnelle.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Négociation</h4>
                                <p class="text-gray-600">Négociation avec les créanciers et partenaires commerciaux.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Procédures Amiables -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-handshake text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Procédures amiables</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Mandat ad hoc</h4>
                                <p class="text-gray-600">Assistance dans la mise en place et le suivi du mandat ad hoc.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conciliation</h4>
                                <p class="text-gray-600">Accompagnement dans la procédure de conciliation avec les créanciers.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Protocoles d'accord</h4>
                                <p class="text-gray-600">Négociation et rédaction des protocoles d'accord.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Homologation</h4>
                                <p class="text-gray-600">Obtention de l'homologation des accords par le tribunal.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Procédures Collectives -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-balance-scale text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Procédures collectives</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Sauvegarde</h4>
                                <p class="text-gray-600">Assistance dans la procédure de sauvegarde et l'élaboration du plan.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Redressement judiciaire</h4>
                                <p class="text-gray-600">Accompagnement dans la procédure de redressement et la recherche de solutions.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Liquidation judiciaire</h4>
                                <p class="text-gray-600">Conseil dans la procédure de liquidation et la cession d'actifs.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Plans de continuation</h4>
                                <p class="text-gray-600">Élaboration et mise en œuvre des plans de continuation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accompagnement des Dirigeants -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-user-tie text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Accompagnement des dirigeants</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Responsabilité</h4>
                                <p class="text-gray-600">Conseil sur la responsabilité des dirigeants et la gestion des risques.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Protection patrimoniale</h4>
                                <p class="text-gray-600">Mise en place de stratégies de protection du patrimoine personnel.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Sanctions</h4>
                                <p class="text-gray-600">Défense contre les sanctions personnelles et l'interdiction de gérer.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Rebond</h4>
                                <p class="text-gray-600">Accompagnement dans les projets de rebond professionnel.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contentieux -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-gavel text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Contentieux</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Déclarations de créances</h4>
                                <p class="text-gray-600">Assistance dans la déclaration et la contestation des créances.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Actions en responsabilité</h4>
                                <p class="text-gray-600">Gestion des actions en responsabilité contre les dirigeants.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Revendications</h4>
                                <p class="text-gray-600">Actions en revendication et restitution de biens.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Voies de recours</h4>
                                <p class="text-gray-600">Exercice des voies de recours contre les décisions judiciaires.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Reprise d'Entreprise -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-sync text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Reprise d'entreprise</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Audit d'acquisition</h4>
                                <p class="text-gray-600">Due diligence et évaluation des risques de l'entreprise cible.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Offre de reprise</h4>
                                <p class="text-gray-600">Élaboration et présentation des offres de reprise.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Négociation</h4>
                                <p class="text-gray-600">Négociation avec les organes de la procédure et les créanciers.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Mise en œuvre</h4>
                                <p class="text-gray-600">Accompagnement dans la mise en œuvre du plan de reprise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-primary py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-light text-white mb-6">Besoin d'un accompagnement juridique ?</h2>
                <p class="text-xl text-gray-300 mb-8">Contactez-nous pour une consultation personnalisée</p>
                <a href="{{ route('contact') }}" class="inline-block bg-beige text-white px-8 py-4 rounded-xl text-lg font-medium hover:bg-opacity-90 transition-all">
                    Prendre Rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection
