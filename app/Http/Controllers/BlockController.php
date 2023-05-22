<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use App\Models\Task;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        $blosks = Blocks::all();
        return view('main.index', compact('blosks'));
    }

    public function add()
    {
        return view('main.addTask');
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
            ? $request->file('img')->store('blocks_img', 'public')
            : 'default/default.jpg';

        // добавляет в базу данных данные из формы
        $blocks = Blocks::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $imagePath
        ]);

        return redirect('/');
    }
}
