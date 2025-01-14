<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use CrudTrait;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'current_elo',
        'best_elo',
        'account_level',
        'current_exp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class, 'player_cards')->withPivot('quantity');
    }

    public function decks()
    {
        return $this->hasMany(Deck::class);
    }

    public function games()
    {
        return $this->hasMany(GameMatch::class, 'player1_id')->orWhere('player2_id', $this->id);
    }

    public function matchHistory()
    {
        return $this->hasMany(MatchHistory::class);
    }

   
}
