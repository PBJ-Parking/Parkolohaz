<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felhasznalo extends Model
{
    use HasFactory;

    protected $table = 'felhasznalo';

    protected $fillable = [
        'nev',
        'telefonszam',
        'cim',
        'email',
        'jelszo',
        'megrendelo_tipus',
        'adoszam',
        'admin-e',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
