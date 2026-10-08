<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // művelet
        $tasks =  Task::orderBy('due_date')->get();
        //Task::all(); // select * from tasks
        // dd($tasks);
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        //  dd($request);
        Task::create($request->validated()); // insert into ....

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function update(Request $request, Task $task)
    {
        $task->update(['is_done' => ! $task->is_done]);
        return redirect()->route('tasks.index');
    }
}
