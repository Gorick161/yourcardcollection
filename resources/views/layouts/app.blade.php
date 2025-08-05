<!DOCTYPE html>
<html lang="de" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-900 text-white">

    {{-- Navigation --}}
    <nav class="bg-gray-800 border-b border-gray-700 px-6 py-4 flex justify-between items-center">
        <div class="text-xl font-bold text-cyan-400">YourCardCollection</div>
        <div>
            <a href="{{ route('dashboard') }}" class="text-white hover:text-cyan-400 mx-2">Dashboard</a>
            <a href="{{ route('cards.index') }}" class="text-white hover:text-cyan-400 mx-2">Meine Karten</a>
            <a href="{{ route('profile.edit') }}" class="text-white hover:text-cyan-400 mx-2">Profil</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button class="text-white hover:text-red-400 ml-2" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    {{-- Hauptinhalt --}}
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>
