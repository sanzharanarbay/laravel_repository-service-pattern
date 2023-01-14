<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.01.2023
 * Time: 18:49
 */

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


abstract class JsonErrorRequest extends LaravelFormRequest
{
    abstract public function rules();
    abstract public function authorize();
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['error' => $validator->errors()->first()], 422));
    }
}
