<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Kottin&Co - Cabinet d\'Avocats')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        beige: '#C19A6B', // Beige plus riche et intense
                        primary: '#1B2A4A',
                        gold: '#B8860B'
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-overlay {
            background: linear-gradient(to right, rgba(27, 42, 74, 0.95), rgba(27, 42, 74, 0.8));
        }
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .team-gradient {
            background: linear-gradient(45deg, rgba(27, 42, 74, 0.95), rgba(193, 154, 107, 0.9));
        }
    </style>

    @yield('styles')
</head>
<body class="font-sans antialiased">
    @include('partials.header')
    
    <!-- Main Content -->
    <main>
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
    
    @include('partials.footer')

    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

        function openMobileMenu() {
            document.body.style.overflow = 'hidden';
            mobileMenu.classList.remove('hidden');
        }

        function closeMobileMenu() {
            document.body.style.overflow = '';
            mobileMenu.classList.add('hidden');
        }

        mobileMenuButton.addEventListener('click', openMobileMenu);
        closeMenuButton.addEventListener('click', closeMobileMenu);

        // Fermer le menu quand on clique sur un lien
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Smooth Scrolling pour les liens d'ancrage
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').slice(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Fermer le menu mobile si ouvert
                    if (!mobileMenu.classList.contains('hidden')) {
                        closeMobileMenu();
                    }
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
