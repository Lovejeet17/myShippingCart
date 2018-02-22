<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 15-01-2018
 * Time: 21:43
 */

namespace App\Http\Lib\Crud;


use App\Model\Products;
use App\Model\Users;

class AdminLib
{
    public static function getProducts()
    {
        $products = Products::OrderBy('name', 'asc')->get(['id','name', 'price']);

        return $products;
    }

    public static function login($input)
    {
        try
        {
            $user = Users::where('email', $input['user_email'])
                ->where('password', $input['user_pwd'])
                ->where('type', $input['user_type'])
                ->first();

            if($user !== null):

                session()->put('adminEmail', $input['user_email']);

            endif;

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