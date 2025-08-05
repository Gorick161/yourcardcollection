@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<h2 class="text-center text-3xl font-bold text-cyan-400 mb-6">Login</h2>

<form method="POST" action="{{ route('login') }}" class="space-y-4">
    @csrf

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-white">E-Mail</label>
        <input type="email" name="email" id="email" required autofocus
            class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white" />
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-white">Passwort</label>
        <input type="password" name="password" id="password" required
            class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white" />
    </div>

    <!-- Remember Me -->
    <div class="flex justify-between items-center text-sm text-white">
        <label class="flex items-center">
            <input type="checkbox" name="remember" class="rounded text-cyan-500 bg-gray-700 border-gray-600 mr-2" />
            Angemeldet bleiben
        </label>
        <a href="{{ route('password.request') }}" class="text-cyan-400 hover:underline">Passwort vergessen?</a>
    </div>

    <!-- Submit -->
    <button type="submit"
        class="w-full py-2 px-4 bg-cyan-500 hover:bg-cyan-600 rounded-md text-white font-semibold">
        Login
    </button>
</form>

<p class="mt-4 text-center text-sm text-white">
    Noch kein Konto?
    <a href="{{ route('register') }}" class="text-cyan-400 hover:underline">Registrieren</a>
</p>
@endsection
