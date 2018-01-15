<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\AdminLib;
use App\Model\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function createProduct()
    {
        $input = Input::all();

        $update = AdminLib::createProduct($input);

        if($update):
            $msg = "Product ". $input['prod_name'] ." created successfully.";
        else:
            $msg = "Product not created";
        endif;

        return view('create_product', ['msg' => $msg]);

    }
}
