<?php

namespace App\Http\Requests;

use App\Models\CampApplication;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Laravel\Roster\Enums\BrowserTestFramework;
use Override;

class StoreCampApplicationRequest extends FormRequest
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
            'child_name' => ['required', 'string', 'min:3', 'max:100'],
            'parent_email' => ['required', 'email', 'max:255'],
            'age' => [
                'required',
                'integer',
                'between:6,14',
            ],
            'camp_session' => ['required', Rule::in(array_keys(CampApplication::SESSIONS))],
            'accomodation' => ['required', Rule::in(array_keys(CampApplication::ACCOMMODATIONS))],
            'notes' => ['max: 500'],
        ];
    }

    #[Override]
    public function messages(): array
    {
        return [
            'child_name.required' => 'A gyermek nevének megadása kötelező.',
            'child_name.string' => 'A mezőben szöveges értéknek kell lennie.',
            'child_name.min' => 'Túl rövid a megadott érték.',
            'child_name.max' => 'Túl hosszú a megadott érték.',
            'parent_email.required' => 'A szülő e-mail címének megadása kötelező.',
            'parent_email.string' => 'A szülő e-mail címe szöveges érték kell legyen.',
            'parent_email.email' => 'Érvényes e-mail címet adj meg.',
            'parent_email.max' => 'Az e-mail cím túl hosszú.',
            'age.required' => 'A gyermek életkorának megadása kötelező.',
            'age.between' => 'Az életkornak 6 és 14 év között kell lennie.',
            'camp_session.required' => 'A turnus kiválasztása kötelező.',
            'camp_session.in' => 'Válassz a felsorolt turnusok közül.',
            'accomodation.required' => 'Az ellátás kiválasztása kötelező.',
            'notes.max' => 'A megjegyzés legfeljebb 500 karakter lehet.',
        ];
    }
}
