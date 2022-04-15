<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class UserCourseController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());
    }
}
