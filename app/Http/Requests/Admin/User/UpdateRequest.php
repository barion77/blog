<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'    => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'role'   => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите имя',
            'name.string' => 'Нужно ввести в строковом представлении',
            'email.required' => 'Введите email',
            'email.email' => 'Введите email',
            'role.required' => 'Выберите роль',
            'role.integer' => 'Ошибка',
        ];
    }
}
