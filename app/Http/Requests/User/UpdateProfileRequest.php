<?php

namespace App\Http\Requests\User;

use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'dateOfBirth' => ['required', 'date'],
            'gender' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::id())],
        ];
    }
}
