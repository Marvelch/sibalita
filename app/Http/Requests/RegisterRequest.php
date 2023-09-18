<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required|min:15|max:16',
            'place_of_birth' => 'required|min:2|max:100',
            'date_of_birth' => 'required',
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'statusCode'=> 400,
            'status'    => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ])->setStatusCode(400));
    }
}
