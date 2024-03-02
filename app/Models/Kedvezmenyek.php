<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kedvezmenyek extends Model
{
    use HasFactory;

    protected $table = 'kedvezmenyek';
    protected $primaryKey = 'kedvezmeny_id';

    protected $fillable = [
        'megnevezes',
        'hatartol',
        'mikortol',
        'merteke',
    ];
}
