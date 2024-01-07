<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContentRequest extends FormRequest
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
                    'sort'      => ['required', 'numeric'],
                    'image'     => ['nullable', 'file'],
                    'action'    => ['nullable', 'string'],
                    'html'      => ['nullable', 'boolean'],
                    'text'      => ['required', 'string'],
                ];
            case 'PATCH':
                return [
                    'title'     => ['required', 'string'],
                    'sort'      => ['required', 'numeric'],
                    'image'     => ['nullable', 'file'],
                    'action'    => ['nullable', 'string'],
                    'html'      => ['nullable', 'boolean'],
                    'text'      => ['required', 'string'],
                ];
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'html' => $this->html == 'on' ? true : false
        ]);
    }

    public function failedAuthorization() {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Authorization errors',
          ])->setStatusCode(401));
    }
}
