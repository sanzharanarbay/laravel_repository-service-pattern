<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.01.2023
 * Time: 18:24
 */

namespace App\Interfaces;


interface PositionRepositoryInterface
{
    public function getAllPositions(array $inputs);
    public function getPositionById($position_id);
    public function deletePosition($position_id);
    public function createPosition(array $details);
    public function updatePosition($position_id, array $newDetails);
}
