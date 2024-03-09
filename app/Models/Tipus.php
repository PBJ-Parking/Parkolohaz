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
        return $this->hasMany(Jarmu::class);
    }

    public function napi_arak(): HasMany
    {
        return $this->hasMany(NapiArak::class);
    }

    public function parkolohelyek(): HasMany
    {
        return $this->hasMany(Parkolohely::class);
    }
}
