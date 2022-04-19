<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'time_limit',
        'lesson_id'
    ];
}
