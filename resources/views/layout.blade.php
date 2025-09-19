<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    {{-- Menu --}}
    <nav class="bg-gray-800 text-white p-4 flex justify-center gap-8">
        <a href="{{ url('/') }}" class="hover:text-yellow-300 font-semibold">Showroom</a>
        <a href="{{ url('/contact') }}" class="hover:text-yellow-300 font-semibold">Contact</a>
    </nav>

    {{-- Content --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

    {{-- Footer (optioneel) --}}
    <footer class="bg-gray-800 text-white text-center p-4">
        &copy; {{ date('Y') }} FutureDrive B.V.
    </footer>
</body>
</html>
