<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.01.2023
 * Time: 18:25
 */

namespace App\Repositories\API;


use App\Interfaces\PositionRepositoryInterface;
use App\Models\Position;

class PositionRepository implements PositionRepositoryInterface
{
    public function getAllPositions($inputs){
        return Position::filter($inputs)->paginate();
    }
    public function getPositionById($position_id){
        return Position::findOrFail($position_id);
    }
    public function deletePosition($position_id){
        Position::destroy($position_id);
    }
    public function createPosition(array $details){
        return Position::create($details);
    }
    public function updatePosition($position_id, array $newDetails){
        return Position::where('id', $position_id)->update($newDetails);
    }
}
