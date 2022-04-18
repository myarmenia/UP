<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestReq;

class TestController extends Controller
{
    public function store(TestReq $request)
    {
        dd($request->all());
    }
}
