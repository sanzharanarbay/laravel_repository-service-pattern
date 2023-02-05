<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.02.2023
 * Time: 16:08
 */

namespace App\Traits\Employee;

use Carbon\Carbon;

trait HasAge
{
    public static function bootHasAge(): void
    {
        static::creating(function ($model) {
            $model->age = Carbon::parse($model->birth_date)->age;
        });

        static::updating(function ($model) {
            $model->age = Carbon::parse($model->birth_date)->age;
        });

    }
}
