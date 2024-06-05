<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Services\TodoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Requests\TodoSortRequest;

class TodoController
{
    public function index(TodoService $todoService): View
    {
        return view('todos', ['todos' => $todoService->getTodos()]);
    }
    public function store(CreateTodoRequest $request, TodoService $todoService): RedirectResponse
    {
        $todoService->createTodo(Auth::id(), $request['title'], $request['description'], $request['due_date'], $request['priority'], $request['status']);
        return redirect()->route('todos-page');
    }
    public function todosFilter(TodoSortRequest $request): void
    {
        dd($request['sort']);
    }
}
