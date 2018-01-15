<?php

namespace App\Http\Controllers\Store;

use App\Http\Lib\Store\StoreLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServeController extends Controller
{
    protected $layout = 'layouts.default';

    public function home()
    {
        $products = StoreLib::getProducts();

        return view($this->layout, ['content' => view('home', ['products' => $products])]);
    }
}
