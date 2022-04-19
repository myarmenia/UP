<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ModuleReq;
use App\Models\Course\Module;
use App\Models\Course\UserCourse;

class ModuleController extends Controller
{
    public function store(ModuleReq $request, $id)
    {
        $data = $request->validated();
        $data['course_id'] = $id;

        $last_modul = Module::where("course_id", $id)->last();
        $modul_name = 'Модуль '.($last_modul->id)+1;
        $data['name'] = $modul_name;

        Module::create($data);

        // return redirect()->back()->with('message','success');
        return response()->json(['success'=>"Добавлен $modul_name"], 200);
    }
}
