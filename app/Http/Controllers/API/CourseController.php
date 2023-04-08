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

    /**
     * @OA\Get(
     *  path="/api/v1/courses",
     *  summary="list",
     *  description="list of the courses",
     * operationId="coursesList",
     * tags={"courses"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="title", in="query", description="title", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Parameter(name="page", in="query", description="the page number", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="description", in="query", description="description", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Parameter(name="credits_gte", in="query", description="credits greater than or equal", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="credits_lte", in="query", description="credits less than or equal", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="start_date", in="query", description="start date, format yyyy-mm-dd", required=false,
     *        @OA\Schema(type="string", format="date")
     * ),
     * @OA\Parameter(name="end_date", in="query", description="end date, format yyyy-mm-dd", required=false,
     *        @OA\Schema(type="string", format="date")
     * ),
     * @OA\Parameter(name="is_active", in="query", description="is active", required=false,
     *        @OA\Schema(type="boolean")
     * ),
     * @OA\Parameter(name="created_by", in="query", description="created user id", required=false,
     *        @OA\Schema(type="integer")
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
        return $this->courseService->searchCourses($query_params);
    }

    /**
     * @OA\Get(
     *  path="/api/v1/courses/{id}",
     *  summary="show",
     *  description="get course by id",
     * operationId="courseShow",
     * tags={"courses"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of Course", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="id", type="integer"),
     *     @OA\Property(property="title", type="string"),
     *     @OA\Property(property="description", type="string"),
     *     @OA\Property(property="credits", type="integer"),
     *     @OA\Property(property="start_date", type="string"),
     *     @OA\Property(property="end_date", type="string"),
     *     @OA\Property(property="is_active", type="boolean"),
     *     @OA\Property(property="created_by", type="integer"),
     *     @OA\Property(property="created_at", type="string"),
     *     @OA\Property(property="updated_at", type="string"),
     *     @OA\Property(property="created_user", type="object", ref="#/components/schemas/User"),
     *     @OA\Property(property="employees", type="array", @OA\Items(ref="#/components/schemas/Employee"))
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
        return $this->courseService->getCourseById($id);
    }

    /**
     * @OA\Post(
     * path="/api/v1/courses/create",
     * summary="create",
     * description="Create course",
     * operationId="courseCreate",
     * tags={"courses"},
     * security={ {"bearerAuth": {} }},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass course data",
     *    @OA\JsonContent(
     *       required={"title","description","credits", "start_date", "end_date"},
     *     @OA\Property(property="title", type="string", example="Test"),
     *     @OA\Property(property="description", type="string", example="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."),
     *     @OA\Property(property="credits", type="integer", example="5"),
     *     @OA\Property(property="start_date", type="string", example="yyyy-dd-mm"),
     *     @OA\Property(property="end_date", type="string", example="yyyy-dd-mm"),
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

    public function store(CourseRequest $request): JsonResponse
    {
        $inputs = $request->only('title', 'description', 'credits', 'start_date', 'end_date');
        $inputs['created_by'] = Auth::user()->id;
        return $this->courseService->createCourse($inputs);
    }

    /**
     * @OA\Put(
     * path="/api/v1/courses/update/{id}",
     * summary="update",
     * description="Update course",
     * operationId="courseUpdate",
     * tags={"courses"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of course", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass course data",
     *    @OA\JsonContent(
     *       required={"title","description","credits", "start_date", "end_date"},
     *     @OA\Property(property="title", type="string", example="Test"),
     *     @OA\Property(property="description", type="string", example="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."),
     *     @OA\Property(property="credits", type="integer", example="5"),
     *     @OA\Property(property="start_date", type="string", example="yyyy-dd-mm"),
     *     @OA\Property(property="end_date", type="string", example="yyyy-dd-mm"),
     *    ),
     * ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="message", type="string"),
     *     @OA\Property(property="status", type="boolean"),
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

    public function update(CourseRequest $request, $id): JsonResponse
    {
        $inputs = $request->only('title', 'description', 'credits', 'start_date', 'end_date');
        return $this->courseService->updateCourse($inputs, $id);
    }

    /**
     * @OA\Delete(
     * path="/api/v1/courses/destroy/{id}",
     * summary="destroy",
     * description="Destroy course",
     * operationId="courseDestroy",
     * tags={"courses"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of course", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="message", type="string"),
     *     @OA\Property(property="status", type="boolean"),
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

    public function destroy($id){
        return $this->courseService->deleteCourse($id);
    }

}
