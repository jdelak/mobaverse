<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlayerCard extends Model
{
    use HasFactory;

    protected $fillable = ['player_id', 'card_id', 'quantity', 'level'];

    public function player()
    {
        return $this->belongsTo(User::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
