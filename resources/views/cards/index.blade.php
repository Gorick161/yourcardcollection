@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow rounded">
    <h2 class="text-xl font-semibold mb-4">Deine Kartensammlung</h2>

    @if (session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cards.create') }}" class="inline-block mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
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
                    <tr class="border-b">
                        <td class="px-2 py-1">{{ $card->name }}</td>
                        <td class="px-2 py-1">{{ $card->set }}</td>
                        <td class="px-2 py-1">{{ $card->set_number }}</td>
                        <td class="px-2 py-1">{{ $card->rarity }}</td>
                        <td class="px-2 py-1">{{ $card->language }}</td>
                        <td class="px-2 py-1">{{ $card->price ? number_format($card->price, 2) . ' €' : '–' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Du hast noch keine Karten gespeichert.</p>
    @endif
</div>
@endsection
