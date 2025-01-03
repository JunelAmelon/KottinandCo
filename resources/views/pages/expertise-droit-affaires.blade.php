@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-primary/10 py-20 mt-20">
      
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl">
                <h1 class="text-4xl  text-left md:text-5xl font-bold text-primary mb-6">Droit des Affaires</h1>
                
            </div>
        </div>
    </div>

    <!-- Missions Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Droit des sociétés -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-building text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Droit des sociétés</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Création et structuration d'entreprises</h4>
                                <p class="text-gray-600">Accompagnement lors de la création et de la structuration d'entreprises : choix de la forme juridique, rédaction des statuts et pactes d'associés.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Gouvernance d'entreprise</h4>
                                <p class="text-gray-600">Conseil en gouvernance d'entreprise et organisation des relations entre associés ou actionnaires.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Gestion juridique courante</h4>
                                <p class="text-gray-600">Rédaction des procès-verbaux d'assemblées générales, modifications statutaires, et approbation des comptes annuels.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Opérations de restructuration</h4>
                                <p class="text-gray-600">Assistance dans les opérations de restructuration : fusions, scissions, apports partiels d'actifs ou transformations juridiques.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fusions-acquisitions -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-handshake text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Fusions-acquisitions</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Audits juridiques</h4>
                                <p class="text-gray-600">Réalisation d'audits juridiques et identification des risques dans le cadre des due diligences.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conseil stratégique</h4>
                                <p class="text-gray-600">Conseil et stratégie dans les opérations de cession, acquisition ou prise de participation.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Documentation juridique</h4>
                                <p class="text-gray-600">Négociation et rédaction des documents clés : lettres d'intention, contrats de cession, garanties d'actifs et de passifs.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Coordination</h4>
                                <p class="text-gray-600">Coordination des parties impliquées dans les transactions : conseillers financiers, fiscalistes, et experts-comptables.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Suivi post-transaction</h4>
                                <p class="text-gray-600">Accompagnement post-transaction pour assurer la bonne exécution des engagements pris.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Private equity -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-chart-line text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Private equity</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Opérations d'investissement</h4>
                                <p class="text-gray-600">Structuration et mise en place d'opérations d'investissement : levées de fonds, capital-risque, et capital-développement.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Documentation contractuelle</h4>
                                <p class="text-gray-600">Rédaction et négociation des pactes d'actionnaires et accords d'investissement.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Montages complexes</h4>
                                <p class="text-gray-600">Assistance dans les opérations de LBO, MBO, ou autres montages financiers complexes.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conseil aux fonds</h4>
                                <p class="text-gray-600">Conseil juridique pour les fonds d'investissement sur leurs participations et sorties stratégiques.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Relations investisseurs</h4>
                                <p class="text-gray-600">Gestion des relations entre investisseurs et dirigeants, résolution des litiges éventuels.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Droit commercial -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-file-contract text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Droit commercial</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contrats commerciaux</h4>
                                <p class="text-gray-600">Rédaction, négociation et sécurisation des contrats commerciaux : conditions générales de vente, contrats de distribution, de franchise, ou de prestation de services.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Relations commerciales</h4>
                                <p class="text-gray-600">Assistance dans les relations commerciales entre partenaires : mise en place, modification ou rupture des accords contractuels.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Gestion des litiges</h4>
                                <p class="text-gray-600">Gestion des litiges commerciaux : inexécution contractuelle, recouvrement de créances, et conflits entre partenaires.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Garanties et responsabilités</h4>
                                <p class="text-gray-600">Conseil en matière de garanties commerciales, clauses limitatives de responsabilité ou pénalités contractuelles.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Prévention des risques</h4>
                                <p class="text-gray-600">Analyse et prévention des risques juridiques liés aux activités commerciales et industrielles.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux commercial</h4>
                                <p class="text-gray-600">Accompagnement dans les procédures judiciaires liées aux pratiques commerciales déloyales ou abusives.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Droit de la concurrence -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-balance-scale text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Droit de la concurrence</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conformité réglementaire</h4>
                                <p class="text-gray-600">Conseil et assistance en matière de conformité avec les règles de concurrence nationales et européennes.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Pratiques commerciales</h4>
                                <p class="text-gray-600">Analyse et structuration des pratiques commerciales pour prévenir les abus de position dominante, ententes ou restrictions de concurrence.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Enquêtes de concurrence</h4>
                                <p class="text-gray-600">Assistance dans le cadre des enquêtes de l'Autorité de la concurrence ou de la Commission européenne : gestion des contrôles, perquisitions et auditions.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Pratiques restrictives</h4>
                                <p class="text-gray-600">Conseil en matière de pratiques restrictives de concurrence, telles que les clauses exclusives ou les prix imposés.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux</h4>
                                <p class="text-gray-600">Assistance dans la gestion des contentieux de concurrence : actions en réparation ou contestation d'infractions.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contrôle des concentrations</h4>
                                <p class="text-gray-600">Conseil en matière de contrôle des concentrations et notification des opérations de fusion auprès des autorités compétentes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Droit bancaire et financier -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-university text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-2xl font-medium text-primary">Droit bancaire et financier</h3>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contrats de financement</h4>
                                <p class="text-gray-600">Rédaction et négociation de contrats de financement : crédits syndiqués, financements d'acquisition, financements immobiliers ou financement de projets.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Conformité réglementaire</h4>
                                <p class="text-gray-600">Analyse et mise en conformité avec la réglementation bancaire et financière française et européenne.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Gouvernance financière</h4>
                                <p class="text-gray-600">Conseil en matière de gouvernance des établissements financiers : conformité avec les normes prudentielles, gestion des risques et lutte contre le blanchiment d'argent.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Contentieux bancaire</h4>
                                <p class="text-gray-600">Assistance dans les contentieux bancaires : responsabilité contractuelle, sûretés, et recouvrement de créances.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Litiges financiers</h4>
                                <p class="text-gray-600">Gestion des litiges liés aux instruments financiers, aux garanties bancaires ou aux produits dérivés.</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Agrément et contrôle</h4>
                                <p class="text-gray-600">Accompagnement dans les procédures d'agrément ou de contrôle par les autorités réglementaires (AMF, ACPR).</p>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-800 mb-3">Services financiers digitaux</h4>
                                <p class="text-gray-600">Conseil en matière de régulation des services financiers et de la digitalisation (fintech, crypto-actifs, paiements électroniques).</p>
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
