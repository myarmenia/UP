<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course\Task;
use App\Http\Requests\TaskReq;
use App\Models\File;
use App\Services\FileUploadService;

class TaskController extends Controller
{
    public function store(TaskReq $request,$id)
    {
        dd($id);
        $data = $request->validated();
        $data['lesson_id'] = $id;
dd($id);
        $task = Task::create($data);

        if(isset($data['file'])){
            $folder = 'user_task/' . $task['id'];
            $path = FileUploadService::upload($data['file'],$folder);
            $file_m = new File();

            $file_m->path = $path;
            $file_m->type = "";

            $task->file()->save($file_m);
        }

        return redirect()->back()->with('message','success');
    }
}
