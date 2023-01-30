<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.01.2023
 * Time: 22:01
 */

namespace App\Http\Filters\API\Course;


use App\Http\Filters\BaseFilter;

class CourseFilter extends BaseFilter
{
    public function title($value)
    {
        return $this->builder->where('title', 'like',  "%{$value}%");
    }

    public function description($value)
    {
        return $this->builder->where('description', 'like', "%{$value}%");
    }
}
