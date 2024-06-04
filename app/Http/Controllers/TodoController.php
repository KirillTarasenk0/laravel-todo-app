<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Services\TodoService;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;

class TodoController
{
    #[NoReturn]
    public function store(CreateTodoRequest $request, TodoService $todoService): void
    {
        $todoService->createTodo(Auth::id(), $request['title'], $request['description'], $request['due_date'], $request['priority'], $request['status']);
    }
}
