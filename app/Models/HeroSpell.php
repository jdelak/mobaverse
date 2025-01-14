<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSpell extends Model
{
    protected $fillable = ['card_id', 'spell_name', 'spell_description', 'mana_cost', 'effect', 'image'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
