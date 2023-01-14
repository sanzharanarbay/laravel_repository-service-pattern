<?php

namespace App\Http\Requests\API;

use App\Http\Requests\JsonErrorRequest;

class DepartmentRequest extends JsonErrorRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules() :array
    {
        return [
            'label' => 'required',
            'code' => 'required',
        ];
    }
}
