<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\EmployeeRequest;
use App\Services\API\EmployeeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index(Request $request): JsonResponse
    {
        $query_params = $request->all();
        return $this->employeeService->searchEmployees($query_params);
    }

    public function show($id): JsonResponse
    {
        return $this->employeeService->getEmployeeById($id);
    }

    public function store(EmployeeRequest $request): JsonResponse
    {
        $inputs = $request->only('full_name', 'birth_date', 'position_id', 'department_id',
            'address','phone_number');
        return $this->employeeService->createEmployee($inputs);
    }

    public function update(EmployeeRequest $request, $id): JsonResponse
    {
        $inputs = $request->only('full_name', 'birth_date', 'position_id', 'department_id',
            'address','phone_number');
        return $this->employeeService->updateEmployee($inputs, $id);
    }

    public function destroy($id){
        return $this->employeeService->deleteEmployee($id);
    }


}
