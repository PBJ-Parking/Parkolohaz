<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NapiArak extends Model
{
    use HasFactory;

    protected $table = 'napi_arak';

    protected $primaryKey = 'ar_id';

    protected $fillable = [
        'megnevezes',
        'ar',
        'mikortol',
        'tipus',
    ];

    public function tipus(): BelongsTo
    {
        return $this->belongsTo(Tipus::class, 'tipus', 'id');
    }

    public function berlesek(): HasMany
    {
        return $this->hasMany(Berles::class, 'ar_id', 'ar_id');
    }
}
