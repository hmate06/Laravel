<?php

namespace App\Http\Requests;

use App\Models\JobApplication;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // !!!!!!!!!!!!
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $currentYear = now()->year;

        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'birth_year' => [
                'required',
                'integer',
                'min:' . ($currentYear - 100),
                'max:' . ($currentYear - 18)
            ],
            'position' => ['required', Rule::in(array_keys(JobApplication::POSITION))],
            'introduction' => ['required', 'min:20', 'max:2000'],
            'consent' => ['accepted']
        ];
    }
}
