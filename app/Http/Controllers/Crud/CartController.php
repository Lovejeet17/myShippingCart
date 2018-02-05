<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\CartLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addToCart(Request $request, $id)
    {
        if($request->ajax()):
            $input = $request->all();
            CartLib::addToCart($input, $id);
        endif;
    }

    public function removeFromCart()
    {

    }
}
