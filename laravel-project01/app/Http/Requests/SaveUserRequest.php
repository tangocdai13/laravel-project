<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => ['required'],
            'phone' => ['required', 'numeric'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user)],
            'gender' => ['required', 'in:1,2'],
            'family_id' => ['required', 'numeric', function ($attribute, $value, $fail) {
                if ($value == 0) {
                    $fail('Data input cannot accpeted');
                }
            }],
        ];

        if (empty($this->user)) {
            $rules['password'] = ['required', 'min:6'];
            $rules['password_confirm'] = ['required', 'same:password'];
            $rules['avatar'] = ['required', 'mimes:jpg,png,gif,webp','max:5000'];
        }

        if (! empty($this->user)) {
            $rules['password'] = ['nullable', 'min:6'];
            $rules['password_confirm'] = ['nullable', 'same:password'];
            $rules['avatar'] = ['nullable', 'mimes:jpg,png,gif,webp', 'max:5000'];
        }

        return $rules;
    }
}
