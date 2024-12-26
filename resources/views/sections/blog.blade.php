<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center mb-16">
            <h3 class="text-beige mb-4 text-lg">Blog</h3>
            <h2 class="text-[#1a1a1a] text-5xl font-light mb-8">Actualités Juridiques</h2>
            <p class="text-gray-600">
                Restez informé des dernières actualités juridiques et de nos analyses
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('assets/img/blog1.jpg') }}" alt="Article 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>15 Dec 2023</span>
                        <span class="mx-2">|</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>5 min de lecture</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">
                        <a href="{{ route('article', ['slug' => 'nouveautes-droit-travail-2024']) }}" class="hover:text-beige transition-colors">
                            Les nouveautés du droit du travail en 2024
                        </a>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Découvrez les principales modifications du droit du travail qui entreront en vigueur en 2024.
                    </p>
                    <a href="{{ route('article', ['slug' => 'nouveautes-droit-travail-2024']) }}" class="text-beige hover:text-opacity-80 transition-colors">
                        Lire la suite →
                    </a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('assets/img/blog2.jpg') }}" alt="Article 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>10 Dec 2023</span>
                        <span class="mx-2">|</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>4 min de lecture</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">
                        <a href="{{ route('article', ['slug' => 'protection-donnees-entreprise']) }}" class="hover:text-beige transition-colors">
                            Comment protéger les données de votre entreprise
                        </a>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Guide pratique pour mettre en place une politique de protection des données efficace.
                    </p>
                    <a href="{{ route('article', ['slug' => 'protection-donnees-entreprise']) }}" class="text-beige hover:text-opacity-80 transition-colors">
                        Lire la suite →
                    </a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('assets/img/blog3.jpg') }}" alt="Article 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>5 Dec 2023</span>
                        <span class="mx-2">|</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>3 min de lecture</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">
                        <a href="{{ route('article', ['slug' => 'contrats-commerciaux-pieges-eviter']) }}" class="hover:text-beige transition-colors">
                            Contrats commerciaux : les pièges à éviter
                        </a>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Les points essentiels à vérifier avant de signer un contrat commercial.
                    </p>
                    <a href="{{ route('article', ['slug' => 'contrats-commerciaux-pieges-eviter']) }}" class="text-beige hover:text-opacity-80 transition-colors">
                        Lire la suite →
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog') }}" class="inline-block bg-[#1B2A4A] text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                Voir tous les articles
            </a>
        </div>
    </div>
</section>
