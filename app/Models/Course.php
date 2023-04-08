<?php

namespace App\Models;

use App\Http\Filters\API\Course\CourseFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * @OA\Xml(name="Course"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="title", type="string", readOnly="true", description="Course title"),
 * @OA\Property(property="description", type="string", readOnly="true", description="Course description"),
 * @OA\Property(property="credits", type="integer", readOnly="true", description="Amount of the credits in the Course", example="5"),
 * @OA\Property(property="start_date", type="string", format="date", description="start date of the course", readOnly="true"),
 * @OA\Property(property="end_date", type="string", format="date", description="end date of the course", readOnly="true"),
 * @OA\Property(property="is_active", type="boolean", readOnly="true", description="Course is active"),
 * @OA\Property(property="created_by", type="integer", readOnly="true", description="Course created user id", example="5"),
 * @OA\Property(property="created_at", type="string", format="date-time", description="Initial creation timestamp", readOnly="true"),
 * @OA\Property(property="updated_at", type="string", format="date-time", description="Last update timestamp", readOnly="true"),
 * )
 *
 * Class Course
 *
 */


class Course extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'courses';

    protected $fillable = ['title', 'description', 'credits', 'start_date', 'end_date', 'created_by'];

    protected $guarded=['id'];

    protected $hidden = ['pivot'];

    protected $filters = CourseFilter::class;

    protected $perPage = 10;

    public function created_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class,'employee_courses',
            'course_id','employee_id')->withTimestamps();
    }

}
