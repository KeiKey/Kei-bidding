<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordValidation extends FormRequest
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
            'oldPass' => [
                    'required',
                    'max:50',
                    'min:6',
                    function ($attribute, $value, $fail) {
                        if (!Hash::check($value, auth()->user()->password)) {
                            $fail($attribute.' is invalid.');
                        }
                    },

                ],
            'newPass' => 'required|min:6|max:50'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
//    public function messages()
//    {
//        return [
//            'oldPass.required' => 'Please enter a password between 6 and 50 characters',
//            'newPass.required' => 'Please enter a password between 6 and 50 characters',
//        ];
//    }
}
