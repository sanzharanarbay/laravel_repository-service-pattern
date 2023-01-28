<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.01.2023
 * Time: 17:03
 */

namespace App\Repositories\API;


use App\Models\Course;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class CourseRepository extends BaseRepository
{

    public function __construct(Course $model)
    {
        parent::__construct($model);
    }

    public function getCoursesWithCreatedUser($courseId){
        return $this->getModel()->newQuery()->with(['created_user', 'employees'])
            ->findOrFail($courseId);
    }

}
