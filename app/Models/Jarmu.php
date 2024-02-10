<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jarmu extends Model
{
    use HasFactory;

    protected $table = 'jarmu';

    protected $primaryKey = 'rendszam';

    protected $fillable = [
        'felhasznalok_id',
        'jarmu_tipus',
        'generalt_azon',
    ];
}
