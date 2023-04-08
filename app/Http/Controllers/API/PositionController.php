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

    /**
     * @OA\Get(
     *  path="/api/v1/positions",
     *  summary="list",
     *  description="list of the positions",
     * operationId="positionList",
     * tags={"positions"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="label", in="query", description="label", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Parameter(name="page", in="query", description="the page number", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="slug", in="query", description="slug", required=false,
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
        return response()->json($this->positionRepository->getAllPositions($query_params),200);
    }


    /**
     * @OA\Get(
     *  path="/api/v1/positions/{id}",
     *  summary="show",
     *  description="get position by id",
     * operationId="positionsShow",
     * tags={"positions"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Position", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="id", type="integer", example="1"),
     *     @OA\Property(property="label", type="string"),
     *     @OA\Property(property="slug", type="string", example="dev"),
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
        return response()->json($this->positionRepository->getPositionById($id), 200);
    }

    /**
     * @OA\Post(
     * path="/api/v1/positions/create",
     * summary="create",
     * description="Create Position",
     * operationId="positionCreate",
     * tags={"positions"},
     * security={ {"bearerAuth": {} }},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass position data",
     *    @OA\JsonContent(
     *       required={"label","slug"},
     *     @OA\Property(property="label", type="string", example="Test"),
     *       @OA\Property(property="slug", type="string", example="test"),
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

    /**
     * @OA\Put(
     * path="/api/v1/positions/update/{id}",
     * summary="update",
     * description="Update position",
     * operationId="positionUpdate",
     * tags={"positions"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Positions", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass position data",
     *    @OA\JsonContent(
     *       required={"label","slug"},
     *     @OA\Property(property="label", type="string", example="Test"),
     *       @OA\Property(property="slug", type="string", example="test"),
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


    /**
     * @OA\Delete(
     * path="/api/v1/positions/destroy/{id}",
     * summary="destroy",
     * description="Destroy position",
     * operationId="positionDestroy",
     * tags={"positions"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Position", required=true,
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
        $status = $this->positionRepository->deletePosition($id);
        return response()->json([
            'message' => 'success',
            'status' => $status,
        ], 200);
    }
}
