<?php

namespace App\Http\Requests\User;

use App\Rules\OldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !empty(auth()->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'password' => ['required', new OldPassword
//                function ($attribute, $value, $fail) {
//                    if (!Hash::check($value, $this->user()->password)) {
//                        $fail('Неверный старый пароль.');
//                    }
//                },
            ],
            'new_password' => ['required', 'string', 'max:255', 'same:new_password_confirm', Password::defaults()],
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
            'password.required' => 'Поле пароль обязательно для заполнения',
            'new_password.required' => 'Поле новый пароль обязательно для заполнения',
            'password.string' => 'Поле пароль должно быть строкой',
            'new_password.string' => 'Поле новый пароль должно быть строкой',
            'new_password.uncompromised' => 'Ваш пароль был скомпрометирован. Рекомендуем сменить пароль',
            'new_password.numbers' => 'Пароль должен содержать цифру',
            'new_password.symbols' => 'Пароль должен содержать символ',
            'new_password.letters' => 'Пароль должен содержать буквы',
            'new_password.mixed' => 'Пароль должен содержать смешанный регистр',
            'new_password.min' => 'Минимальный размер пароля 6 символов',
            'new_password.same' => 'Подтвердите пароль',
        ];
    }
}
