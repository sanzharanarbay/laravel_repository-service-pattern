<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.02.2023
 * Time: 15:45
 */

namespace App\Services\API;


use App\Repositories\API\EmployeeRepository;
use Illuminate\Http\JsonResponse;

class EmployeeService
{
    protected $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function searchEmployees($inputs): JsonResponse
    {
        return response()->json($this->employeeRepository->searchEmployeesWithQueryParams($inputs), 200);
    }

    public function getEmployeeById($employeeId): JsonResponse
    {
        return response()->json($this->employeeRepository->getEmployeeWithRelations($employeeId), 200);
    }

    public function createEmployee($inputs): JsonResponse
    {
        $data = $this->employeeRepository->create($inputs);
        return response()->json([
            'data' => $data,
            'message' => 'The employee created successfully'
        ], 201);
    }

    public function updateEmployee($inputs, $id): JsonResponse
    {
        $employee = $this->employeeRepository->find($id);
        $status = $this->employeeRepository->update($inputs, $id);
        return response()->json([
            'status' => $status,
            'message' => 'The employee updated successfully'
        ], 200);
    }

    public function deleteEmployee($id): JsonResponse
    {
        $status = $this->employeeRepository->delete($id);
        return response()->json([
            'status' => $status,
            'message' => 'The employee deleted successfully'
        ], 200);
    }

    public function attachEmployeeCourses($id, $inputs): JsonResponse
    {
        try {
            $employee = $this->employeeRepository->find($id);
            $inputs = array_map(function ($value) {
                return intval($value);
            }, $inputs);
            $employee->courses()->sync($inputs);
            return response()->json([
                'status' => true,
                'message' => 'Success'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 422);
        }
    }

    public function detachEmployeeCourses($id): JsonResponse
    {
        try {
            $employee = $this->employeeRepository->find($id);
            $employee->courses()->detach();
            return response()->json([
                'status' => true,
                'message' => 'Success'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 422);
        }
    }

}
