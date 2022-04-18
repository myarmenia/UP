<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Lesson extends Model
{
    use HasFactory;

    public $table = 'lessons';

    protected $fillable = [
        'module_id',
        'name',
        'speaker_name',
        'speaker_desc',
        'source_type',
        'video_path',
        'video_code',
        'invite_link_author',
        'invite_link_mentor',
        'invite_link_student',
        'publish_date_video',
        'publish_date_video_MSK',
        'video_type',
        'status',
    ];


    public function file()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
