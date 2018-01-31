<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class SessionController extends Controller
{
    public function setSessionData(Request $request, $data)
    {
//        $request->session()->put('email', $data);
        Log::info("setSessionData func");

        dd($request);

        return redirect('home');
    }
}
