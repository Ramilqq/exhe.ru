<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        switch ($this->getMethod())
        {
            case 'POST':
                return [
                    'name'     => ['required', 'string'],
                    'email'     => ['required', 'unique:users,email'],
                    'role'      => ['required', 'numeric', 'min:0', 'max:1'],
                    'password' => ['required', 'string', 'confirmed', 'min:3', 'max:30'],
                ];
            case 'PATCH':
                return [
                    'name'     => ['required', 'string'],
                    'email'     => ['required', 'unique:users,email,'.$this->id],
                    'role'      => ['required', 'numeric', 'min:0', 'max:1'],
                ];
            case 'PUT':
                return [
                    'password' => ['required', 'string', 'confirmed', 'min:3', 'max:30'],
                ];
        }
    }
}
