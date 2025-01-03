@extends('layouts.app')

@section('content')
     <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20 mb-36">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=2000&q=80" 
                     alt="About" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">À propos de nous</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Notre cabinet
                </h1>
                <p class="text-xl text-gray-300">
                    Une expertise juridique au service de votre réussite
                </p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
                <!-- Images Column -->
                <div class="md:col-span-5">
                    <div class="grid grid-cols-2 gap-4 sticky top-24">
                        <div class="rounded-2xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=2070" 
                                 alt="Notre Équipe" 
                                 class="w-full h-[300px] object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="rounded-2xl overflow-hidden mt-8">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069" 
                                 alt="Notre Cabinet" 
                                 class="w-full h-[300px] object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="md:col-span-7 space-y-8">
                    <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight">
                        L'excellence au service <br>de votre réussite
                    </h2>
                    
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-600 leading-relaxed">
                        KOTTIN PARTNERS est un cabinet d'avocats d'affaires pluridisciplinaire qui intervient tant en conseil et qu'en contentieux des affaires en France et en Afrique.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                        Le cabinet accompagne une large gamme de clients, notamment des startups, des PME, des ETI, des fonds d'investissement, des entrepreneurs et des dirigeants, dans la gestion de leurs problématiques juridiques, réglementaires, transactionnelles et contentieuses.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                        Le cabinet offre un service sur mesure à ses clients, alliant rigueur juridique, compréhension du monde des affaires et maîtrise des enjeux économiques et financiers des dossiers qu'il traite.
                        </p>
                    </div>

                    <!-- Stats Section -->
                  <!--  <div class="grid grid-cols-3 gap-8 py-8 border-t border-b border-gray-200">
                        <div class="text-center">
                            <span class="block text-4xl font-bold text-primary mb-2">5+</span>
                            <span class="text-gray-600 text-sm">Années d'Expérience</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-4xl font-bold text-primary mb-2">250+</span>
                            <span class="text-gray-600 text-sm">Dossiers Traités</span>
                        </div>
                        <div class="text-center">
                            <span class="block text-4xl font-bold text-primary mb-2">98%</span>
                            <span class="text-gray-600 text-sm">Clients Satisfaits</span>
                        </div>
                    </div>   -->

               

                    <div class="text-center md:text-left">
                        <a href="{{ route('contact') }}" 
                           class="inline-block bg-primary text-white px-8 py-4 rounded-full hover:bg-beige transition-colors text-lg font-semibold">
                            Prendre Rendez-vous
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection
