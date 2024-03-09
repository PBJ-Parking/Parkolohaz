<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parkolohely extends Model
{
    use HasFactory;

    protected $table = 'parkolohely';
    protected $primaryKey = 'hely_id';

    protected $fillable = [
        'hely_tipusa',
        'statusz',

    ];

    public function tipus(): BelongsTo
    {
        return $this->belongsTo(Tipus::class);
    }

    public function berlesek(): HasMany
    {
        return $this->hasMany(Berles::class);
    }
}
