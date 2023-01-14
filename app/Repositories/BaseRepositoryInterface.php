<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.01.2023
 * Time: 18:38
 */

namespace App\Repositories;


interface BaseRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(array $data, $id);
    public function find($id);
    public function delete($id);
}
