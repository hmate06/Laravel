<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feladat kezelő</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <header class="bg-white shadow ">
        <nav class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center h-12">
                <span class="text-xl font-bold">Feladat kezelő</span>

                {{-- Desktop menu --}}
                <div class="hidden md:flex space-x-6">

                    <a href="{{ route('tasks.index') }}" class="text-gray-700 hover:text-blue-600">Feladatok</a>
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

                <a href="{{ route('tasks.index') }}" class="block text-gray-700 hover:text-blue-600">Feladatok</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600">Rólunk</a>
            </div>
        </nav>
    </header>

    <main class="flex-1 max-w-6xl w-full mx-auto my-3">
        @if (session('success'))
            <div class="bg-green-50 border border-green-500 text-green-800 text-sm px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-300 w-full p-4">
        <p class="max-w-6xl mx-auto text-right"> &copy;2026 - BG</p>
    </footer>

</body>

</html>
