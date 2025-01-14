<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['card_name', 'card_type', 'card_description', 'mana_cost', 'attack', 'health', 'effect', 'image'];

    public function players()
    {
        return $this->belongsToMany(User::class, 'player_cards')->withPivot('quantity', 'level');
    }

    public function decks()
    {
        return $this->belongsToMany(Deck::class, 'deck_cards')->withPivot('quantity');
    }

    public function heroSpells()
    {
        return $this->hasMany(HeroSpell::class);
    }

}
