<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Administration') - Kottin&Co</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
            <a href="{{ route('home') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-beige/10 hover:text-white">
                <i class="fas fa-globe mr-3"></i>
                Voir le site
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64">
        <!-- Top Bar -->
        <div class="bg-white h-20 flex items-center justify-between px-8 shadow-sm">
            <h2 class="text-2xl font-semibold">@yield('page-title')</h2>
            <div class="flex items-center">
                <span class="mr-4">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-gray-900">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </div>

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
