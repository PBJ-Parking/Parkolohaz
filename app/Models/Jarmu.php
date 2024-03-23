<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function felhasznalo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'felhasznalok_id', 'id');
    }

    public function tipus(): BelongsTo
    {
        return $this->belongsTo(Tipus::class, 'jarmu_tipus', 'id');
    }

    public function berlesek(): HasMany
    {
        return $this->hasMany(Berles::class, 'rendszam', 'rendszam');
    }
}
