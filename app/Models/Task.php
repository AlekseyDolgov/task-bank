<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';
    protected $fillable = [
        'name',
        'description',
        'img',
        'otvet_id',
        'sprav_id',
        'block_id'
    ];


}
