<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $test = $request->test_input;
        return view('task.test', compact('test'));
    }
}
