<?php

namespace App\Http\Request;

class NewsStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|filled',
            'description' => 'required|filled'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'title is required!',
            'description.required' => 'description is required!',
            'title.filled' => 'title must be filled!',
            'description.filled' => 'description must be filled!'
        ];
    }
}