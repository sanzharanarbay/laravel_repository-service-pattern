<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.02.2023
 * Time: 15:43
 */

namespace App\Repositories\API;


use App\Models\Employee;
use App\Repositories\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    public function __construct(Employee $model)
    {
        parent::__construct($model);
    }

    public function searchEmployeesWithQueryParams($inputs){
        $employees = Employee::filter($inputs)->with(['position', 'department', 'courses'])->paginate();
        return $employees;
    }

    public function getEmployeeWithRelations($employeeId){
        return $this->getModel()->newQuery()->with(['position', 'department', 'courses'])
            ->findOrFail($employeeId);
    }


}
