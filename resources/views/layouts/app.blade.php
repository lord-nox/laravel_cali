<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Bootstrap CSS (for navbar and layout) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased bg-gray-100">

        <div class="min-h-screen">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Calisthenics Community</a>
                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Inloggen</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registreren</a></li>
                        @endauth
                    </ul>
                </div>
            </nav>

            <!-- Main Content Section -->
            <div class="container py-4">
                @isset($header)
                    <header class="bg-white shadow mb-4">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Search Form -->
                <div class="mb-4">
                    <form action="{{ route('home') }}" method="GET" class="d-flex">
                        <input type="text" name="search" value="{{ old('search', $search ?? '') }}" placeholder="Search for users..." class="form-control me-2" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <!-- User List -->
                <h2>Users:</h2>
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item">{{ $user->name }} - {{ $user->email }}</li>
                    @endforeach
                </ul>

            </div>

        </div>

    </body>
</html>
