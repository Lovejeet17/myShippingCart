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

    public function login(Request $request)
    {
        $input = $request->all();

        Log::info($input);

        $user = ServeLib::login($input);

        if($user !== null):
//            call('session/set/'.$input['user_email']);

            $url = url('session/set');
            Log::info($url);

//            return redirect()->route('session/set/'.$input['user_email']);
            return redirect()->route($url);

//            return redirect()->url('session/set/'.$input['user_email']);
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
}
