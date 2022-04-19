<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestReq;
use App\Models\Course\Test;
use App\Models\Course\TestQuestion;
use App\Models\Course\TestAnswer;

class TestController extends Controller
{
    public function store(TestReq $request,$id)
    {

        $data = $request->validated();
        $data['lesson_id'] = $id;
        $test_cr =  Test::create($data);

        if(isset($request['q_name'])){
            foreach($request['q_name'] as $num => $val){
                $test_quest = TestQuestion::create([
                    'text' => $val,
                    'test_id' => $test_cr['id']
                ]);

                if(isset($request['a_name'])){
                    foreach($request['a_name'] as $numb => $valu){
                        if(substr($numb, 0, 1) == $num){
                            TestAnswer::create([
                                'question_id' => $test_quest['id'],
                                'answer' => $valu,
                                'status' => isset($request['a_status']) && isset($request['a_status'][$numb]) ? 1 : 0
                            ]);
                        }
                    }
                }
            }
        }


        return redirect()->back()->with('message','success');
    }
}
