<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizStoreOrUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | min:5 | max:40'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Quiz name can not be empty',
            'name.min' => 'Quiz name should be at least 5 characters long',
        ];

    }
}
