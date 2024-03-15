<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function berlesek(): HasMany
    {
        return $this->hasMany(Berles::class, 'kedvezmeny_id', 'kedvezmeny_id');
    }
}
