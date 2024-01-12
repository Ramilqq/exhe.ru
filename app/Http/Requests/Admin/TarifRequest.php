<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TarifRequest extends FormRequest
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
                    'title'     => ['required', 'string'],
                    'price'     => ['required', 'numeric'],
                    'text'      => ['required', 'string'],
                ];
            case 'PATCH':
                return [
                    'title'     => ['required', 'string'],
                    'price'     => ['required', 'numeric'],
                    'text'      => ['required', 'string'],
                ];
        }
    }
}
