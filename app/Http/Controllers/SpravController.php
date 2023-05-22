<?php

namespace App\Http\Controllers;

use App\Models\Sprav;
use Illuminate\Http\Request;

class SpravController extends Controller
{
    public function index()
    {
        $sprav = Sprav::all();
        return view('main.index', compact('sprav'));
    }

    public function add()
    {
        return view('main.addSprav');
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

        return redirect('/');
    }
}
