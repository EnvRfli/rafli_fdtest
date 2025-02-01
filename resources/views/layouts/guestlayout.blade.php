<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Guest Home</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50">
    <!-- Header -->
    <header class="bg-blue-700 text-white py-4 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Judul -->
            <h1 class="text-lg lg:text-xl xl:text-2xl font-bold">Welcome to Our Book Library</h1>

            <!-- Navigasi -->
            <nav>
                <div class="flex space-x-4">
                    @auth
                        <!-- Tombol Dashboard (jika sudah login) -->
                        <a href="{{ route('dashboard') }}" class="bg-white text-blue-700 px-2 py-1 md:px-3 md:py-2 xl:px-4 xl:py-3 rounded-md hover:bg-blue-100 transition duration-300">
                            Dashboard
                        </a>
                    @else
                        <!-- Tombol Login -->
                        <a href="{{ route('login') }}" class="bg-white text-blue-700 px-2 py-1 md:px-3 md:py-2 xl:px-4 xl:py-3 rounded-md hover:bg-blue-100 transition duration-300">
                            Login
                        </a>
                        <!-- Tombol Register -->
                        <a href="{{ route('register') }}" class="bg-white text-blue-700 px-2 py-1 md:px-3 md:py-2 xl:px-4 xl:py-3 rounded-md hover:bg-blue-100 transition duration-300">
                            Register
                        </a>
                    @endauth
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </div>
    </footer>
</body>
</html>