<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function napi_ar(): BelongsTo
    {
        return $this->belongsTo(NapiArak::class);
    }

    public function kedvezmeny(): BelongsTo
    {
        return $this->belongsTo(Kedvezmenyek::class);
    }

    public function parkolohely(): BelongsTo
    {
        return $this->belongsTo(Parkolohely::class);
    }

    public function jarmu(): BelongsTo
    {
        return $this->belongsTo(Jarmu::class);
    }
}
