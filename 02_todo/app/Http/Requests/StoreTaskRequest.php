<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'due_date' => ['required', 'date', 'after:now']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'A cím megadása kötelező!',
            'title.max' => 'A cím legfeljebb 255 karakter lehet!',
            'description.max' => 'A leírás legfeljebb 2000 karakter lehet!',
            'due_date.reuired' => 'A dátum megadása kötelező!',
            'due_date.date' => 'A határidő nem érvényes dátum formátum!',
            'due_date.after' => 'A határidő nem lehet a múltban!',
        ];
    }
}
