<?php

namespace App\Http\Controllers;

use App\Models\Otvet;
use Illuminate\Http\Request;

class OtvetController extends Controller
{
    public function index()
    {
        $otvet = Otvet::all();
        return view('otvet.otvet', compact('otvet'));
    }

    public function fetchState(Request $request)
    {
        $data = Otvet::where("task_id", $request->task_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    public function add()
    {
        return view('otvet.addOtvet');
    }
}
