<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'nickname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function userGame()
    {
        return $this->hasMany(UserGame::class, 'user_id');
    }
}
