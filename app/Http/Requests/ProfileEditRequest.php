<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileEditRequest extends FormRequest
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
            'login' => [
                'required','alpha_dash','min:3','max:16',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],
            'email' => [
                'required','email','min:4','max:32',
                Rule::unique('users')->ignore(Auth::user()->id)
            ],

//            'first_name' => '',
//            'last_name' => '',
//            'location' => '',
        ];
    }
}
