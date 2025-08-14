@extends('layouts.app')

@section('title', 'Neue Karte hinzufügen')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">Neue Karte hinzufügen</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-600 text-white p-4 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('cards.store') }}" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-white">Name</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('name') }}" />
            </div>

            <!-- Set -->
            <div>
                <label for="set" class="block text-sm font-medium text-white">Set</label>
                <input type="text" name="set" id="set"
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('set') }}" />
            </div>

            <!-- Set-Nummer -->
            <div>
                <label for="set_number" class="block text-sm font-medium text-white">Set-Nummer</label>
                <input type="text" name="set_number" id="set_number"
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('set_number') }}" />
            </div>

            <!-- Seltenheit -->
            <div>
                <label for="rarity" class="block text-sm font-medium text-white">Seltenheit</label>
                <select name="rarity" id="rarity" required
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white">
                    <option value="">Wählen…</option>
                    <option value="AR" {{ old('rarity') == 'AR' ? 'selected' : '' }}>AR</option>
                    <option value="SR" {{ old('rarity') == 'SR' ? 'selected' : '' }}>SR</option>
                    <option value="SAR" {{ old('rarity') == 'SAR' ? 'selected' : '' }}>SAR</option>
                </select>
            </div>

            <!-- Kartenart -->
            <div>
                <label for="card_type" class="block text-sm font-medium text-white">Kartenart</label>
                <input type="text" name="card_type" id="card_type"
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('card_type') }}" />
            </div>

            <!-- Sprache -->
            <div>
                <label for="language" class="block text-sm font-medium text-white">Sprache</label>
                <input type="text" name="language" id="language"
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('language', 'JPN') }}" />
            </div>

            <!-- Zustand -->
            <div>
                <label for="condition" class="block text-sm font-medium text-white">Zustand</label>
                <input type="text" name="condition" id="condition"
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('condition') }}" />
            </div>

            <!-- Preis -->
            <div>
                <label for="price" class="block text-sm font-medium text-white">Preis (€)</label>
                <input type="number" step="0.01" name="price" id="price"
                    class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white"
                    value="{{ old('price') }}" />
            </div>
        </div>

        

        <!-- Notizen -->
        <div>
            <label for="notes" class="block text-sm font-medium text-white">Bemerkungen</label>
            <textarea name="notes" id="notes" rows="3"
                class="mt-1 block w-full rounded-md bg-gray-700 border border-gray-600 focus:border-cyan-500 focus:ring-cyan-500 text-white">{{ old('notes') }}</textarea>
        </div>

         <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-300">Bild hochladen (optional):</label>
        <input type="file" name="image" id="image"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-cyan-500">
    </div>

    <button type="submit"
            class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-4 py-2 rounded">
        Karte speichern
    </button>
        </div>
    </form>
</div>
@endsection
