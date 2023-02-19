<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.02.2023
 * Time: 16:16
 */

namespace App\Http\Filters\API\Position;


use App\Http\Filters\BaseFilter;

class PositionFilter extends BaseFilter
{
    public function label($value)
    {
        return $this->builder->where('label', 'like',  "%{$value}%");
    }

    public function slug($value)
    {
        return $this->builder->where('slug', 'like',  "%{$value}%");
    }

}
