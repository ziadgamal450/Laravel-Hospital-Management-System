<?php

namespace App\Http\Requests\Cruds;

use App\Models\Users\LabEmployee;
use App\Rules\UniqueEmailAcrossUsers;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LabEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $ignoredEmail = $this->method() == 'POST' ? null :
            $this->route('labEmployee')->email ?? auth()->user()->email;

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', new UniqueEmailAcrossUsers($ignoredEmail)],
            'gender' => ['required', 'boolean'],
            'phone' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];

        if ($this->method() == 'POST') {
            $rules['password'] = ['required', 'string', 'min:6'];
        }

        return $rules;
    }
}
