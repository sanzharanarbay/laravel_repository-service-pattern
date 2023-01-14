<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.01.2023
 * Time: 18:20
 */

namespace App\Interfaces;


interface DepartmentRepositoryInterface
{
    public function getAllDepartments();
    public function getDepartmentById($departmentID);
    public function deleteDepartment($departmentID);
    public function createDepartment(array $details);
    public function updateDepartment($departmentID, array $newDetails);
}
