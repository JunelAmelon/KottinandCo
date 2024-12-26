@extends('layouts.app')

@section('title', 'Connexion - Administration')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">
                Administration
            </h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        Adresse email
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        Mot de passe
                    </label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="w-full py-2 px-4 bg-[#1B2A4A] text-white rounded-md hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1B2A4A]">
                        Se connecter
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-gray-900">
                    Retour au site
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
