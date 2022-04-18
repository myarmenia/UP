<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserCourseReq;
use App\Models\Course\UserCourse;
use Illuminate\Support\Facades\Auth;
use App\Services\FileUploadService;
use App\Models\File;


class UserCourseController extends Controller
{
    public function store(UserCourseReq $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $user_course = UserCourse::create($data,['except' => ['file'] ]);

        if(isset($data['file']))
        {
            $folder = 'user_course/' . $user_course['id'];
            $path = FileUploadService::upload($data['file'],$folder);
            $file_m = new File();

            $file_m->path = $path;
            $file_m->type = "";

            $user_course->file()->save($file_m);
        }

        return redirect()->back()->with('message','success');
    }
}
