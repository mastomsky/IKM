<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'avatar' => 'required|mimes:jpg,png|max:2048',
            'email' => 'required|email|unique:users,email|email:rfc,dns',
            'name' => 'required|string|min:5',
            'role_id' => 'required',
            'password' => 'required|min:8',
            'repeat_password' => 'required|min:8|same:password'
        ];

        }
}
