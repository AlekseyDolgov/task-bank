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

    public function auto()
    {
        $tasks_1 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '1')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_2 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '2')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_3 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '3')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_4 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '4')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_5 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '5')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_6 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '6')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_7 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '7')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_8 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '8')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_9 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '9')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_10 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '10')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_11 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '11')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_12 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '12')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_13 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '13')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_14 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '14')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_15 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '15')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_16 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '16')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        $tasks_17 = DB::table("task")
            ->select("id", "name", "description")
            ->where('block_id', '17')
            ->orderBy(DB::raw('RAND()'))
            ->take(1)
            ->get();
        return view('variant.auto', compact('tasks_1', 'tasks_2', 'tasks_3', 'tasks_4', 'tasks_5',
            'tasks_6', 'tasks_7', 'tasks_8', 'tasks_9', 'tasks_10', 'tasks_11', 'tasks_12', 'tasks_13', 'tasks_14', 'tasks_15',
            'tasks_16', 'tasks_17'));
    }

    public function store(Request $request)
    {


        // добавляет в базу данных данные из формы
        $tasks = Variant::create([
            'id' => $request->id,
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
