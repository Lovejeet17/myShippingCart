<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\ProductLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function createProduct()
    {
        try
        {
            $input = Input::all();

            $success = ProductLib::createProduct($input);

            if($success):
                $msg = "Product ". $input['prod_name'] ." created successfully.";
            else:
                $msg = "Product not created";
            endif;

            return view('create_product', ['msg' => $msg]);
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage());

            return false;
        }
    }
}
