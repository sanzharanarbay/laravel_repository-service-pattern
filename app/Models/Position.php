<?php

namespace App\Models;

use App\Http\Filters\API\Position\PositionFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    use Filterable;


    protected $table = 'positions';

    protected $fillable = ['label', 'slug'];

    protected $guarded=['id'];

    protected $filters = PositionFilter::class;

    protected $perPage = 10;

}
