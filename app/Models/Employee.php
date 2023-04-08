<?php

namespace App\Models;

use App\Http\Filters\API\Employee\EmployeeFilter;
use App\Http\Filters\Filterable;
use App\Traits\Employee\HasAge;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * @OA\Xml(name="Employee"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="full_name", type="string", readOnly="true", description="Employee full name"),
 * @OA\Property(property="birth_date", type="string", format="date", readOnly="true",  description="Employee birth date"),
 * @OA\Property(property="is_active", type="boolean", readOnly="true", description="Employee is active"),
 * @OA\Property(property="position_id", type="integer", readOnly="true", description="Employee position"),
 * @OA\Property(property="department_id", type="integer", readOnly="true", description="Employee department"),
 * @OA\Property(property="address", type="string", readOnly="true", description="Employee address"),
 * @OA\Property(property="age", type="integer", readOnly="true", description="Employee age"),
 * @OA\Property(property="phone_number", type="string", readOnly="true", description="Employee phone number"),
 * @OA\Property(property="created_at", type="string", format="date-time", description="Initial creation timestamp", readOnly="true"),
 * @OA\Property(property="updated_at", type="string", format="date-time", description="Last update timestamp", readOnly="true")
 * )
 *
 * Class Employee
 *
 */

class Employee extends Model
{
    use HasFactory;
    use HasAge;
    use Filterable;

    protected $table = 'employees';

    protected $fillable = ['full_name', 'birth_date', 'position_id', 'department_id',
        'address', 'phone_number'];

    protected $guarded = ['id'];

    protected $filters = EmployeeFilter::class;

    protected $perPage = 10;

    protected $hidden = ['pivot'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'employee_courses',
            'employee_id', 'course_id')->withTimestamps();
    }

}
