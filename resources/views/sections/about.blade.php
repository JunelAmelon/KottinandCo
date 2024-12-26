<section id="about" class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <!-- Colonne de texte -->
            <div class="md:col-span-5">
                <h3 class="text-beige mb-4 text-lg">À Propos de Nous</h3>
                <h2 class="text-4xl md:text-5xl font-light mb-8">Une Expertise Juridique à Votre Service</h2>
                <p class="text-gray-600 mb-8">
                    Depuis plus de 20 ans, notre cabinet d'avocats accompagne les entreprises et les particuliers dans leurs projets juridiques. Notre équipe d'experts est dédiée à la réussite de vos projets et à la protection de vos intérêts.
                </p>
                <div class="grid grid-cols-2 gap-8 mb-8">
                    <div>
                        <h4 class="text-4xl font-bold text-[#1B2A4A] mb-2">20+</h4>
                        <p class="text-gray-600">Années d'expérience</p>
                    </div>
                    <div>
                        <h4 class="text-4xl font-bold text-[#1B2A4A] mb-2">500+</h4>
                        <p class="text-gray-600">Clients satisfaits</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-block bg-[#1B2A4A] text-white px-8 py-4 rounded hover:bg-opacity-90 transition-all">
                    En savoir plus
                </a>
            </div>

            <!-- Colonne d'image -->
            <div class="md:col-span-7">
                <div class="relative">
                    <img src="{{ asset('assets/img/about.jpg') }}" alt="Notre équipe" class="w-full rounded-lg shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-beige text-white p-8 rounded-lg">
                        <div class="text-4xl font-bold mb-2">100%</div>
                        <div class="text-sm">Taux de satisfaction client</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
