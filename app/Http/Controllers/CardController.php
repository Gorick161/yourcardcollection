<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::where('user_id', Auth::id())->latest()->get();
        return view('cards.index', compact('cards'));
    }

    public function create()
    {
        return view('cards.create');
    }

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
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $validated['user_id'] = Auth::id();

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('cards', 'public');
        $validated['image_path'] = $path;
    }

    Card::create($validated);

    return redirect()->route('cards.index')->with('success', 'Karte erfolgreich hinzugefügt.');
}
}
