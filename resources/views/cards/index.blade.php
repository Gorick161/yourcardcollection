@extends('layouts.app')

@section('title', 'Meine Kartensammlung')

@section('content')
    <div class="max-w-7xl mx-auto mt-8 px-4">
        <h2 class="text-2xl font-bold text-cyan-400 mb-6 text-center">Deine Kartensammlung</h2>

        @if (session('success'))
            <div class="mb-6 bg-green-700 text-white px-4 py-2 rounded shadow">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-right mb-6">
            <a href="{{ route('cards.create') }}"
               class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-4 py-2 rounded shadow">
                + Neue Karte
            </a>
        </div>

        @if ($cards->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($cards as $card)
                    <div class="bg-gray-800 text-white rounded-lg p-4 shadow-lg border border-gray-700 hover:shadow-xl transition duration-200">
                        @if ($card->image_url)
                            <img src="{{ $card->image_url }}" alt="{{ $card->name }}" class="w-full h-auto rounded mb-4">
                        @endif
                        <h3 class="text-lg font-bold text-cyan-400 mb-2">{{ $card->name }}</h3>
                        <p><span class="font-semibold">Set:</span> {{ $card->set_name ?? $card->set ?? 'Unbekannt' }}</p>
                        <p><span class="font-semibold">Typ:</span> {{ $card->type ?? $card->card_type ?? 'Unbekannt' }}</p>
                        <p><span class="font-semibold">Seltenheit:</span> {{ $card->rarity ?? 'Unbekannt' }}</p>
                        <p><span class="font-semibold">Sprache:</span> {{ $card->language ?? 'N/A' }}</p>
                        <p><span class="font-semibold">Zustand:</span> {{ $card->condition ?? 'N/A' }}</p>
                        <p><span class="font-semibold">Preis:</span> {{ $card->price ? number_format($card->price, 2) . ' €' : 'N/A' }}</p>
                        @if ($card->image_path)
                            <img src="{{ asset('storage/' . $card->image_path) }}" alt="{{ $card->name }}"
                             class="w-full h-300 object-cover mb-4 rounded shadow">
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-white text-center">Du hast noch keine Karten gespeichert.</p>
        @endif
    </div>
@endsection
