<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipus extends Model
{
    use HasFactory;

    protected $table = 'tipus';

    protected $fillable = [
        'elnevezes'
    ];

    public function jarmuvek(): HasMany
    {
        return $this->hasMany(Jarmu::class, 'jarmu_tipus', 'id');
    }

    public function napi_arak(): HasMany
    {
        return $this->hasMany(NapiArak::class, 'tipus', 'id');
    }

    public function parkolohelyek(): HasMany
    {
        return $this->hasMany(Parkolohely::class, 'hely_tipusa', 'id');
    }
}
