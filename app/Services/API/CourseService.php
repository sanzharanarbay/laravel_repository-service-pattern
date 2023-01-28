<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.01.2023
 * Time: 17:13
 */

namespace App\Services\API;


use App\Repositories\API\CourseRepository;
use Illuminate\Http\JsonResponse;

class CourseService
{
    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function createCourse($inputs): JsonResponse
    {
        $status = $this->courseRepository->create($inputs);
        return response()->json([
            'status' => $status,
            'message' => 'The course created successfully'
        ], 201);
    }


}
