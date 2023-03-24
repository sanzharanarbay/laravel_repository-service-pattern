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

    /**
     * @OA\Get(
     *  path="/api/v1/departments",
     *  summary="list",
     *  description="list of the departments",
     * operationId="departmentList",
     * tags={"departments"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="label", in="query", description="label", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Parameter(name="page", in="query", description="the page number", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="code", in="query", description="code", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="current_page", type="integer", example="1"),
     *     @OA\Property(property="data", type="object"),
     *     @OA\Property(property="next_page_url", type="string"),
     *     @OA\Property(property="path", type="string"),
     *     @OA\Property(property="per_page", type="integer", example="10"),
     *     @OA\Property(property="prev_page_url", type="string"),
     *     @OA\Property(property="to", type="integer", example="10"),
     *     @OA\Property(property="total", type="integer", example="20"),
     *     )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * )
     */

    public function index(Request $request): JsonResponse
    {
        $query_params = $request->all();
        return response()->json($this->departmentRepository->getAllDepartments($query_params), 200);
    }


    /**
     * @OA\Get(
     *  path="/api/v1/departments/{id}",
     *  summary="show",
     *  description="get department by id",
     * operationId="departmentShow",
     * tags={"departments"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Department", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="id", type="integer", example="1"),
     *     @OA\Property(property="label", type="string"),
     *     @OA\Property(property="code", type="string", example="dep"),
     *     @OA\Property(property="count_employees", type="integer", example="10"),
     *     @OA\Property(property="created_at", type="string"),
     *     @OA\Property(property="updated_at", type="string"),
     *     )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * )
     */
    public function show($id): JsonResponse
    {
        return response()->json($this->departmentRepository->getDepartmentById($id), 200);
    }

    /**
     * @OA\Post(
     * path="/api/v1/departments/create",
     * summary="create",
     * description="Create department",
     * operationId="departmentCreate",
     * tags={"departments"},
     * security={ {"bearerAuth": {} }},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass department data",
     *    @OA\JsonContent(
     *       required={"label","code"},
     *     @OA\Property(property="label", type="string", example="Test"),
     *       @OA\Property(property="code", type="string", example="test"),
     *    ),
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="message", type="string"),
     *     @OA\Property(property="data", type="object"),
     *     )
     *  ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong request input",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="The name field is required.")
     *        )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * ),
     */

    public function store(DepartmentRequest $request): JsonResponse
    {
        $inputs = $request->only([
            'label',
            'code'
        ]);
        return response()->json([
            'message' => 'success',
            'data' => $this->departmentRepository->createDepartment($inputs),
        ], 201);
    }


    /**
     * @OA\Put(
     * path="/api/v1/departments/update/{id}",
     * summary="update",
     * description="Update department",
     * operationId="departmentUpdate",
     * tags={"departments"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Department", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass department data",
     *    @OA\JsonContent(
     *       required={"label","code"},
     *     @OA\Property(property="label", type="string", example="Test"),
     *       @OA\Property(property="code", type="string", example="test"),
     *    ),
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="message", type="string"),
     *     @OA\Property(property="status", type="integer"),
     *     )
     *  ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong request input",
     *    @OA\JsonContent(
     *       @OA\Property(property="error", type="string", example="The name field is required.")
     *        )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     * ),
     */

    public function update(DepartmentRequest $request, $id): JsonResponse
    {
        $inputs = $request->only([
            'label',
            'code'
        ]);
        $status = $this->departmentRepository->updateDepartment($id, $inputs);
        return response()->json([
            'message' => 'success',
            'status' => $status,
        ], 200);
    }

    /**
     * @OA\Delete(
     * path="/api/v1/departments/destroy/{id}",
     * summary="destroy",
     * description="Destroy department",
     * operationId="departmentDestroy",
     * tags={"departments"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Department", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="message", type="string"),
     *     @OA\Property(property="status", type="integer"),
     *     )
     *  ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="Token is Expired"),
     *    )
     * )
     *   ),
     */

    public function destroy($id): JsonResponse
    {
        $status = $this->departmentRepository->deleteDepartment($id);
        return response()->json([
            'message' => 'success',
            'status' => $status,
        ], 200);
    }

}
