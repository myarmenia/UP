<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
class Module extends Model
{
    use HasFactory;

    public $table = 'moduls';

    protected $fillable = [
        'course_id',
        'name',
    ];
}
