<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class TodoService
{
    public function getTodos(): LengthAwarePaginator
    {
        return Task::paginate(10);
    }
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
    public function filterTodo(string $filtrationParameter): Collection
    {
        if ($filtrationParameter === 'date_asc' || $filtrationParameter === 'date_desc') {
            $todos = $filtrationParameter === 'date_asc'
                ? Task::query()->orderBy('due_date', 'asc')->get()
                : Task::query()->orderBy('due_date', 'desc')->get();
        } else if ($filtrationParameter === 'low' || $filtrationParameter === 'medium' || $filtrationParameter === 'high') {
            $todos = Task::query()->where('priority', $filtrationParameter)->get();
        } else if ($filtrationParameter === 'pending' || $filtrationParameter === 'completed') {
            $todos = Task::query()->where('status', $filtrationParameter)->get();
        } else {
            $todos = Task::all();
        }
        return $todos;
    }
    public function deleteTodo(int $deleteTodoId): void
    {
        Task::query()->find($deleteTodoId)->delete();
    }
    public function updateTodo(int $updateTodoId, string $updateParameter): void
    {
        $todo = Task::query()->find($updateTodoId);
        if ($updateParameter === 'low' || $updateParameter === 'medium' || $updateParameter === 'high') {
            $todo->priority = $updateParameter;
            $todo->save();
        } else  {
            $todo->status = $updateParameter;
            $todo->save();
        }
    }
    public function updateTodoDate(int $todoUpdateDateId, string $todoUpdateDueDate): void
    {
        $todo = Task::query()->find($todoUpdateDateId);
        $todo->due_date = $todoUpdateDueDate;
        $todo->save();
    }
}
