<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\DepartmentRequest;
use App\Interfaces\DepartmentRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    private $departmentRepository;

    public function __construct(DepartmentRepositoryInterface $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->departmentRepository->getAllDepartments(),200);
    }

    public function show($id): JsonResponse
    {
        return response()->json($this->departmentRepository->getDepartmentById($id), 200);
    }

    public function store(DepartmentRequest $request): JsonResponse
    {
        $inputs = $request->only([
            'label',
            'code'
        ]);
        return response()->json($this->departmentRepository->createDepartment($inputs), 201);
    }

    public function update(DepartmentRequest $request, $id): JsonResponse
    {
        $inputs = $request->only([
            'label',
            'code'
        ]);

        return response()->json($this->departmentRepository->updateDepartment($id, $inputs), 200);
    }

    public function destroy($id): JsonResponse
    {
        $this->departmentRepository->deleteDepartment($id);

        return response()->json(['message' => 'Successfully deleted'], 204);
    }

}
