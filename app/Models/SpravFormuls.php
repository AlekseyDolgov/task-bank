<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpravFormuls extends Model
{
    use HasFactory;

    protected $table = 'sprav_formuls';

    protected $fillable = [
        'sparv_id',
        'formul_id',
    ];
}
