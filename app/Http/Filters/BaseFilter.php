<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.01.2023
 * Time: 21:59
 */

namespace App\Http\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


abstract class BaseFilter implements FilterInterface
{
    /**
     * Eloquent Builder.
     *
     * @var Builder
     */
    protected $builder;

    /**
     * Http Request.
     *
     * @var Request
     */
    protected $request;

    /**
     * BaseFilter Constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Apply filter.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return Builder
     */
    public function apply(Builder $builder)
    {
        $this->before($builder);
        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter) && isset($value)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    protected function before(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Get all filters from request.
     *
     * @return array
     */
    public function filters()
    {
        return $this->request->all();
    }
}
