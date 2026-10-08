<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Állásjelentkezés</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    <header class="bg-white shadow ">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl py-5">Állásjelentkezés</h1>
        </div>
    </header>
    <main class="flex-1">
        @yield('content')
    </main>
    <footer class="bg-white border-t border-gray-300 py-3">
        <div class="max-w-6xl mx-auto">
            <p class="text-sm italic">&copy; 2026 - HM</p>
        </div>
    </footer>
</body>
</html>
