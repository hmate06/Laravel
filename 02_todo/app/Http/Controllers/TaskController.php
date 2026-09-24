<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('due_date')->get(); //Task::all();


        return view('tasks.index', ['tasks' => $tasks]);
    }
     public function create()
    {
        return view('tasks.create');
    }

}
