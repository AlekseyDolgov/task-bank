<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('main.index', compact('tasks'));
    }

    public function add()
    {
        return view('main.addTask');
    }
}
