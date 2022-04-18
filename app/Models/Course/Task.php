<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Task extends Model
{
    use HasFactory;

    public $fillable = [
        'lesson_id',
        'name',
        'description'
    ];


    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
