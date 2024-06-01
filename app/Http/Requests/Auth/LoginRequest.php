<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|max:255|exists:users,email',
            'password' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Неверный формат почты',
            'max' => 'Максимальный разме поля 255',
            'email.exists' => 'Данный email не зарегистрирован',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password' => 'Поле пароль должно быть строкой',
        ];
    }
}
