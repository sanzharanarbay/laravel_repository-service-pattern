<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.02.2023
 * Time: 16:16
 */

namespace App\Http\Filters\API\Department;


use App\Http\Filters\BaseFilter;

class DepartmentFilter extends BaseFilter
{
    public function label($value)
    {
        return $this->builder->where('label', 'like',  "%{$value}%");
    }

    public function code($value)
    {
        return $this->builder->where('code', 'like',  "%{$value}%");
    }
}
