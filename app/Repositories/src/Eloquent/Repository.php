<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 08-02-2018
 * Time: 0:24
 */

namespace App\Repositories\Src\Eloquent;


use App\Repositories\Src\Contracts\RepositoryInterface;
use Illuminate\Container\Container as App;

abstract  class Repository implements RepositoryInterface
{

    private $model;

    public function __construct(App $model)
    {
        $this->model = $model;
    }

    abstract function model();

    public function getAll($columns = ['*'])
    {
        return $this->model->get($columns);
    }

    public function getById($id)
    {
        return $this->model->get('id', $id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function insert(array $data)
    {
        return $this->model->insert($data);
    }

    public function update(array $data, $id, $attribute='id')
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = ['*'])
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    public function count($attribute, $value)
    {
        return $this->model->where($attribute, $value)->count();
    }

}