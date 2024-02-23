<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jarmu extends Model
{
    use HasFactory;

    protected $table = 'jarmu';

    protected $primaryKey = 'rendszam';

    public $incrementing = false;

    protected $fillable = [
        'rendszam',
        'felhasznalok_id',
        'jarmu_tipus',
        'generalt_azon',
    ];
}
