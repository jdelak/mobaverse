<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatchHistory extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'player_id', 'deck_id', 'result'];

    public function match()
    {
        return $this->belongsTo(GameMatch::class);
    }

    public function player()
    {
        return $this->belongsTo(User::class);
    }

    public function deck()
    {
        return $this->belongsTo(Deck::class);
    }
}
