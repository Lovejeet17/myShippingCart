<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\CartLib;
use App\Http\Lib\Store\StoreLib;
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
        $email = $request->session()->get('email');
        $user = StoreLib::getUserIdByEmail($email);

        $products = CartLib::getProductByUser($user->id);

//        dd($products);

        return view($this->layout, ['content' => view('Shop/cart', ['products' => $products, 'user' => $user])]);
    }

    public function removeFromCart(Request $request, $id)
    {
        $email = $request->session()->get('email');
        $user = StoreLib::getUserIdByEmail($email);
    }
}
