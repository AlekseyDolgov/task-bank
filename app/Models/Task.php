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
    ];

    public function imageIsSmaller()
    {
        $image_path = storage_path('app\\public\\' . $this->img);
        $image_size = getimagesize($image_path);

        return $image_size[0] < 400 || $image_size[1] < 400;
    }
}
