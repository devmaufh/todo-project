<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $tasks = Task::all();

        $response = ['tasks' => $tasks];
        return response()->json($response);
    }

    public function store(Request $request)
    {
        $rules = [
            'title'       => ['required', 'string', 'max:100'],
            'description' => ['string']
        ];
        $request->validate($rules);

        $task = Task::create([
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        return response()->json($task);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json($task);
    }
}
