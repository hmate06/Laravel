<?php

namespace App\Http\Requests;

use App\Models\PizzaOrder;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePizzaOrderRequest extends FormRequest
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
        return [
            'name' => ['required'],
            'address' => ['required' ],
            'size' => ['required', Rule::in(array_keys(PizzaOrder::SIZES))],
            'pasta' => ['required', Rule::in(array_keys(PizzaOrder::PASTA))],
        ];
    }
}
