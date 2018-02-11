<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\CartLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    protected $layout = 'layouts.default';

    public function __construct()
    {
        parent::__construct();
    }

    public function addToCart(Request $request, $id)
    {
        if($request->ajax()):
            $input = $request->all();

            $currentQty = CartLib::checkIfExist($input, $id);

            if($currentQty == null):
                CartLib::addToCart($input, $id);
            else:
                CartLib::updateQty($input, $id, $currentQty + 1);
            endif;
        endif;
    }

    public function viewCart(Request $request)
    {
        $user = $request->session()->get('email');

        return view($this->layout, ['content' => view('Shop/cart')]);
    }

    public function removeFromCart()
    {

    }
}
