<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 15-01-2018
 * Time: 23:28
 */

namespace App\Http\Lib\Store;


use App\Model\Products;

class StoreLib
{
    public static function getProducts()
    {
        $products = Products::OrderBy('name', 'asc')->get(['id','name', 'price']);

        return $products;
    }
}