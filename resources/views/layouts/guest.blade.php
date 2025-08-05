<!DOCTYPE html>
<html lang="de" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center justify-center">

    <div class="ring-container">
        @for ($i = 0; $i < 48; $i++)
            <div class="ring-bar" style="transform: translateX(-50%) rotate({{ $i * (360 / 48) }}deg); animation-delay: {{ $i * 0.05 }}s;"></div>
        @endfor
    </div>

    <div class="relative z-10 bg-gray-800 bg-opacity-90 rounded-xl p-8 shadow-xl w-full max-w-sm text-white">
        <h2 class="text-center text-3xl font-bold text-cyan-400 mb-6">Login</h2>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium">E-Mail</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium">Passwort</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white" />
            </div>
            <div class="flex justify-between text-sm">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="rounded text-cyan-500 bg-gray-700 border-gray-600" />
                    <span class="ml-2">Angemeldet bleiben</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-cyan-400 hover:underline">Passwort vergessen?</a>
            </div>
            <button type="submit"
                class="w-full py-2 px-4 bg-cyan-500 hover:bg-cyan-600 rounded-md text-white font-semibold">Login</button>
        </form>
        <p class="mt-4 text-center text-sm">
            Noch kein Konto?
            <a href="{{ route('register') }}" class="text-cyan-400 hover:underline">Registrieren</a>
        </p>
    </div>

</body>
</html>
