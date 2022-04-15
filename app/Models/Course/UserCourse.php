<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class UserCourse extends Model
{
    use HasFactory;

    public $table = 'user_courses';

    protected $fillable = [
        'user_id',
        'name',
        'category_name',
        'module_name',
        'description',
        'extended_desc',
    ];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
