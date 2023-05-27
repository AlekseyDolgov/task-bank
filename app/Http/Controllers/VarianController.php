<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VarianController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::all();
        return view('variant.index', compact('tasks'));
    }

    public function store(Request $request)
    {


        // добавляет в базу данных данные из формы
        $tasks = Variant::create([
            'name' => $request->name,
            'task_1' => $request->task_1,
            'task_2' => $request->task_2,
            'task_3' => $request->task_3,
            'task_4' => $request->task_4,
            'task_5' => $request->task_5,
            'task_6' => $request->task_6,
            'task_7' => $request->task_7,
            'task_8' => $request->task_8,
            'task_9' => $request->task_9,
            'task_10' => $request->task_10,
            'task_11' => $request->task_11,
            'task_12' => $request->task_12,
            'task_13' => $request->task_13,
            'task_14' => $request->task_14,
            'task_15' => $request->task_15,
            'task_16' => $request->task_16,
            'task_17' => $request->task_17,
        ]);

        return redirect('/');
    }
}
