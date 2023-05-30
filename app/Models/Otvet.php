<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otvet extends Model
{
    use HasFactory;

    protected $table = 'otvet';

    protected $fillable = [
        'name',
        'description',
        'img',
        'status',
        'task_id',
    ];
}
