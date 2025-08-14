@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gray-900 text-white">

    <!-- Content -->
    <main class="p-6">
        <h1 class="text-3xl font-bold text-cyan-400 mb-6">Hallo Dashboard</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Deine Sammlung</h2>
                <p>Hier kannst du deine Karten verwalten und neue hinzufügen.</p>
                <a href="{{ route('cards.create') }}" class="inline-block mt-3 px-4 py-2 bg-cyan-500 hover:bg-cyan-600 rounded text-white">Karte hinzufügen</a>
            </div>

            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2"> Sammlung</h2>
                <p> Ein Überblick über deine Sammlung.</p>
                <a href="{{ route('cards.index') }}" class="inline-block mt-3 px-4 py-2 bg-cyan-500 hover:bg-cyan-600 rounded text-white">Kartensammlung ansehen</a>
            </div>


            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-2">Profil</h2>
                <p>Hier kannst du deine Benutzerdaten bearbeiten.</p>
                <a href="{{ route('profile.edit') }}" class="inline-block mt-3 px-4 py-2 bg-cyan-500 hover:bg-cyan-600 rounded text-white">Profil bearbeiten</a>
            </div>
        </div>
    </main>
</div>
@endsection
