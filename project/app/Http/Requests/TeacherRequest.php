<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'first_name' => 'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'last_name' => 'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'gender' => 'required',
        ];
    }
}
