<?php

namespace App\Models;

use App\Http\Filters\API\Employee\EmployeeFilter;
use App\Http\Filters\Filterable;
use App\Traits\Employee\HasAge;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
