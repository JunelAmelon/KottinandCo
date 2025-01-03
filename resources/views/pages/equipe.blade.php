@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-primary h-[40vh] md:h-[60vh] flex items-center mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="absolute inset-0 bg-primary opacity-90"></div>
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=2000&q=80" 
                 alt="Notre Équipe" 
                 class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-base md:text-lg tracking-wide">Notre équipe</h3>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-4 md:mb-6">Une expertise unique</h1>
                <p class="text-lg md:text-xl text-gray-300">
                    L'excellence au service de la réussite de votre projet 
                </p>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <!-- Profile Header -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-24 items-start mb-16 md:mb-24">
                    <!-- Photo et Info -->
                    <div class="relative mx-auto lg:mx-0 w-full max-w-md lg:max-w-none">
                        <div class="aspect-[3/4] rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('assets/img/justin.kottin.jpg') }}" 
                                 alt="Justin KOTTIN" 
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-6 right-0 lg:-right-8 bg-beige text-white p-6 md:p-8 rounded-2xl shadow-xl">
                            <p class="text-sm uppercase tracking-wider mb-1">Fondateur</p>
                            <h3 class="text-xl md:text-2xl font-bold">Justin KOTTIN</h3>
                        </div>
                        <!-- Social Links -->
                        <div class="absolute top-4 right-4 flex flex-col gap-4">
                            <a href="https://www.linkedin.com/in/justin-kottin/" target="_blank" 
                               class="bg-white/90 hover:bg-beige p-3 rounded-full shadow-lg transition-all group">
                                <i class="fab fa-linkedin-in text-primary group-hover:text-white text-xl"></i>
                            </a>
                            <a href="mailto:jkottin@kottinpartners.com" 
                               class="bg-white/90 hover:bg-beige p-3 rounded-full shadow-lg transition-all group">
                                <i class="fas fa-envelope text-primary group-hover:text-white text-xl"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Bio -->
                    <div class="space-y-8 md:space-y-10 mt-12 lg:mt-0">
                        <div>
                            <h2 class="text-4xl md:text-5xl font-light text-primary mb-8 md:mb-10">Polyvalent par nature</h2>
                            <div class="prose prose-lg max-w-none">
                                <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-8">
                                    Avocat inscrit au Barreau de Paris, Justin est diplômé de l'ESSEC Business School et de l'Université Paris Nanterre en gestion des entreprises et en droit des affaires.
                                </p>
                                <p class="text-base md:text-lg text-gray-600 leading-relaxed mb-8">
                                    Avant de fonder KOTTIN PARTNERS, Justin a acquis une solide expérience dans des prestigieux cabinets d'avocats d'affaires internationaux (Clifford Chance, Skadden et White & Case) et auprès d'entreprises françaises et internationales de premier plan (Deloitte, BNP Paribas, Raizers) à Paris, à Londres et à Casablanca.
                                </p>
                                <p class="text-base md:text-lg text-gray-600 leading-relaxed mb-8">
                                    Fort de sa double formation juridique et financière, Justin conseille une clientèle variée – entreprises, entrepreneurs, fonds d'investissement, investisseurs, actionnaires et dirigeants – dans leurs projets stratégiques ou courants. 
                                   
                                </p> 
                                <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                                Justin représente également ses clients devant les juridictions civiles, commerciales et pénales en France et en Afrique.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expertise & Formation -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-12 mb-16 md:mb-24">
<!-- Expertise -->
<div class="lg:col-span-2">
    <div class="bg-white shadow-lg p-8 md:p-16 rounded-3xl h-full border border-gray-100">
        <h3 class="text-2xl md:text-3xl font-light text-primary mb-8 md:mb-10">Domaines d'expertise</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 md:gap-12">
            <div class="space-y-8">
                <div class="group">
                    <a href="{{ route('expertise.droit-affaires') }}" class="block">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:bg-beige transition-colors">
                                <i class="fas fa-balance-scale text-primary group-hover:text-white"></i>
                            </div>
                            <h4 class="text-xl font-medium text-primary group-hover:text-beige transition-colors">
                                Droit des affaires et des sociétés
                            </h4>
                        </div>
                        <p class="text-gray-600 pl-20">Contrats commerciaux, création de sociétés</p>
                    </a>
                </div>
                <div class="group">
                    <a href="{{ route('expertise.entreprises-difficulte') }}" class="block">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:bg-beige transition-colors">
                                <i class="fas fa-gavel text-primary group-hover:text-white"></i>
                            </div>
                            <h4 class="text-xl font-medium text-primary group-hover:text-beige transition-colors">
                                Droit des entreprises en difficulté
                            </h4>
                        </div>
                        <p class="text-gray-600 pl-20">Restructuration ou liquidation</p>
                    </a>
                </div>
            </div>
            <div class="space-y-8">
                <div class="group">
                    <a href="{{ route('expertise.contentieux-affaires') }}" class="block">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:bg-beige transition-colors">
                                <i class="fas fa-chart-line text-primary group-hover:text-white"></i>
                            </div>
                            <h4 class="text-xl font-medium text-primary group-hover:text-beige transition-colors">
                                Contentieux des affaires
                            </h4>
                        </div>
                        <p class="text-gray-600 pl-20">Litiges commerciaux, arbitrage, médiation</p>
                    </a>
                </div>
                <div class="group">
                    <a href="{{ route('expertise.penal-affaires') }}" class="block">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:bg-beige transition-colors">
                                <i class="fas fa-globe-africa text-primary group-hover:text-white"></i>
                            </div>
                            <h4 class="text-xl font-medium text-primary group-hover:text-beige transition-colors">
                                Droit pénal des affaires et compliance
                            </h4>
                        </div>
                        <p class="text-gray-600 pl-20">Prévention et défense pénale</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


                    <!-- Langues -->
                    <div class="bg-white shadow-lg p-8 md:p-16 rounded-3xl border border-gray-100">
                        <h3 class="text-2xl md:text-3xl font-light text-primary mb-8 md:mb-10">Langues</h3>
                        <div class="space-y-8">
                            <div class="group">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                        <i class="fas fa-globe-europe text-primary"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-medium text-primary">Français</h4>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-primary h-2.5 rounded-full" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                        <i class="fas fa-globe-americas text-primary"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-medium text-primary">Anglais</h4>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-primary h-2.5 rounded-full" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="flex items-center space-x-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                        <i class="fas fa-globe text-primary"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-medium text-primary">Espagnol</h4>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-primary h-2.5 rounded-full" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formation & Parcours -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 mb-16 md:mb-24">
                    <!-- Formation -->
                    <div class="bg-white shadow-lg p-8 md:p-16 rounded-3xl border border-gray-100">
                        <h3 class="text-2xl md:text-3xl font-light text-primary mb-8 md:mb-10">Formation</h3>
                        <div class="space-y-8 md:space-y-10">
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Certificat d'Aptitude à la Profession d'Avocat</h4>
                                    <p class="text-gray-600">Droit des Affaires, EFB</p>
                                    <p class="text-sm text-gray-500">2021</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Master in Management</h4>
                                    <p class="text-gray-600">Programme Grande Ecole, ESSEC Business School</p>
                                    <p class="text-sm text-gray-500">2019</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Diplôme Universitaire</h4>
                                    <p class="text-gray-600">Droit de l'Energie, de l'Investissement et de l'Arbitrage International, Université Paris Nanterre</p>
                                    <p class="text-sm text-gray-500">2019</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Master en Droit des Affaires</h4>
                                    <p class="text-gray-600">Université Paris Nanterre</p>
                                    <p class="text-sm text-gray-500">2016</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Parcours -->
                    <div class="bg-white shadow-lg p-8 md:p-16 rounded-3xl border border-gray-100">
                        <h3 class="text-2xl md:text-3xl font-light text-primary mb-8 md:mb-10">Parcours</h3>
                        <div class="space-y-8 md:space-y-10">
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Clifford Chance</h4>
                                    <p class="text-gray-600">Avocat collaborateur</p>
                                    <p class="text-sm text-gray-500">2023-2024</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Deloitte</h4>
                                    <p class="text-gray-600">Auditeur financier</p>
                                    <p class="text-sm text-gray-500">2022-2023</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Skadden</h4>
                                    <p class="text-gray-600">Avocat stagiaire</p>
                                    <p class="text-sm text-gray-500">2021</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">White & Case</h4>
                                    <p class="text-gray-600">Avocat stagiaire</p>
                                    <p class="text-sm text-gray-500">2021</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Clifford Chance</h4>
                                    <p class="text-gray-600">Avocat stagiaire</p>
                                    <p class="text-sm text-gray-500">2020</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Raizers</h4>
                                    <p class="text-gray-600">Avocat stagiaire</p>
                                    <p class="text-sm text-gray-500">2020</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">BNP Paribas</h4>
                                    <p class="text-gray-600">Juriste compliance</p>
                                    <p class="text-sm text-gray-500">2017-2019</p>
                                </div>
                            </div>
                            <div class="relative pl-10 border-l-4 border-beige">
                                <div class="absolute -left-[13px] top-0 w-6 h-6 rounded-full bg-beige"></div>
                                <div class="mb-4">
                                    <h4 class="text-xl font-medium text-primary">Raizers</h4>
                                    <p class="text-gray-600">Juriste stagiaire</p>
                                    <p class="text-sm text-gray-500">2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Associations -->
                <div class="bg-white shadow-lg p-8 md:p-16 rounded-3xl border border-gray-100">
                    <h3 class="text-2xl md:text-3xl font-light text-primary mb-8 md:mb-10">Associations professionnelles</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="fas fa-landmark text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-medium text-primary">Fondateur du think thank Minerva Business Networking Club</h4>
                 
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-medium text-primary">Membre de l’Association des Professionnels du Contentieux des Affaires</h4>
                                
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="fas fa-globe-africa text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-medium text-primary">Membre de l’Association des Professionnels du Contentieux Économique et Financier</h4>
                                
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="fas fa-globe-africa text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-medium text-primary">Membre de l’Institut Français des Praticiens des Procédures Collectives</h4>
                               
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="fas fa-globe-africa text-primary"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-medium text-primary">Membre du Club des Juristes d’Affaires Africains</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-primary">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-8">Besoin d'un accompagnement juridique ?</h2>
                <p class="text-xl text-gray-300 mb-10">Contactez-nous pour une consultation personnalisée</p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:jkottin@kottinpartners.com" 
                       class="inline-block bg-beige text-white px-10 py-5 rounded-xl text-lg font-medium hover:bg-opacity-90 transition-all">
                        <i class="fas fa-envelope mr-3"></i>
                        Contacter Justin KOTTIN
                    </a>
                    <a href="https://www.linkedin.com/in/justin-kottin/" target="_blank"
                       class="inline-block bg-white text-primary px-10 py-5 rounded-xl text-lg font-medium hover:bg-opacity-90 transition-all">
                        <i class="fab fa-linkedin mr-3"></i>
                        Suivre sur LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection