@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow rounded">
        <h2 class="text-xl font-semibold mb-4">Deine Kartensammlung</h2>

        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('cards.create') }}"
            class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Neue Karte
        </a>

        @if ($cards->count() > 0)
            <table class="w-full text-left table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-2 py-1">Name</th>
                        <th class="px-2 py-1">Set</th>
                        <th class="px-2 py-1">Nummer</th>
                        <th class="px-2 py-1">Seltenheit</th>
                        <th class="px-2 py-1">Sprache</th>
                        <th class="px-2 py-1">Preis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $card)
                        <div class="bg-white bg-opacity-10 p-4 rounded-lg shadow-lg mb-4 text-white">
                            <div class="flex items-center space-x-4">
                                @if ($card->image_url)
                                    <img src="{{ $card->image_url }}" alt="{{ $card->name }}" class="w-20 h-auto rounded">
                                @endif
                                <div>
                                    <h3 class="text-xl font-bold">{{ $card->name }}</h3>
                                    <p>Set: {{ $card->set_name ?? 'Unbekannt' }}</p>
                                    <p>Typ: {{ $card->type ?? 'Unbekannt' }}</p>
                                    <p>Seltenheit: {{ $card->rarity ?? 'Unbekannt' }}</p>
                                    <p>Zustand: {{ $card->condition ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Du hast noch keine Karten gespeichert.</p>
        @endif
    </div>
@endsection
