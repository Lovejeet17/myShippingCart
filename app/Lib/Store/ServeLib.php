<?php
/**
 * Created by PhpStorm.
 * User: Lovejeet17LS
 * Date: 23-01-2018
 * Time: 0:40
 */

namespace App\Http\Lib\Store;



use App\Model\Users;

class ServeLib
{
    public static function signup($input)
    {
        try
        {
            Users::create([
                'name'      => $input['user_name'],
                'email'     => $input['user_email'],
                'password'  => $input['user_pwd'],
                'type'      => $input['user_type']
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

    public static function login($input)
    {
        try
        {
            $user = Users::where('email', $input['user_email'])
                ->where('password', $input['user_pwd'])
                ->where('type', $input['user_type'])
                ->first();

            if($user !== null):

                session()->put('email', $input['user_email']);

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