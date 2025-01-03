@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20 mb-36">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=2000&q=80" 
                     alt="Nous Rejoindre" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Carrières</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Nous rejoindre
                </h1>
                <p class="text-xl text-gray-300">
                    Intégrez une équipe dynamique et participez à des projets innovants t stimulants
                </p>
            </div>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl font-bold text-primary mb-8">Pourquoi nous rejoindre ?</h2>
                <p class="text-xl text-gray-600">
                    KOTTIN PARTNERS offre un environnement de travail stimulant où chaque talent peut s'épanouir et développer son potentiel.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-beige/20 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-graduation-cap text-2xl text-beige"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Formation continue</h3>
                    <p class="text-gray-600">
                        Accédez à des programmes de formation et de développement professionnel pour enrichir vos compétences.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-beige/20 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl text-beige"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Travail d'équipe</h3>
                    <p class="text-gray-600">
                        Rejoignez une équipe collaborative où l'entraide et le partage de connaissances sont valorisés.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-beige/20 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-2xl text-beige"></i>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">Évolution de carrière</h3>
                    <p class="text-gray-600">
                        Bénéficiez d'opportunités d'évolution et d'un accompagnement personnalisé dans votre parcours.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center items-center justify-center p-10">
    <a href="/contact" 
       class="bg-primary text-white px-8 py-4 rounded-full hover:bg-beige transition-colors inline-flex items-center">
        Envoyer ma candidature
        <i class="fas fa-arrow-right ml-2"></i>
    </a>
</div>

    </section>
  
@endsection
