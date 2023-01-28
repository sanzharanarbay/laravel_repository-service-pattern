<?php

namespace App\Http\Requests\API;


use App\Http\Requests\JsonErrorRequest;

class CourseRequest extends JsonErrorRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'credits' => 'required|integer|between:1,6',
            'start_date' => 'required|date|date_format:Y-m-d|required_with:end_date|after:tomorrow',
            'end_date' => 'required|date|date_format:Y-m-d|required_with:start_date|after:start_date',
        ];
    }
}
