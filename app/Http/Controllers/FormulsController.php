<?php

namespace App\Http\Controllers;

use App\Models\Otvet;
use App\Models\Blocks;
use App\Models\Sprav;
use App\Models\Task;
use App\Models\Formuls;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class FormulsController extends Controller
{
    public function index()
    {
        return view('formuls.index', ['formuls' => DB::table('formuls')->paginate(10)]);
    }

    public function add()
    {
        $formul = Formuls::all();
        return view('formuls.addFormuls', compact('formul'));
    }

    public function add_task()
    {
        $tasks = Task::all();
        $formuls = Formuls::all();
        return view('formuls.addTaskF', compact('formuls', 'tasks'));
    }

    public function add_otvet()
    {
        $otvets = Otvet::all();
        $formuls = Formuls::all();
        return view('formuls.addTaskO', compact('formuls', 'otvets'));
    }

    public function add_sprav()
    {
        $spravs = Sprav::all();
        $formuls = Formuls::all();
        return view('formuls.addTaskS', compact('formuls', 'spravs'));
    }

//    public function show($id)
//    {
//        return view('otvet.show', ['otvet' => Otvet::findOrFail($id)]);
//    }

    public function del($id)
    {
        Formuls::find($id)->delete();
        $blosks = Blocks::all();
        return view('main.index', compact('blosks'));
    }

    public function store(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'name' => 'required',
        ]);

        // добавляет в базу данных данные из формы
        $formuls = Formuls::create([
            'name' => $request->name,
        ]);

        return redirect('formuls');
    }
}
