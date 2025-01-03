@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary/10 py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6">Contentieux des affaires</h1>
              
            </div>
        </div>
    </div>

    <!-- Missions Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contentieux Commercial -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-briefcase text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Contentieux commercial</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Litiges contractuels</h4>
                                <p class="text-gray-600">Gestion des litiges liés à l'exécution, l'interprétation ou la rupture des contrats commerciaux.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux de la distribution</h4>
                                <p class="text-gray-600">Résolution des conflits dans les réseaux de distribution, franchise et concession commerciale.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Relations commerciales</h4>
                                <p class="text-gray-600">Gestion des litiges liés à la rupture brutale des relations commerciales établies.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Concurrence déloyale</h4>
                                <p class="text-gray-600">Actions en justice contre les pratiques de concurrence déloyale et le parasitisme commercial.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contentieux Sociétaire -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-users text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Contentieux sociétaire</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conflits entre associés</h4>
                                <p class="text-gray-600">Résolution des différends entre actionnaires ou associés, abus de majorité ou de minorité.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux post-acquisition</h4>
                                <p class="text-gray-600">Gestion des litiges suite aux opérations de fusion-acquisition, notamment sur les garanties de passif.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Responsabilité des dirigeants</h4>
                                <p class="text-gray-600">Actions en responsabilité contre les dirigeants sociaux et mandataires sociaux.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux des assemblées</h4>
                                <p class="text-gray-600">Contestation des décisions d'assemblées générales et des résolutions sociales.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contentieux Bancaire -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-university text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Contentieux bancaire</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Litiges financiers</h4>
                                <p class="text-gray-600">Contentieux relatifs aux instruments financiers, produits bancaires et opérations de marché.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Responsabilité bancaire</h4>
                                <p class="text-gray-600">Actions en responsabilité contre les établissements bancaires pour manquement à leurs obligations.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux du crédit</h4>
                                <p class="text-gray-600">Litiges liés aux opérations de crédit, aux garanties bancaires et au recouvrement.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux réglementaire</h4>
                                <p class="text-gray-600">Assistance dans les procédures devant les autorités de régulation (AMF, ACPR).</p>
                            </div>
                        </div>
                    </div>

                    <!-- Procédures d'Urgence -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-bolt text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Procédures d'urgence</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Référés</h4>
                                <p class="text-gray-600">Obtention de mesures d'urgence pour préserver les droits des parties.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Mesures conservatoires</h4>
                                <p class="text-gray-600">Mise en œuvre de saisies conservatoires et de sûretés judiciaires.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Procédures sur requête</h4>
                                <p class="text-gray-600">Obtention d'autorisations judiciaires pour des mesures non contradictoires.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Voies d'exécution</h4>
                                <p class="text-gray-600">Mise en œuvre des procédures d'exécution forcée et de recouvrement.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modes Alternatifs -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-handshake text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Modes alternatifs</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Arbitrage</h4>
                                <p class="text-gray-600">Représentation dans les procédures d'arbitrage national et international.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Médiation</h4>
                                <p class="text-gray-600">Accompagnement dans les processus de médiation commerciale.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Négociation</h4>
                                <p class="text-gray-600">Assistance dans la négociation de protocoles transactionnels.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Procédure participative</h4>
                                <p class="text-gray-600">Mise en œuvre de procédures participatives de résolution des conflits.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contentieux de la Concurrence -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-balance-scale text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Contentieux concurrentiel</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Pratiques anticoncurrentielles</h4>
                                <p class="text-gray-600">Défense dans les procédures relatives aux ententes et abus de position dominante.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Pratiques restrictives</h4>
                                <p class="text-gray-600">Contentieux liés aux pratiques commerciales restrictives et déséquilibrées.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Actions en dommages</h4>
                                <p class="text-gray-600">Actions en réparation suite aux pratiques anticoncurrentielles.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Procédures d'enquête</h4>
                                <p class="text-gray-600">Assistance lors des enquêtes de l'Autorité de la concurrence.</p>
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
