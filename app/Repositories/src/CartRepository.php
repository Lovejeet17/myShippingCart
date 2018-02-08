<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 08-02-2018
 * Time: 23:53
 */

namespace App\Repositories\Src;


use App\Model\Cart;
use App\Repositories\Src\Eloquent\Repository;

class CartRepository extends Repository
{
    function model()
    {
        return Cart::class;
    }
}