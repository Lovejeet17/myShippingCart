<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\AdminLib;
use App\Model\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    protected $layout = 'layouts.default';
    protected $admin_layout = 'layouts.admin';

    public function __construct()
    {
        parent::__construct();
    }

    public function showProdcuts()
    {
        try
        {
            $products = AdminLib::getProducts();

            return view($this->layout, ['content' => view('Admin/all_products', ['products' => $products])]);
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function adminLogin()
    {
        return view($this->layout, ['content' => view('Admin/admin_login')]);
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
}
