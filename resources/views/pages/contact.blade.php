@extends('layouts.main')

@section('title', 'Contact - Kottin&Co')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#1B2A4A] py-32 mt-20">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative aspect-[16/9] md:aspect-[21/9]">
                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=2069" 
                     alt="Contact" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary/50"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-beige mb-4 text-lg">Contactez-nous</h3>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Prenons contact
                </h1>
                <p class="text-xl text-gray-300">
                    Notre équipe est à votre écoute pour répondre à vos besoins
                </p>
            </div>
        </div>
    </section>

      <!-- Contact Section -->
      <section id="contact" class="py-20 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left Column - Form -->
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-4xl font-bold mb-2">Contactez-nous</h2>
                    <p class="text-2xl mb-8">Nous sommes à votre écoute</p>
                    
                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <input type="text" name="name" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Nom complet" required>
                            </div>
                            <div>
                                <input type="tel" name="phone" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Téléphone" required>
                            </div>
                        </div>
                        
                        <div>
                            <input type="email" name="email" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Email professionnel" required>
                        </div>

                        <div>
                            <input type="text" name="subject" class="w-full border-b-2 border-gray-300 focus:border-beige py-2 outline-none transition-colors" placeholder="Sujet" required>
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
                    <h2 class="text-4xl font-bold mb-6">Nos bureaux</h2>
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
                        <p class="mb-2"><i class="fas fa-map-marker-alt mt-1.5 mr-3"></i>123 Avenue des Champs-Élysées, 75008 Paris</p>
                        <p><i class="fas fa-phone mr-3"></i>+33 (0)1 23 45 67 89</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-[#98FB98] opacity-20 rounded-full transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#98FB98] opacity-20 rounded-full transform -translate-x-1/2 translate-y-1/2"></div>
    </section>
@endsection
