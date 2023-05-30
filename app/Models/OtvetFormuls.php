<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtvetFormuls extends Model
{
    use HasFactory;

    protected $table = 'otvet_formuls';

    protected $fillable = [
        'otvet_id',
        'formul_id',
    ];
}
