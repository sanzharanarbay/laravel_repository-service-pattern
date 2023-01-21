<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.01.2023
 * Time: 16:55
 */

namespace App\Http\Requests\Auth;


use App\Http\Requests\JsonErrorRequest;

class RegisterRequest extends JsonErrorRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules() :array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ];
    }
}
