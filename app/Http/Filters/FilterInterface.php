<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.01.2023
 * Time: 22:15
 */

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;


interface FilterInterface
{
    public function apply(Builder $builder);
}
