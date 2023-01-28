<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CourseRequest;
use App\Services\API\CourseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function store(CourseRequest $request): JsonResponse
    {
        $inputs = $request->only('title', 'description', 'credits', 'start_date', 'end_date');
        $inputs['created_by'] = Auth::user()->id;
        dd($inputs);
        return $this->courseService->createCourse($inputs);
    }
}
