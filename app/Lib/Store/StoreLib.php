<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 15-01-2018
 * Time: 23:28
 */

namespace App\Http\Lib\Store;


use App\Model\Products;
use App\Model\Users;
use Illuminate\Support\Facades\Log;

class StoreLib
{
    public static function getProducts()
    {
        try
        {
            $products = Products::OrderBy('name', 'asc')->get(['id','name', 'price']);

            return $products;
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage() . " " . $e->getFile() . $e->getLine());
            \Log::info($e->getMessage() . " " . $e->getFile() . $e->getFile() . " ~ " . $e->getTraceAsString());

            return false;
        }
    }

    public static function getUserIdByEmail($email)
    {
        try
        {
            $user = Users::where('email', $email)->first(['id','name']);

            return $user;
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage() . " " . $e->getFile() . $e->getLine());
            \Log::info($e->getMessage() . " " . $e->getFile() . $e->getFile() . " ~ " . $e->getTraceAsString());

            return false;
        }
    }
}