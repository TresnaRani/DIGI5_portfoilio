<?php

namespace App\Http\Requests;

use SebastianBergmann\Type\TrueType;
use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'percentage' => ['required', 'numeric', 'between:0,100'],
            'color' => ['nullable','string'],
        ];
    }
}
