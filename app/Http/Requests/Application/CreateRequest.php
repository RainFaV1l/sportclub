<?php

namespace App\Http\Requests\Application;

use App\Models\Section;
use App\Rules\BirthdateInRange;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $section = Section::query()->find(request()->section_id);

        if (is_null($this->request->get('birthday'))) {
            $this->request->set('birthday', auth()->user()->birthday);
        } else {
            $this->request->set('is_child', true);
        }

        return [
            'phone' => 'required|string|max:255',
            'full_name' => 'required|string|max:500',
            'email' => 'required|email|max:255',
            'birthday' => ['required', 'date', new BirthdateInRange($section->age_limit_min, $section->age_limit_max)],
            'section_id' => 'required|integer|exists:sections,id',
            'schedule_id' => 'required|integer|exists:schedules,id',
            'is_child' => 'nullable|bool',
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
            'phone.required' => 'Поле телефон обязательно для заполнения',
            'full_name.required' => 'Поле ФИО обязательно для заполнения',
            'email.required' => 'Поле Email обязательно для заполнения',
            'email.email' => 'Введите корректный email',
            'section_id.required' => 'Выберите секцию',
            'section_id.exists' => 'Такой секции нет',
            'schedule_id.required' => 'Выберите расписание',
            'schedule_id.exists' => 'Такого расписания нет',
            'string' => 'Поле должно быть строкой',
            'full_name.max' => 'Максимальное количество символов 500',
            'max' => 'Максимальное количество символов 255',
        ];
    }
}
