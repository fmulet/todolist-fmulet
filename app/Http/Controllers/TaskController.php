<?php

namespace App\Http\Controllers;


use App\Models\Task;

use Carbon\Carbon;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task.name' => 'required|string|max:255', //
        ]);
        $newTask = new Task;
        $newTask->name = $request->task['name'];
        $newTask->save();
        return $newTask;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $existingTask = Task::find($id);

        if ($existingTask) {
            // Alternar el estado de 'completed'
            $existingTask->completed = !$existingTask->completed;

            $existingTask->updated_at = Carbon::now();
            $existingTask->save();

            return $existingTask;
        }
        return "Task not found";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $existingTask = Task::find($id);

        if ($existingTask) {
            $existingTask->delete();

            return "Task deleted";
        }
        return "Task not found";
    }
}
