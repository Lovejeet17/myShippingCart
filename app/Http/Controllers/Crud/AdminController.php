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
}
