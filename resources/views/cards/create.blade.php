@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-8 p-4 bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">Neue Karte hinzufügen</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('cards.store') }}">
        @csrf

        <div class="grid grid-cols-1 gap-4">
            <input type="text" name="name" placeholder="Name der Karte" class="input" value="{{ old('name') }}" required>
            <input type="text" name="set" placeholder="Set (z. B. sv2a)" class="input" value="{{ old('set') }}">
            <input type="text" name="set_number" placeholder="Set-Nummer (z. B. 201/165)" class="input" value="{{ old('set_number') }}">
            
            <select name="rarity" class="input" required>
                <option value="">Seltenheit wählen</option>
                <option value="AR">AR</option>
                <option value="SR">SR</option>
                <option value="SAR">SAR</option>
            </select>

            <input type="text" name="card_type" placeholder="Kartenart (z. B. Pokémon, Trainer)" class="input" value="{{ old('card_type') }}">
            <input type="text" name="language" placeholder="Sprache (z. B. JPN, DE)" class="input" value="{{ old('language', 'JPN') }}">
            <input type="text" name="condition" placeholder="Zustand (z. B. Mint, Played)" class="input" value="{{ old('condition') }}">
            <input type="number" step="0.01" name="price" placeholder="Preis (€)" class="input" value="{{ old('price') }}">
            <textarea name="notes" placeholder="Bemerkungen" class="input">{{ old('notes') }}</textarea>
        </div>

        <div class="mt-4 text-right">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Speichern
            </button>
        </div>
    </form>
</div>
@endsection
