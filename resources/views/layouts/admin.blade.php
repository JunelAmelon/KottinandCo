<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Administration') - Kottin&Co</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'beige': '#C19A6B',
                    },
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('vendor/tinymce/tinymce/tinymce.min.js') }}"></script>
    @stack('styles')
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-[#1B2A4A] text-white">
        <div class="flex items-center justify-center h-20 border-b border-beige/20">
            <h1 class="text-2xl font-bold">Administration</h1>
        </div>
        <nav class="mt-8">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-beige/10 hover:text-white {{ request()->routeIs('admin.dashboard') ? 'bg-beige/10 text-white' : '' }}">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Tableau de bord
            </a>
            <a href="{{ route('admin.articles.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-beige/10 hover:text-white {{ request()->routeIs('admin.articles.*') ? 'bg-beige/10 text-white' : '' }}">
                <i class="fas fa-newspaper mr-3"></i>
                Articles
            </a>
         
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64">
        <!-- Top Bar -->
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-gray-800">Admin</a>
                        </div>
                    </div>

                    <!-- Right side navigation -->
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900" target="_blank">
                            <i class="fas fa-external-link-alt mr-2"></i>Voir le site
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="p-8">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    @stack('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: '.tinymce',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                height: 500
            });
        });
    </script>
</body>
</html>
