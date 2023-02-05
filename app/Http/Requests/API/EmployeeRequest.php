<?php

namespace App\Http\Requests\API;

use App\Http\Requests\JsonErrorRequest;

class EmployeeRequest extends JsonErrorRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'full_name' => 'required|string|min:5|max:100',
            'birth_date' => 'required|date|date_format:Y-m-d|before:-18 years',
            'position_id' => 'required|integer|exists:positions,id',
            'department_id' => 'required|integer|exists:departments,id',
            'address' => 'required|string|min:5|max:255',
            'phone_number' =>  'required|string|max:12|regex:/^([+])+(7)+(7)+([0-9]{2})+([0-9]{3})+([0-9]{2})+([0-9]{2})/',
        ];
    }
}
