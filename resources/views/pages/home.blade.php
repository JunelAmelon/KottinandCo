@extends('layouts.app')

@section('title', 'Kottin&Co - Cabinet d\'Avocats')

@section('content')
 <!-- Hero Section -->
 <section class="relative bg-black min-h-screen mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="https://images.unsplash.com/photo-1609885728229-5f48bab0cf87?q=80&w=1335&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                 alt="Hero background" 
                 class="w-full h-full object-cover object-center">
        </div>
        <div class="container mx-auto px-4 h-screen flex items-center relative z-10">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-7xl text-white font-light mb-6">
                    KOTTIN PARTNERS
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8">
                    Cabinet d'avocats d'affaires indépendant intervenant en conseil et en contentieux des affaires en France et en Afrique.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="inline-block bg-beige text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all text-center">
                        Prendre rendez-vous
                    </a>
                    <a href="{{ route('expertise') }}" class="inline-block border border-white text-white px-8 py-4 rounded hover:bg-white hover:text-black transition-all text-center">
                        Nos expertises
                    </a>
                </div>
            </div>
        </div>
        <!-- Scroll Down Arrow -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20">
            <div class="animate-bounce">
                <i class="fas fa-chevron-down text-4xl text-white cursor-pointer hover:text-beige transition-colors"></i>
            </div>
        </div>
    </section>

 

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center mb-16">
                <h2 class="text-4xl font-light mb-4">Pourquoi nous choisir ?</h2>
                
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Expertise Card -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-beige/10 rounded-full -mr-16 -mt-16 transition-all duration-500 group-hover:scale-150"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-beige/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all">
                            <i class="fas fa-balance-scale text-2xl text-beige"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-primary">Expertise juridique approfondie</h3>
                        <p class="text-gray-600">Une maîtrise du droit des affaires et une veille juridique constante pour vous offrir les meilleures solutions.</p>
                    </div>
                </div>

                <!-- Accompagnement Card -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-beige/10 rounded-full -mr-16 -mt-16 transition-all duration-500 group-hover:scale-150"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-beige/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all">
                            <i class="fas fa-users text-2xl text-beige"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-primary">Accompagnement personnalisé</h3>
                        <p class="text-gray-600">Une approche sur mesure et une disponibilité constante pour répondre à vos besoins spécifiques.</p>
                    </div>
                </div>

                <!-- Solutions Card -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-beige/10 rounded-full -mr-16 -mt-16 transition-all duration-500 group-hover:scale-150"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-beige/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all">
                            <i class="fas fa-lightbulb text-2xl text-beige"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4 text-primary">Solutions innovantes</h3>
                        <p class="text-gray-600">Des réponses créatives et adaptées à vos projets et besoins spécifiques .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



  
    <!-- CTA Section -->
    <section class="bg-[#1B2A4A] text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à démarrer votre projet ?</h2>
            <p class="text-xl mb-8 opacity-90">
                Prenez rendez-vous pour une consultation personnalisée
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-beige px-8 py-4 rounded hover:bg-gray-100 transition-all inline-flex items-center">
                Contactez-nous maintenant
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white relative overflow-hidden ">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left Column - Form -->
                <div>
                    <h2 class="text-4xl font-bold mb-2">Contactez-nous</h2>
                    <p class="text-2xl mb-8">Nous sommes à votre écoute</p>
                    
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <input type="text" name="name" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Nom complet" required>
                            </div>
                            <div>
                                <input type="tel" name="phone" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Téléphone" required>
                            </div>
                        </div>
                        
                        <div>
                            <input type="email" name="email" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Email" required>
                        </div>

                        <div>
                            <textarea name="message" rows="4" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Décrivez-nous votre projet ou votre besoin juridique. Notre équipe d'experts vous répondra dans les plus brefs délais." required></textarea>
                        </div>
                        
                        <button type="submit" class="bg-beige text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                            Envoyer le message
                        </button>
                    </form>
                </div>

                <!-- Right Column - Map and Info -->
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-4xl font-bold mb-6">
                    Notre bureau</h2>
                    <p class="text-gray-600 mb-8">
                        Venez nous rencontrer dans nos locaux au cœur de Paris. Notre équipe vous accueille du lundi au vendredi de 9h à 18h.
                    </p>
                    
                    <!-- Google Maps Embed -->
                    <div class="w-full h-64 rounded-lg overflow-hidden shadow-lg mb-6">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937604!2d2.292292615509614!3d48.85836997928678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1631234567890!5m2!1sfr!2sfr" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>

                    <!-- Contact Info -->
                    <div class="text-gray-600">
                        <p class="mb-2"><i class="fas fa-map-marker-alt mt-1.5 mr-3"></i>
                        1 rue d'Astorg 75008 paris</p>
                        <p><i class="fas fa-phone mr-3"></i>+33 (0)6 19 13 04 61</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-[#98FB98] opacity-20 rounded-full transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#98FB98] opacity-20 rounded-full transform -translate-x-1/2 translate-y-1/2"></div>
    </section>

    <script src="{{ asset('js/contact.js') }}"></script>
 
</body>
</html>
