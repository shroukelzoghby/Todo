<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks',compact(var_name:'tasks'));

    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        Task::create([
            'title'=>$request->title
        ]);

        return redirect()->route('tasks.index');
    }
}
