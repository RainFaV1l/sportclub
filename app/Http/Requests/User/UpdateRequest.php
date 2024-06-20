<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateRequest extends FormRequest
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
            'full_name' => 'required|string|max:510',
            'birthday' => 'required|date',
            'phone' => 'required|string|max:255|' . Rule::unique('users', 'phone')->ignore($this->user()->id),
            'email' => 'required|email|max:255|' . Rule::unique('users', 'email')->ignore($this->user()->id),
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
        ];
    }
}
