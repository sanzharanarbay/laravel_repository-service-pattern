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
        $this->middleware('course.check.created_by', ['only' => ['update', 'destroy']]);
    }

    public function index(Request $request): JsonResponse
    {
        $query_params = $request->all();
        return $this->courseService->searchCourses($query_params);
    }

    public function show($id): JsonResponse
    {
        return $this->courseService->getCourseById($id);
    }

    public function store(CourseRequest $request): JsonResponse
    {
        $inputs = $request->only('title', 'description', 'credits', 'start_date', 'end_date');
        $inputs['created_by'] = Auth::user()->id;
        return $this->courseService->createCourse($inputs);
    }

    public function update(CourseRequest $request, $id): JsonResponse
    {
        $inputs = $request->only('title', 'description', 'credits', 'start_date', 'end_date');
        return $this->courseService->updateCourse($inputs, $id);
    }

    public function destroy($id){
        return $this->courseService->deleteCourse($id);
    }

}
