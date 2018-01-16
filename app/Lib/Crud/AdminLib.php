<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 15-01-2018
 * Time: 21:43
 */

namespace App\Http\Lib\Crud;


use App\Model\Products;

class AdminLib
{
    public static function getProducts()
    {
        $products = Products::OrderBy('name', 'asc')->get(['id','name', 'price']);

        return $products;
    }
}