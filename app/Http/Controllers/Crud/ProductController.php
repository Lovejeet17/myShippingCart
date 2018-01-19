<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\ProductLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $layout = 'layouts.default';

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

            return view($this->layout, ['content' => view('create_product', ['msg' => $msg])]);
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage());

            return false;
        }
    }

    public function deleteProduct($id)
    {
        try
        {
            ProductLib::deleteProduct($id);

            return \Redirect::back();
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage());

            return false;
        }
    }

    public function editProduct()
    {
        try
        {
            $input = Input::all();

            $update = ProductLib::editProduct($input);

            if($update):
                Session::flash('successMsg', 'Product Successfully updated');
            else:
                Session::flash('errorMsg', 'Product Not updated');
            endif;

            return \Redirect::back();
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage());

            return false;
        }
    }
}
