<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'card_id',
        'image_url',
        'rarity',
        'type',
        'set_name',
    ];

    // Relation to User the card belongs to
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

