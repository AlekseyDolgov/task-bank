<?php

namespace App\Http\Controllers;

use App\Models\Otvet;
use App\Models\Blocks;
use App\Models\Sprav;
use App\Models\Task;
use App\Models\Formuls;
use App\Models\TaskFormuls;
use App\Models\SpravFormuls;
use App\Models\OtvetFormuls;
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
        $formuls = Formuls::all();
        return view('formuls.addFormuls', compact('formuls'));
    }

    public function index_task_f()
    {
        $tf = TaskFormuls::all();
        return view('formuls.indexTaskF', compact('tf'));
    }

    public function index_otvet_f()
    {
        $of = OtvetFormuls::all();
        return view('formuls.indexOtvetF', compact('of'));
    }

    public function index_sprav_f()
    {
        $sf = SpravFormuls::all();
        return view('formuls.indexSpravF', compact('sf'));
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
        return view('formuls.addOtvetF', compact('formuls', 'otvets'));
    }

    public function add_sprav()
    {
        $spravs = Sprav::all();
        $formuls = Formuls::all();
        return view('formuls.addSpravF', compact('formuls', 'spravs'));
    }

    public function del($id)
    {
        Formuls::find($id)->delete();
        $blosks = Blocks::all();
        return view('main.index', compact('blosks'));
    }

    public function show_task(Request $request)
    {
        $tasks_id = $request->get('id');
        $formuls = TaskFormuls::where('task_id', $tasks_id)->get();
        return view('task.show', compact('formuls'));
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

    public function store_t(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'task_id' => 'required',
            'formul_id' => 'required',
        ]);

        // добавляет в базу данных данные из формы
        $formuls_t = TaskFormuls::create([
            'task_id' => $request->task_id,
            'formul_id' => $request->formul_id,
        ]);

        return redirect('formuls/indexTaskF');
    }

    public function store_o(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'otvet_id' => 'required',
            'formul_id' => 'required',
        ]);

        // добавляет в базу данных данные из формы
        $formuls_o = OtvetFormuls::create([
            'otvet_id' => $request->otvet_id,
            'formul_id' => $request->formul_id,
        ]);

        return redirect('formuls/indexOtvetF');
    }

    public function store_s(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'sparv_id' => 'required',
            'formul_id' => 'required',
        ]);

        // добавляет в базу данных данные из формы
        $formuls_s = SpravFormuls::create([
            'spаrv_id' => $request->sparv_id,
            'formul_id' => $request->formul_id,
        ]);

        return redirect('formuls/indexSpravF');
    }
}
