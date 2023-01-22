<?php

namespace App\Http\Requests\API;


use App\Http\Requests\JsonErrorRequest;

class PositionRequest extends JsonErrorRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'label' => 'required|string',
            'slug' => 'required|string',
        ];
    }
}
