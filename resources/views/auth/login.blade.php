@extends('layouts.guest')

@section('content')
<div class="w-full max-w-md px-6 py-8 bg-white bg-opacity-10 backdrop-blur-md rounded-xl shadow-2xl">
    <h2 class="text-center text-3xl font-bold text-white mb-6">Anmelden</h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-white mb-1">E-Mail</label>
            <input id="email" type="email" name="email" required autofocus
                   class="w-full px-4 py-2 bg-white/20 text-white rounded-lg placeholder-white focus:outline-none focus:ring-2 focus:ring-indigo-300"
                   placeholder="test@example.com">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-white mb-1">Passwort</label>
            <input id="password" type="password" name="password" required
                   class="w-full px-4 py-2 bg-white/20 text-white rounded-lg placeholder-white focus:outline-none focus:ring-2 focus:ring-indigo-300"
                   placeholder="••••••••">
        </div>

        <!-- Remember Me -->
        <div class="flex items-center text-white">
            <input id="remember_me" type="checkbox" name="remember" class="mr-2">
            <label for="remember_me">Angemeldet bleiben</label>
        </div>

        <!-- Login -->
        <div>
            <button type="submit"
                    class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition">
                Login
            </button>
        </div>

        <!-- Register -->
        <p class="text-center text-sm text-white mt-4">
            Noch keinen Account?
            <a href="{{ route('register') }}" class="underline hover:text-indigo-300">Registrieren</a>
        </p>
    </form>
</div>
@endsection
