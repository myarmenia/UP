<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LessonReq;
use App\Models\Course\Lesson;
use App\Services\FileUploadService;
use App\Models\File;

class LessonController extends Controller
{
    public function store(LessonReq $request,$id)
    {
        $data = $request->validated();
        $data['module_id'] = $id;
        $lesson = Lesson::create($data);

        if(isset($data['file']))
        {
            $folder = 'user_lesson/material/' . $lesson['id'];
            $path = FileUploadService::upload($data['file'],$folder);
            $file_m = new File();

            $file_m->path = $path;
            $file_m->type = "";

            $lesson->file()->save($file_m);
        }

        if(isset($data['file_2']))
        {
            $folder = 'user_lesson/certificate/' . $lesson['id'];
            $path = FileUploadService::upload($data['file_2'],$folder);
            $file_m = new File();

            $file_m->path = $path;
            $file_m->type = "";

            $lesson->file()->save($file_m);
        }

        return redirect()->back()->with('message','success');

    }
}
