<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formuls extends Model
{
    use HasFactory;

    protected $table = 'formuls';

    protected $fillable = [
        'name',
    ];
}
