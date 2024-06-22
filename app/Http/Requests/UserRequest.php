<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => ['string','required','unique:users'],
            'full_name' => ['string','required'],
            'password' => ['required','min:8'],
            'phone' => ['string','nullable'],
            'addrss' => ['string','nullbale'],
            'email' => ['required','unique:users'],
            'gender' => ['string','max:25','required'],
            'last_login' => ['string','nullable'],
            'created_at' => ['string','nullable'],
            'update_at' => ['string','nullable'],
        ];
    }
}
