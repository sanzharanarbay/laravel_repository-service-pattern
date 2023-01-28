<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['title', 'description', 'credits', 'start_date', 'end_date', 'created_by'];

    protected $guarded=['id'];

    public function created_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function employees(){
        return $this->belongsToMany(Employee::class,'employee_courses',
            'course_id','employee_id')->withTimestamps();
    }

}
