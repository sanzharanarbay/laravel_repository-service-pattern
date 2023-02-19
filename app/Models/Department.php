<?php

namespace App\Models;

use App\Http\Filters\API\Department\DepartmentFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'departments';

    protected $fillable = ['label', 'code'];

    protected $guarded=['id'];

    protected $filters = DepartmentFilter::class;

    protected $perPage = 10;

}
