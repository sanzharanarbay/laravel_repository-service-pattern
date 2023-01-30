<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.01.2023
 * Time: 21:58
 */

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter(Builder $query)
    {
        if (!class_exists($this->filters)) {
            throw new \Exception('Filter Class ' . $this->filters . ' does not exist.');
        }

        return app()->make($this->filters)->apply($query);
    }
}
