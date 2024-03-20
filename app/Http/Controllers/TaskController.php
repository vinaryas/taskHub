<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'deadline' => 'required|date',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task' => 'required',
            'deadline' => 'required|date',
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all(['task', 'deadline']));

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
