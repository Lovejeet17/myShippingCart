<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 05-02-2018
 * Time: 23:01
 */

namespace App\Http\Lib\Crud;


use App\Model\Cart;

class CartLib
{
    public static function addToCart($input, $user_id)
    {
        try
        {
            Cart::insert([
                'user_id'   => $user_id,
                'product_id'    => $input['id']
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