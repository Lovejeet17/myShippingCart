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

    public static function deleteProduct($id)
    {
        try
        {
            Products::where('id', $id)->delete();

            return true;
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage() . " " . $e->getFile() . $e->getLine());
            \Log::info($e->getMessage() . " " . $e->getFile() . $e->getFile() . " ~ " . $e->getTraceAsString());

            return false;
        }
    }

    public static function editProduct($data)
    {
        try{
            Products::where('id', $data['prod_id'])
                ->update([
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