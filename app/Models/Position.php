<?php

namespace App\Models;

use App\Http\Filters\API\Position\PositionFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 * @OA\Xml(name="Position"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="label", type="string", readOnly="true", description="Position label"),
 * @OA\Property(property="slug", type="string", readOnly="true", description="Position slug", example="dev"),
 * @OA\Property(property="created_at", type="string", format="date-time", description="Initial creation timestamp", readOnly="true"),
 * @OA\Property(property="updated_at", type="string", format="date-time", description="Last update timestamp", readOnly="true")
 * )
 *
 * Class Position
 *
 */


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
