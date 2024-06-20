<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'full_name' => 'required|string|max:510',
            'phone' => 'required|string|max:255|unique:users,phone',
            'email' => 'required|email|max:255|unique:users,email',
            'birthday' => 'required|date',
            'password' => ['required', 'string', 'max:255', 'confirmed', Password::defaults()],
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
            'full_name.required' => 'Поле ФИО обязательно для заполнения',
            'phone.required' => 'Поле телефон обязательно для заполнения',
            'max' => 'Максимальный размер поля 255 символов',
            'full_name.max' => 'Максимальный разме поля 510 символов',
            'phone.unique' => 'Поле телефон должно быть уникальным',
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Неверный формат почты',
            'email.unique' => 'Поле email должно быть уникальным',
            'string' => 'Поле должно быть строкой',
            'email.exists' => 'Данный email не зарегистрирован',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password.string' => 'Поле пароль должно быть строкой',
            'password.uncompromised' => 'Ваш пароль был скомпрометирован. Рекомендуем сменить пароль',
            'password.numbers' => 'Пароль должен содержать цифру',
            'password.symbols' => 'Пароль должен содержать символ',
            'password.letters' => 'Пароль должен содержать буквы',
            'password.mixed' => 'Пароль должен содержать смешанный регистр',
            'password.min' => 'Минимальный размер пароля 6 символов',
        ];
    }
}
