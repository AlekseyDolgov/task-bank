<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $table = 'variant';
    protected $fillable = [
    'name',
    'task_1',
    'task_2',
    'task_3',
    'task_4',
    'task_5',
    'task_6',
    'task_7',
    'task_8',
    'task_9',
    'task_10',
    'task_11',
    'task_12',
    'task_13',
    'task_14',
    'task_15',
    'task_16',
    'task_17'
    ];
}
