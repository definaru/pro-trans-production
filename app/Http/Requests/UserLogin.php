<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserLogin extends FormRequest
{

    protected $redirectTo = '/';

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'email' => 'required|email|min:4|max:50|exists:users',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'Логин указан не верно',
            'email.min' => 'Логин не может быть меньше 4 символов',
            'email.max' => 'Логин не может быть больше 50 символов',
            //'password.password' => 'Пароль указан не верно', // exists
            'email.required' => 'Укажите ваш логин',
            'email.email' => 'Логин должен быть действительным адресом электронной почты',
            'password.required' => 'Укажите ваш пароль'
        ];
    }
}
