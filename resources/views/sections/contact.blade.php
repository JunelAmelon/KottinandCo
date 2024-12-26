<section id="contact" class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Left Column - Form -->
            <div class="bg-white p-8 rounded-lg">
                <h3 class="text-beige mb-4 text-lg">Contact</h3>
                <h2 class="text-4xl font-light mb-8">Prenez Contact Avec Nous</h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Nom complet</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded border focus:outline-none focus:ring-2 focus:ring-beige" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded border focus:outline-none focus:ring-2 focus:ring-beige" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded border focus:outline-none focus:ring-2 focus:ring-beige" required>
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-700 mb-2">Sujet</label>
                        <select id="subject" name="subject" class="w-full px-4 py-3 rounded border focus:outline-none focus:ring-2 focus:ring-beige" required>
                            <option value="">Sélectionnez un sujet</option>
                            <option value="business">Droit des affaires</option>
                            <option value="commercial">Droit commercial</option>
                            <option value="social">Droit social</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded border focus:outline-none focus:ring-2 focus:ring-beige" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#1B2A4A] text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Right Column - Info -->
            <div class="bg-[#1B2A4A] p-8 rounded-lg text-white">
                <h3 class="text-beige mb-4 text-lg">Informations</h3>
                <h2 class="text-4xl font-light mb-8">Nos Coordonnées</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-beige rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl mb-2">Adresse</h4>
                            <p class="text-gray-300">123 Rue du Palais<br>75001 Paris</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-beige rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl mb-2">Téléphone</h4>
                            <p class="text-gray-300">+33 1 23 45 67 89</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-beige rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl mb-2">Email</h4>
                            <p class="text-gray-300">contact@kottinco.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-beige rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl mb-2">Horaires d'ouverture</h4>
                            <p class="text-gray-300">
                                Lundi - Vendredi: 9h00 - 18h00<br>
                                Samedi - Dimanche: Fermé
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-12">
                    <h4 class="text-xl mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-beige rounded-full flex items-center justify-center hover:bg-opacity-80 transition-all">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-beige rounded-full flex items-center justify-center hover:bg-opacity-80 transition-all">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-beige rounded-full flex items-center justify-center hover:bg-opacity-80 transition-all">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
