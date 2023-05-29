<?php

namespace App\Http\Controllers;

use App\Models\Otvet;
use App\Models\Blocks;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class OtvetController extends Controller
{
    public function index()
    {
        return view('otvet.otvet', ['otvet' => DB::table('otvet')->paginate(10)]);
    }

    public function fetchState(Request $request)
    {
        $data = Otvet::where("task_id", $request->task_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    public function add()
    {
        $tasks = Task::all();
        return view('otvet.addOtvet', compact('tasks'));
    }

    public function show($id)
    {
        return view('otvet.show', ['otvet' => Otvet::findOrFail($id)]);
    }

    public function show_otvet(Request $request)
    {
        $task_id = $request->get('id');
        $otvet = Otvet::where('task_id', $task_id)->get();
        return view('otvet.showOtvet', compact('otvet'));
    }

    public function del($id)
    {
        Otvet::find($id)->delete();
        $blosks = Blocks::all();
        return view('main.index', compact('blosks'));
    }

    public function store(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => '|image|mimes:jpg,png,jpeg,gif,svg',
            'task_id' => 'required',
            'formula' => 'required',
        ]);

        $imagePath = $request->file('img')->store('otvet_img', 'public');


        // добавляет в базу данных данные из формы
        $otvet = Otvet::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'img' => $imagePath,
            'task_id' => $request->task_id,
            'formula' => $request->formula,
        ]);

        return redirect('otvet');
    }
}
