<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>[ 'required', 'string', 'max:225'],
            'email' =>[ 'required', 'string', 'email', 'max:255', 'unique:users'],
            'password' =>[ 'string', 'min:8', 'max:225'],
        ];
    }
}
