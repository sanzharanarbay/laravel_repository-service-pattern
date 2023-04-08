<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\EmployeeRequest;
use App\Http\Requests\API\UpdateEmployeeCoursesRequest;
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

    /**
     * @OA\Get(
     *  path="/api/v1/employees",
     *  summary="list",
     *  description="list of the employees",
     * operationId="employeeList",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="full_name", in="query", description="full_name", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Parameter(name="address", in="query", description="address", required=false,
     *        @OA\Schema(type="string")
     * ),
     * @OA\Parameter(name="phone_number", in="query", description="phone_number", required=false,
     *        @OA\Schema(type="string", example="+14")
     * ),
     * @OA\Parameter(name="position_id", in="query", description="position_id", required=false,
     *        @OA\Schema(type="integer", example="1")
     * ),
     * @OA\Parameter(name="department_id", in="query", description="department_id", required=false,
     *        @OA\Schema(type="integer", example="1")
     * ),
     * @OA\Parameter(name="is_active", in="query", description="is active", required=false,
     *        @OA\Schema(type="boolean")
     * ),
     * @OA\Parameter(name="age_gte", in="query", description="age greater than or equal", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="age_lte", in="query", description="age less than or equal", required=false,
     *        @OA\Schema(type="integer")
     * ),
     * @OA\Parameter(name="page", in="query", description="the page number", required=false,
     *        @OA\Schema(type="integer", example="1")
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
        return $this->employeeService->searchEmployees($query_params);
    }

    /**
     * @OA\Get(
     *  path="/api/v1/employees/{id}",
     *  summary="show",
     *  description="get employee by id",
     * operationId="employeeShow",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of employee", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *     @OA\JsonContent(
     *     @OA\Property(property="id", type="integer"),
     *     @OA\Property(property="full_name", type="string"),
     *     @OA\Property(property="birth_date", type="string"),
     *     @OA\Property(property="is_active", type="boolean"),
     *     @OA\Property(property="position_id", type="integer"),
     *     @OA\Property(property="department_id", type="integer"),
     *     @OA\Property(property="address", type="string"),
     *     @OA\Property(property="age", type="integer"),
     *     @OA\Property(property="phone_number", type="string"),
     *     @OA\Property(property="created_at", type="string"),
     *     @OA\Property(property="updated_at", type="string"),
     *     @OA\Property(property="position", type="object", ref="#/components/schemas/Position"),
     *     @OA\Property(property="department", type="object", ref="#/components/schemas/Department"),
     *     @OA\Property(property="courses", type="array", @OA\Items(ref="#/components/schemas/Course")),
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
        return $this->employeeService->getEmployeeById($id);
    }


    /**
     * @OA\Post(
     * path="/api/v1/employees/create",
     * summary="create",
     * description="Create employee",
     * operationId="employeeCreate",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass employee data",
     *    @OA\JsonContent(
     *       required={"full_name","birth_date","position_id", "department_id", "address", "phone_number"},
     *     @OA\Property(property="full_name", type="string", example="Ivan Ivanov"),
     *     @OA\Property(property="birth_date", type="string", example="1998-05-05"),
     *     @OA\Property(property="position_id", type="integer", example="2"),
     *     @OA\Property(property="department_id", type="integer", example="3"),
     *     @OA\Property(property="address", type="string", example="Almaty, Abay st. 45"),
     *     @OA\Property(property="phone_number", type="string", example="+77071234578"),
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

    public function store(EmployeeRequest $request): JsonResponse
    {
        $inputs = $request->only('full_name', 'birth_date', 'position_id', 'department_id',
            'address','phone_number');
        return $this->employeeService->createEmployee($inputs);
    }


    /**
     * @OA\Put(
     * path="/api/v1/employees/update/{id}",
     * summary="update",
     * description="Update employee",
     * operationId="employeeUpdate",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of employee", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass employee data",
     *    @OA\JsonContent(
     *       required={"full_name","birth_date","position_id", "department_id", "address", "phone_number"},
     *     @OA\Property(property="full_name", type="string", example="Ivan Ivanov"),
     *     @OA\Property(property="birth_date", type="string", example="1998-05-05"),
     *     @OA\Property(property="position_id", type="integer", example="2"),
     *     @OA\Property(property="department_id", type="integer", example="3"),
     *     @OA\Property(property="address", type="string", example="Almaty, Abay st. 45"),
     *     @OA\Property(property="phone_number", type="string", example="+77071234578"),
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

    public function update(EmployeeRequest $request, $id): JsonResponse
    {
        $inputs = $request->only('full_name', 'birth_date', 'position_id', 'department_id',
            'address','phone_number');
        return $this->employeeService->updateEmployee($inputs, $id);
    }

    /**
     * @OA\Delete(
     * path="/api/v1/employees/destroy/{id}",
     * summary="destroy",
     * description="Destroy employee",
     * operationId="employeeDestroy",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of employee", required=true,
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
        return $this->employeeService->deleteEmployee($id);
    }

    /**
     * @OA\Put(
     * path="/api/v1/employees/{id}/courses/attach",
     * summary="course attach",
     * description="Attach course to employee",
     * operationId="employeeCoursesAttach",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of employee", required=true,
     *        @OA\Schema(type="integer")
     *  ),
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass employee data",
     *    @OA\JsonContent(
     *       required={"course_ids"},
     *     @OA\Property(property="course_ids", type="array", @OA\Items(
     *     type="integer",
     *     example="1")),
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

    public function attach($id, UpdateEmployeeCoursesRequest $request): JsonResponse
    {
        $inputs = $request->only('course_ids');
        return $this->employeeService->attachEmployeeCourses($id, $inputs['course_ids']);
    }


    /**
     * @OA\Delete(
     * path="/api/v1/employees/{id}/courses/detach",
     * summary="course detach",
     * description="Detach course from the employee",
     * operationId="employeeCourseDetach",
     * tags={"employees"},
     * security={ {"bearerAuth": {} }},
     * @OA\Parameter(name="id", in="path", description="Id of employee", required=true,
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

    public function detach($id): JsonResponse
    {
        return $this->employeeService->detachEmployeeCourses($id);
    }


}
