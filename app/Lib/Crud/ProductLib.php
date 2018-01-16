<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 16-01-2018
 * Time: 23:14
 */

namespace App\Http\Lib\Crud;


use App\Model\Products;

class ProductLib
{
    public static function createProduct($data)
    {
        try
        {
            Products::create([
                'name'  => $data['prod_name'],
                'price' => $data['prod_price']
            ]);

            return true;
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage() . " " . $e->getFile() . $e->getLine());
            \Log::info($e->getMessage() . " " . $e->getFile() . $e->getFile() . " ~ " . $e->getTraceAsString());

            return false;
        }
    }
}