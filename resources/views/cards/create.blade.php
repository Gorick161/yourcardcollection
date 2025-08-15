@extends('layouts.app')

@section('title', 'Neue Karte hinzufügen')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-gray-800 bg-opacity-90 p-8 rounded-lg shadow-lg">
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

    <form method="POST" action="{{ route('cards.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <input type="text" name="name" placeholder="Name der Karte" value="{{ old('name') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400" required>

            <input type="text" name="set" placeholder="Set (z.B. sv2a)" value="{{ old('set') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400">

            <input type="text" name="set_number" placeholder="Set-Nummer (z.B. 201/165)" value="{{ old('set_number') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400">

            <select name="rarity"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400" required>
                <option value="">Seltenheit wählen</option>
                <option value="AR" {{ old('rarity') == 'AR' ? 'selected' : '' }}>AR</option>
                <option value="SR" {{ old('rarity') == 'SR' ? 'selected' : '' }}>SR</option>
                <option value="SAR" {{ old('rarity') == 'SAR' ? 'selected' : '' }}>SAR</option>
            </select>

            <input type="text" name="card_type" placeholder="Kartenart (z.B. Pokémon, Trainer)" value="{{ old('card_type') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400">

            <input type="text" name="language" placeholder="Sprache (z.B. JPN, DE)" value="{{ old('language', 'JPN') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400">

            <input type="text" name="condition" placeholder="Zustand (z.B. Mint, Played)" value="{{ old('condition') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400">

            <input type="number" step="0.01" name="price" placeholder="Preis (€)" value="{{ old('price') }}"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400">
        </div>

        <textarea name="notes" placeholder="Bemerkungen"
            class="w-full mt-4 px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400"
            rows="3">{{ old('notes') }}</textarea>

        {{-- Bild-Upload --}}
        <div class="mt-4">
            <label class="block text-white mb-1 font-semibold" for="image">Bild der Karte (JPG, JPEG, PNG)</label>
            <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png"
                class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400" />
        </div>

        <div class="text-right mt-6">
            <button type="submit"
                class="bg-cyan-500 hover:bg-cyan-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md transition">
                Karte speichern
            </button>
        </div>
    </form>
</div>
@endsection
