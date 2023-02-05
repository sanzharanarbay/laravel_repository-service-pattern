<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.02.2023
 * Time: 17:26
 */

namespace App\Http\Filters\API\Employee;


use App\Http\Filters\BaseFilter;

class EmployeeFilter extends BaseFilter
{
    public function full_name($value)
    {
        return $this->builder->where('full_name', 'like',  "%{$value}%");
    }

    public function address($value)
    {
        return $this->builder->where('address', 'like',  "%{$value}%");
    }

    public function phone_number($value)
    {
        return $this->builder->where('phone_number', 'like',  "%{$value}%");
    }

    public function position_id($value)
    {
        return $this->builder->where('position_id', '=', $value);
    }

    public function department_id($value)
    {
        return $this->builder->where('department_id', '=', $value);
    }

    public function is_active($value)
    {
        return $this->builder->where('is_active', '=', $value);
    }

    public function age_gte($value)
    {
        return $this->builder->where('age', '>=', $value);
    }

    public function age_lte($value)
    {
        return $this->builder->where('age', '<=', $value);
    }
}
