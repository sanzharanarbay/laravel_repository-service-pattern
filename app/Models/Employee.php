<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = ['full_name', 'birth_date', 'position_id', 'department_id',
        'address', 'age', 'phone_number'];

    protected $guarded=['id'];

    protected $hidden = ['pivot'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function courses(){
        return $this->belongsToMany(Course::class,'employee_courses',
            'employee_id','course_id')->withTimestamps();
    }

}
