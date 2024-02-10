<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berles extends Model
{
    use HasFactory;

    protected $table = 'berles';

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('rendszam', '=', $this->getAttribute('rendszam'))
            ->where('foglalas_datuma', '=', $this->getAttribute('foglalas_datuma'));


        return $query;
    }

    protected $fillable = [
        'rendszam',
        'foglalas_datuma',
        'foglalas_kezdet',
        'foglalas_vege',
        'ar_id',
        'kedvezmeny_id',
        'hely_id',
        'generalt_kod',
        'fizetve',
    ];
}
