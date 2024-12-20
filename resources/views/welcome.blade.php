<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Custom CSS here, including Tailwind styles if necessary */
        </style>
    @endif
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <!-- Logo or Title could go here -->
                        <h1 class="text-3xl font-semibold">Calisthenics Community</h1>
                    </div>
                </header>

                <!-- Search Bar Section -->
                <div class="flex justify-center mt-6">
                    <form action="{{ route('search') }}" method="GET" class="w-full max-w-lg flex">
                        <input type="text" name="query" placeholder="Search for workouts, users, etc." 
                            class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#FF2D20] text-black bg-white">
                        <button type="submit" class="bg-[#FF2D20] text-white px-4 py-2 rounded-r-md hover:bg-[#e63946] transition duration-200">
                            Search
                        </button>
                    </form>
                </div>  

                <!-- Content Below Search Bar (like categories, or featured content) -->
                <div class="mt-10">
                    <!-- You can add more content here, such as featured workouts, categories, etc. -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
