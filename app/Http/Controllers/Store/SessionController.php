<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function setSessionData(Request $request, $data)
    {
        $request->session()->put('email', $data);

        return redirect('home');
    }
}
