<?php

namespace App\Http\Controllers\Store;

use App\Http\Lib\Store\ServeLib;
use App\Http\Lib\Store\StoreLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ServeController extends Controller
{
    protected $layout = 'layouts.default';

    public function __construct()
    {
        parent::__construct();
    }

    public function home(Request $request)
    {
        $user = [];

        $products = StoreLib::getProducts();

        if ($request->session()->exists('email')):
            $email = $request->session()->get('email');
            $user = StoreLib::getUserIdByEmail($email);
        endif;

        return view($this->layout, ['content' => view('home', ['products' => $products, 'user' => $user]), 'user' => $user]);
    }

    public function toLogin()
    {
        return view($this->layout, ['content' => view('login')]);
    }

    public function toSignup()
    {
        return view($this->layout, ['content' => view('User/signup')]);
    }

    public function login(Request $request)
    {
        $input = $request->all();

//        Log::info($input);

        $user = ServeLib::login($input);

        if($user !== null):

            return redirect('home');

        endif;

        return Redirect::back();
    }

    public function signup(Request $request)
    {
        $input = $request->all();

//        Log::info($input);

        ServeLib::signup($input);

        return redirect('home');
    }

    public function logout(Request $request)
    {
        if ($request->session()->exists('email')):
            $request->session()->forget('email');
            Log::info('session removed');
        else:
            Log::info('session not found');
        endif;

        return redirect()->back();
    }
}
