<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'institution_name' => ['required','string'],
            'education_label' => ['required','string'],
            'course_name' => ['required','string'],
            'from' => ['required','date'],
            'to' => ['required','date','after:from'],
            'point' => ['required','numeric','between:0,5'],
            'out_of' => ['required','integer','between:4,5'],
        ];
    }
}
