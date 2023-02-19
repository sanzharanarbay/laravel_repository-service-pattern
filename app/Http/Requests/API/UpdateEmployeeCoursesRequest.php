<?php

namespace App\Http\Requests\API;


use App\Http\Requests\JsonErrorRequest;

class UpdateEmployeeCoursesRequest extends JsonErrorRequest
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
            'course_ids' => 'required|array',
            'course_ids.*' => 'required|integer|exists:courses,id'
        ];
    }
}
