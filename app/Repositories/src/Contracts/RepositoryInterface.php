<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 07-02-2018
 * Time: 23:56
 */

namespace App\Repositories\Src\Contracts;


interface RepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function create(array $data);

    public function insert(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function remove($id);

    public function find($id, $columns = ['*']);

    public function findBy($attribute, $value, $columns = ['*']);

    public function countBy($attribute, $value);
}