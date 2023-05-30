<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskFormuls extends Model
{
    use HasFactory;

    protected $table = 'task_formuls';

    protected $fillable = [
        'task_id',
        'formul_id',
    ];
}
