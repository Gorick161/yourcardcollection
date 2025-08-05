<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    /**
     * Shows all  Cards of the user currently logged in
     */
    public function index()
    {
        $cards = Card::where('user_id', Auth::id())->latest()->get();
        return view('cards.index', compact('cards'));
    }

    /**
     * Shows form for creating card
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * SAve new card into database
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'set' => 'nullable|string|max:255',
            'set_number' => 'nullable|string|max:255',
            'rarity' => 'required|string|in:AR,SR,SAR',
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
