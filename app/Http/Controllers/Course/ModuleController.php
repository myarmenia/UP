<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ModuleReq;
use App\Models\Course\Module;

class ModuleController extends Controller
{
    public function store(ModuleReq $request,$id)
    {
        $data = $request->validated();
        $data['course_id'] = $id;

        Module::create($data);

        return redirect()->back()->with('message','success');
    }
}
