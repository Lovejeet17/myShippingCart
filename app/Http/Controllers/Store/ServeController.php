<?php

namespace App\Http\Controllers\Store;

use App\Http\Lib\Store\ServeLib;
use App\Http\Lib\Store\StoreLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServeController extends Controller
{
    protected $layout = 'layouts.default';

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $products = StoreLib::getProducts();

        return view($this->layout, ['content' => view('home', ['products' => $products])]);
    }

    public function toLogin()
    {
        return view($this->layout, ['content' => view('login')]);
    }

    public function toSignup()
    {
        return view($this->layout, ['content' => view('User/signup')]);
    }

    public function signup(Request $request)
    {
        $input = $request->all();

        ServeLib::signup($input);

        return redirect('home');
    }
}
