<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeckCard extends Model
{
    use HasFactory;

    protected $fillable = ['deck_id', 'card_id', 'quantity'];

    public function deck()
    {
        return $this->belongsTo(Deck::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
