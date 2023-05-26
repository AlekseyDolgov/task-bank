<?php

namespace App\Http\Controllers;

use App\Models\Sprav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpravController extends Controller
{
    public function index()
    {
        return view('sprav.index', ['sprav' => DB::table('sprav')->paginate(10)]);
    }

    public function show($id){
        return view('sprav.show', ['sprav' => Sprav::findOrFail($id)]);
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $sprav = Sprav::where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        return view('sprav.search', compact('sprav'));
    }

    public function add()
    {
        return view('sprav.addSprav');
    }

    public function store(Request $request)
    {
        // проверяет на ошибки
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'img' => '|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $imagePath = $request->hasFile('img')
            ? $request->file('img')->store('sprav_img', 'public')
            : 'default/default.jpg';

        // добавляет в базу данных данные из формы
        $sprav = Sprav::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $imagePath
        ]);

        return redirect('/sprav');
    }
}
