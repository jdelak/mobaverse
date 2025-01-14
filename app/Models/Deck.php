<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deck extends Model
{
    use HasFactory;

    protected $fillable = ['player_id', 'deck_name'];

    public function player()
    {
        return $this->belongsTo(User::class);
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class, 'deck_cards')->withPivot('quantity');
    }

    public function matchHistory()
    {
        return $this->hasMany(MatchHistory::class);
    }
}
