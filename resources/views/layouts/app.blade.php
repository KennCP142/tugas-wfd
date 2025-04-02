<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Promosi')</title>
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
    <!-- Tambahan CSS -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold">PromoHub</a>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-200">Home</a></li>
                        <li><a href="{{ route('promotions.create') }}" class="hover:text-blue-200">Tambah Promosi</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-blue-800 text-white py-6">
        <div class="container mx-auto px-4">
            <div class="md:flex md:justify-between">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-lg font-bold mb-2">PromoHub</h2>
                    <p class="text-blue-200">Temukan promosi terbaik untuk Anda</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">Kontak</h3>
                    <p class="text-blue-200">info@promohub.com</p>
                </div>
            </div>
            <div class="mt-4 pt-4 border-t border-blue-700 text-center text-blue-300">
                <p>&copy; {{ date('Y') }} PromoHub. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>