<?php

namespace App\Http\Controllers\Crud;

use App\Http\Lib\Crud\AdminLib;
use App\Model\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    protected $layout = 'layouts.default';
    protected $admin_layout = 'layouts.admin';

    public function __construct()
    {
        $this->middleware('checkAdminlogin', [
            'except' => [
                'adminLogin', 'login'
            ]
        ]);
    }

    public function showProdcuts()
    {
        try
        {
            $products = AdminLib::getProducts();

            return view($this->admin_layout, ['content' => view('Admin/all_products', ['products' => $products])]);
        }
        catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function adminLogin()
    {
        return view($this->admin_layout, ['content' => view('Admin/admin_login')]);
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $user = AdminLib::login($input);

        if($user !== null):

            return redirect('admin/home');

        endif;

        return Redirect::back();
    }

    public function adminHome()
    {
        return view($this->admin_layout, ['content' => view('Admin/dashboard')]);
    }

    public function adminLogout(Request $request)
    {
        if ($request->session()->exists('adminEmail')):
            $request->session()->forget('adminEmail');
            Log::info('session removed');
        else:
            Log::info('session not found');
        endif;

        return redirect()->back();
    }
}
