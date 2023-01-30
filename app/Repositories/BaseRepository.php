<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.01.2023
 * Time: 18:38
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        $record = $this->find($id);
        return $record->delete($id);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function updateOrCreate(array $condition, array $data){
        return $this->model->updateOrCreate($condition, $data);
    }

}
