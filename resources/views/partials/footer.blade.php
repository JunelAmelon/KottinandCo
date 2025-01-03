<footer class="bg-[#1B2A4A] text-white">
    <div class="container mx-auto px-4">
        <!-- Newsletter Section -->
        <div class="border-b border-white/10">
            <div class="container mx-auto px-4 py-12">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="text-center md:text-left mb-6 md:mb-0 md:w-1/2">
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">Newsletter</h3>
                        <p class="text-gray-300 text-sm md:text-base">Restez informé de l'actualité juridique et de nos dernières publications</p>
                    </div>
                    <div class="w-full md:w-1/2 max-w-md">
                        <form class="flex flex-col sm:flex-row gap-4">
                            <input 
                                type="email" 
                                placeholder="Votre email" 
                                class="flex-grow px-4 py-3 rounded bg-white/10 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-beige"
                                required
                            >
                            <button 
                                type="submit" 
                                class="px-6 py-3 bg-beige text-white rounded hover:bg-opacity-90 transition-all whitespace-nowrap"
                            >
                                S'inscrire
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 py-20">
            <!-- Brand -->
            <div class="col-span-1">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Kottin&Co" class="h-36 mb-6">
                <p class="text-gray-300 mb-6">
                    Cabinet d'avocats de référence, spécialisé en droit des affaires et droit international.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-white/90 transition-colors">
                        <i class="fab fa-linkedin-in text-beige"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-white/90 transition-colors">
                        <i class="fab fa-twitter text-beige"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-white/90 transition-colors">
                        <i class="fab fa-facebook-f text-beige"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-span-1">
                <h3 class="text-xl font-medium mb-6">Liens rapides</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-beige transition-colors">Accueil</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-beige transition-colors">À propos</a></li>
                    <li><a href="{{ route('expertise.droit-affaires') }}" class="text-gray-300 hover:text-beige transition-colors">Notre expertise</a></li>
                    <li><a href="{{ route('blog') }}" class="text-gray-300 hover:text-beige transition-colors">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-beige transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-span-1">
                <h3 class="text-xl font-medium mb-6">Notre expertise</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Droit des affaires</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Droit international</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Droit immobilier</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Contentieux</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Propriété intellectuelle</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-span-1">
                <h3 class="text-xl font-medium mb-6">Contact</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1.5 mr-3"></i>
                        <span class="text-gray-300">123 Avenue des Champs-Élysées, 75008 Paris</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-3"></i>
                        <span class="text-gray-300">+33 (0)1 23 45 67 89</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-3"></i>
                        <span class="text-gray-300">contact@kottinco.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-white/10 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-300 text-sm mb-4 md:mb-0">
                    2024 Kottin&Co. Tous droits réservés.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Mentions légales</a>
                    <a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">Politique de confidentialité</a>
                    <a href="#" class="text-gray-300 hover:text-beige text-sm transition-colors">CGU</a>
                </div>
            </div>
        </div>
    </div>
</footer>
