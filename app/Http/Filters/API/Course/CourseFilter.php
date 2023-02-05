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

    public function credits_gte($value)
    {
        return $this->builder->where('credits', '>=', $value);
    }

    public function credits_lte($value)
    {
        return $this->builder->where('credits', '<=', $value);
    }

    public function start_date($value)
    {
        return $this->builder->where('start_date', '>=', $value);
    }

    public function end_date($value)
    {
        return $this->builder->where('end_date', '<=', $value);
    }

    public function is_active($value)
    {
        return $this->builder->where('is_active', '=', $value);
    }

    public function created_by($value)
    {
        return $this->builder->where('created_by', '=', $value);
    }

}
