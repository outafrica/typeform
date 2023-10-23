<?php

namespace App\Http\Requests\FormQuestion;

use Illuminate\Foundation\Http\FormRequest;

class FormQuestionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'form_id' => 'required',
            'form_question_category_id' => 'required',
            'question' => 'required',
            'form_question_option_type_id' => 'required',
        ];
    }
}
