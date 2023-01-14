<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.01.2023
 * Time: 18:22
 */

namespace App\Repositories\API;


use App\Interfaces\DepartmentRepositoryInterface;
use App\Models\Department;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    public function getAllDepartments(){
        return Department::all();
    }
    public function getDepartmentById($departmentID){
        return Department::findOrFail($departmentID);
    }
    public function deleteDepartment($departmentID){
        Department::destroy($departmentID);
    }
    public function createDepartment(array $details){
        return Department::create($details);
    }
    public function updateDepartment($departmentID, array $newDetails){
        return Department::where('id', $departmentID)->update($newDetails);
    }
}
