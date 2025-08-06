<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class CardController extends Controller
{
    /**
     * Zeigt alle Karten des angemeldeten Benutzers.
     */
    public function index()
    {
        $cards = Card::where('user_id', Auth::id())->latest()->get();
        return view('cards.index', compact('cards'));
    }

    /**
     * Shows form of card creation
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Saves new Card
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'set' => 'nullable|string|max:255',
        'set_number' => 'nullable|string|max:255',
        'rarity' => 'nullable|string|max:255',
        'card_type' => 'nullable|string|max:255',
        'language' => 'nullable|string|max:10',
        'condition' => 'nullable|string|max:50',
        'price' => 'nullable|numeric|min:0',
        'notes' => 'nullable|string',
    ]);

    $validated['user_id'] = Auth::id();

    Card::create($validated);

    return redirect()->route('cards.index')->with('success', 'Karte erfolgreich hinzugefügt.');
}
}
