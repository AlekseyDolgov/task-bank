<?php

namespace App\Http\Controllers;

use App\Models\Sprav;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Blocks;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $block_id = $request->get('id');
        $tasks = Task::where('block_id', $block_id)->get();
        return view('task.index', compact('tasks'));
    }

    public function add()
    {
        $spravs = Sprav::all();
        return view('task.addTask', compact('spravs'));
    }

    public function search(Request $request)
    {
        $block_id = $request->get('id');
        $tasks = Task::where('block_id', $block_id)->get();
        $search = $request->search;
        $task = Task::where('name', 'LIKE', "%{$search}%")->orderBy('name')->paginate(10);
        return view('task.searchTask', compact('task', 'tasks'));
    }

    public function show($id)
    {
        return view('task.show', ['task' => Task::findOrFail($id)]);
    }

    public function store(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'name' => 'required',
            'formula' => 'required',
            'description' => 'required',
            'img' => '|image|mimes:jpg,png,jpeg,gif,svg',
            'sprav_id' => 'required',
            'block_id' => 'required'
        ]);

        $imagePath = $request->file('img')->store('task_img', 'public');

        // добавляет в базу данных данные из формы
        $tasks = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $imagePath,
            'formula' => $request->formula,
            'block_id' => $request->block_id,
            'sprav_id' => $request->sprav_id,
        ]);

        return redirect('/');
    }
}
