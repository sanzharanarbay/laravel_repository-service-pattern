<?php

namespace App\Models;

use App\Http\Filters\API\Department\DepartmentFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * @OA\Xml(name="Department"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="label", type="string", readOnly="true", description="Department label"),
 * @OA\Property(property="code", type="string", readOnly="true", description="Department code", example="dep"),
 * @OA\Property(property="count_employees", type="integer", readOnly="true", description="Amount of the employees in the department", example="10"),
 * @OA\Property(property="created_at", type="string", format="date-time", description="Initial creation timestamp", readOnly="true"),
 * @OA\Property(property="updated_at", type="string", format="date-time", description="Last update timestamp", readOnly="true")
 * )
 *
 * Class Department
 *
 */

class Department extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'departments';

    protected $fillable = ['label', 'code'];

    protected $guarded=['id'];

    protected $filters = DepartmentFilter::class;

    protected $perPage = 10;

}
