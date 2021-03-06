<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
class TestAnswer extends Model
{
    use HasFactory;

    public $table = 'answers';

    protected $fillable = [
        'question_id',
        'answer',
        'status'
    ];
}
