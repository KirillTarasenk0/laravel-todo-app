<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoSortRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'sort' => ['required', 'string'],
        ];
    }
}
