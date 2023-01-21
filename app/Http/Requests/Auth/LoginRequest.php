<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.01.2023
 * Time: 16:55
 */

namespace App\Http\Requests\Auth;


use App\Http\Requests\JsonErrorRequest;

class LoginRequest extends JsonErrorRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules() :array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }
}
