<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 08-02-2018
 * Time: 23:51
 */

namespace App\Repositories\Src;


use App\Model\Products;
use App\Repositories\Src\Eloquent\Repository;

class ProductRepository extends Repository
{
    function model()
    {
        return Products::class;
    }
}