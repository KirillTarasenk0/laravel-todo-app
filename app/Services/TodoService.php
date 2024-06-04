<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TodoService
{
    public function createTodo(int $userId, string $todoTitle, string $todoDescription, string $todoDueDate, string $todoPriority, string $todoStatus): void
    {
        Task::create([
            'user_id' => $userId,
            'title' => $todoTitle,
            'description' => $todoDescription,
            'due_date' => $todoDueDate,
            'priority' => $todoPriority,
            'status' => $todoStatus,
        ]);
    }
}
