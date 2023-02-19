<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PositionRequest;
use App\Interfaces\PositionRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    private $positionRepository;

    public function __construct(PositionRepositoryInterface $positionRepository)
    {
        $this->positionRepository = $positionRepository;
    }

    public function index(Request $request): JsonResponse
    {
        $query_params = $request->all();
        return response()->json($this->positionRepository->getAllPositions($query_params),200);
    }

    public function show($id): JsonResponse
    {
        return response()->json($this->positionRepository->getPositionById($id), 200);
    }

    public function store(PositionRequest $request): JsonResponse
    {
        $inputs = $request->only([
            'label',
            'slug'
        ]);
        return response()->json([
            'message' => 'success',
            'data' => $this->positionRepository->createPosition($inputs),
        ], 201);
    }

    public function update(PositionRequest $request, $id): JsonResponse
    {
        $inputs = $request->only([
            'label',
            'slug'
        ]);
        $status = $this->positionRepository->updatePosition($id, $inputs);
        return response()->json([
            'message' => 'success',
            'status' => $status
        ], 200);
    }

    public function destroy($id): JsonResponse
    {
        $status = $this->positionRepository->deletePosition($id);
        return response()->json([
            'message' => 'success',
            'status' => $status,
        ], 200);
    }
}
