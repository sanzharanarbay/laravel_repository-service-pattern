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

    public function searchCourses($inputs): JsonResponse
    {
        return response()->json($this->courseRepository->searchCoursesWithQueryParams($inputs), 200);
    }

    public function getCourseById($courseId): JsonResponse
    {
        return response()->json($this->courseRepository->getCourseWithRelations($courseId), 200);
    }

    public function createCourse($inputs): JsonResponse
    {
        $data = $this->courseRepository->create($inputs);
        return response()->json([
            'data' => $data,
            'message' => 'The course created successfully'
        ], 201);
    }

    public function updateCourse($inputs, $id): JsonResponse
    {
        $course = $this->courseRepository->find($id);
        $status = $this->courseRepository->update($inputs, $id);
        return response()->json([
            'status' => $status,
            'message' => 'The course updated successfully'
        ], 200);
    }

    public function deleteCourse($id) : JsonResponse
    {
        $status = $this->courseRepository->delete($id);
        return response()->json([
            'status' => $status,
            'message' => 'The course deleted successfully'
        ], 200);
    }

}
