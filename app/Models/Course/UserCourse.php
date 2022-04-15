<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use HasFactory;

    public $table = 'user_courses';

    public $fillables = [
        'user_id',
        'name',
        'category_name',
        'module_name',
        'description',
        'extended_desc',
    ];
}
