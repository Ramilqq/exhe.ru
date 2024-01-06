<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PageRequest extends FormRequest
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
                    'title'         => ['required', 'string'],
                    'longtitle'     => ['required', 'string'],
                    'description'   => ['required', 'string'],
                    'keyword'       => ['required', 'string'],
                    'url'           => [''],
                    'top_menu'      => ['nullable', 'boolean'],
                    'bottom_menu'   => ['nullable', 'boolean'],
                    'publich'       => ['nullable', 'boolean'],
                ];
            case 'PATCH':
                return [
                    'title'         => ['required', 'string'],
                    'longtitle'     => ['required', 'string'],
                    'description'   => ['required', 'string'],
                    'keyword'       => ['required', 'string'],
                    'url'           => [''],
                    'top_menu'      => ['nullable', 'boolean'],
                    'bottom_menu'   => ['nullable', 'boolean'],
                    'publich'       => ['nullable', 'boolean'],
                ];
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'top_menu' => $this->top_menu == 'on' ? true : false,
            'bottom_menu' => $this->bottom_menu == 'on' ? true : false,
            'publich' => $this->publich == 'on' ? true : false,
        ]);
    }

    public function failedAuthorization() {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Authorization errors',
          ])->setStatusCode(401));
    }
}
