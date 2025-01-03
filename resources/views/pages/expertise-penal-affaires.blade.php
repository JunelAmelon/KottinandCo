@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary/10 py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">Droit pénal des affaires</h1>
                
            </div>
        </div>
    </div>

    <!-- Missions Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Défense Pénale -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-gavel text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Défense pénale</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Assistance pénale</h4>
                                <p class="text-gray-600">Défense des dirigeants et des entreprises lors des gardes à vue, auditions et perquisitions.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Procédures judiciaires</h4>
                                <p class="text-gray-600">Représentation devant les juridictions pénales et assistance durant l'instruction.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Stratégie de défense</h4>
                                <p class="text-gray-600">Élaboration de stratégies de défense adaptées aux enjeux de l'entreprise.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Gestion de crise</h4>
                                <p class="text-gray-600">Accompagnement dans la gestion de crise pénale et médiatique.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Infractions Financières -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-money-bill-wave text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Infractions financières</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Abus de biens sociaux</h4>
                                <p class="text-gray-600">Défense en matière d'abus de biens sociaux et de détournements de fonds.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Fraude fiscale</h4>
                                <p class="text-gray-600">Assistance dans les procédures de fraude fiscale et de blanchiment.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Délits boursiers</h4>
                                <p class="text-gray-600">Défense en matière de délits d'initiés et de manipulation de cours.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Escroquerie</h4>
                                <p class="text-gray-600">Assistance dans les affaires d'escroquerie et d'abus de confiance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Droit Pénal du Travail -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-users text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Droit pénal du travail</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Travail dissimulé</h4>
                                <p class="text-gray-600">Défense en matière de travail dissimulé et d'emploi irrégulier.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Accidents du travail</h4>
                                <p class="text-gray-600">Assistance en cas d'accidents du travail et de mise en danger d'autrui.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Harcèlement</h4>
                                <p class="text-gray-600">Défense dans les affaires de harcèlement moral ou sexuel.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Discrimination</h4>
                                <p class="text-gray-600">Assistance dans les cas de discrimination au travail.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Compliance -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-check-circle text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Compliance</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Programmes de conformité</h4>
                                <p class="text-gray-600">Mise en place de programmes de conformité et de prévention des risques.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Formation</h4>
                                <p class="text-gray-600">Formation des dirigeants et des équipes aux enjeux de conformité.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Audits</h4>
                                <p class="text-gray-600">Réalisation d'audits de conformité et évaluation des risques.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Procédures internes</h4>
                                <p class="text-gray-600">Élaboration de procédures internes et de codes de conduite.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Loi Sapin II -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-gavel text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Loi sapin II</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Anticorruption</h4>
                                <p class="text-gray-600">Mise en conformité avec les obligations anticorruption de la loi Sapin II.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Cartographie des risques</h4>
                                <p class="text-gray-600">Élaboration de la cartographie des risques de corruption.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Dispositif d'alerte</h4>
                                <p class="text-gray-600">Mise en place de systèmes d'alerte interne et de protection des lanceurs d'alerte.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contrôles comptables</h4>
                                <p class="text-gray-600">Mise en place de contrôles comptables anticorruption.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enquêtes Internes -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-search text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Enquêtes internes</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conduite d'enquêtes</h4>
                                <p class="text-gray-600">Organisation et conduite d'enquêtes internes.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Collecte de preuves</h4>
                                <p class="text-gray-600">Sécurisation de la collecte et de la conservation des preuves.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Auditions</h4>
                                <p class="text-gray-600">Conduite des auditions dans le respect des droits des personnes.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Rapports d'enquête</h4>
                                <p class="text-gray-600">Rédaction de rapports d'enquête et recommandations.</p>
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
