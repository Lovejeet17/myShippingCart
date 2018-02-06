<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 05-02-2018
 * Time: 23:01
 */

namespace App\Http\Lib\Crud;


use App\Model\Cart;
use Illuminate\Support\Facades\Log;

class CartLib
{
    public static function addToCart($input, $user_id)
    {
        try
        {
            Cart::create([
                'user_id'       => $user_id,
                'product_id'    => $input['id'],
                'qty'           => 1
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

    public static function checkIfExist($input, $user_id)
    {
        try
        {
            $currentQty = Cart::where('user_id', $user_id)->where('product_id', $input['id'])->first(['qty']);

            return $currentQty['qty'];
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage() . " " . $e->getFile() . $e->getLine());
            \Log::info($e->getMessage() . " " . $e->getFile() . $e->getFile() . " ~ " . $e->getTraceAsString());

            return false;
        }
    }

    public static function updateQty($input, $user_id, $qty)
    {
        try
        {
            Cart::where('user_id', $user_id)
                ->where('product_id', $input['id'])
                ->update([
                    'qty'   => $qty
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