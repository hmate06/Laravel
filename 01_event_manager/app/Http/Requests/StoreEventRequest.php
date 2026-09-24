<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'title' => ['required', 'string', 'max:30'],
            'description' => ['required', 'string', 'max:2000'],
            'event_date' => ['required', 'date', 'after:now'],

        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'A cím mező kitöltése kötelező.',
            'title.string' => 'A cím mezőnek szöveges értéknek kell lennie.',
            'title.max' => 'A cím mező maximum :max karakter hosszú lehet.',
            'description.string' => 'A leírás mezőnek szöveges értéknek kell lennie.',
            'event_date.required' => 'Az esemény dátumának megadása kötelező.',
            'event_date.date' => 'Az esemény dátumának érvényes dátumnak kell lennie.',
        ];
    }
}
