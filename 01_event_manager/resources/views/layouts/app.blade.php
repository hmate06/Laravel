<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esemény kezelő</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <header class="bg-white shadow">
        <nav class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center h-12">
                <a href="{{ route('home') }}" class="text-xl font-bold">Event Manager</a>

                {{-- Desktop menu --}}
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Nyitó oldal</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600">Rólunk</a>
                </div>
                <label for="mobil-menu-toggle" class="md:hidden cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </div>
            <input type="checkbox" id="mobil-menu-toggle" class="hidden peer" />

            <div class="hidden peer-checked:block md:hidden space-y-2 ms-2">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600">Nyitó oldal</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600">Rólunk</a>
            </div>
        </nav>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer>
        lábrész
    </footer>

</body>

</html>
