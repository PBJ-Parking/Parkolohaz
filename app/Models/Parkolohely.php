<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkolohely extends Model
{
    use HasFactory;

    protected $table = 'parkolohely';
    protected $primaryKey = 'hely_id';

    protected $fillable = [
        'hely_tipusa',
        'statusz',
       
    ];
}
