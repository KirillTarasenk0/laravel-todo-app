<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateRule;

class CreateTodoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:80'],
            'description' => ['required', 'string', 'max:255'],
            'due_date' => ['required', 'date', new DateRule],
            'priority' => ['required'],
            'status' => ['required'],
        ];
    }
}
