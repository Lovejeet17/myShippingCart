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

    public function createProduct(Request $request)
    {
        try
        {
            $input = $request->only(['prod_name', 'prod_price']);

            $success = ProductLib::createProduct($input);

            if($success):
                Session::flash('successMsg', 'Product Successfully created.');
            else:
                Session::flash('errorMsg', 'Product Not created.');
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
            $delete = ProductLib::deleteProduct($id);

            if($delete):
                Session::flash('successMsg', 'Product Successfully deleted');
            else:
                Session::flash('errorMsg', 'Product Not deleted');
            endif;

            return \Redirect::back();
        }
        catch (\Exception $e)
        {
            \Log::error($e->getMessage());

            return false;
        }
    }

    public function editProduct(Request $request)
    {
        try
        {
            $input = $request->only(['prod_id', 'prod_name', 'prod_price']);

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
