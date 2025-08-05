@extends('layouts.guest')

@section('title', 'Registrieren')

@section('content')
<h2 class="text-center text-3xl font-bold text-cyan-400 mb-6">Registrieren</h2>

<form method="POST" action="{{ route('register') }}" class="space-y-4">
    @csrf

    <!-- Email -->
    <div>
        <label for="email" class="block text-sm font-medium text-white">E-Mail</label>
        <input type="email" name="email" id="email" required
            class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white" />
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-white">Passwort</label>
        <input type="password" name="password" id="password" required
            class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white" />
    </div>

    <!-- Password Confirmation -->
    <div>
    <input id="password_confirmation" type="password" name="password_confirmation" required
    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white autofill:bg-gray-700"
    placeholder="•••">
</div>

    <!-- Submit -->
    <button type="submit"
        class="w-full py-2 px-4 bg-cyan-500 hover:bg-cyan-600 rounded-md text-white font-semibold">
        Registrieren
    </button>
</form>

<p class="mt-4 text-center text-sm text-white">
    Bereits registriert?
    <a href="{{ route('login') }}" class="text-cyan-400 hover:underline">Login</a>
</p>
@endsection
