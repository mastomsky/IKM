<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => 'nullable|mimes:jpg,png|max:2048',
            'email' => Rule::unique('users')->ignore($this->user),
            'name' => 'required|string|min:5',
            'role_id' => 'required',
            'password' => 'nullable|min:8',
            'repeat_password' => 'nullable|min:8|same:password'
        ];
    }
}
