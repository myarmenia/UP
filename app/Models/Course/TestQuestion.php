<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
class TestQuestion extends Model
{
    use HasFactory;

    public $table = 'questions';

    protected $fillable = [
        'test_id',
        'text'
    ];
}
