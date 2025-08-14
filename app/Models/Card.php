<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
    'name', 'set', 'set_number', 'rarity', 'card_type',
    'language', 'condition', 'price', 'notes', 'user_id', 'image_path'
];

    // Relation to User the card belongs to
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

