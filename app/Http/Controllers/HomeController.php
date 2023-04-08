<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == 1)
        {
            return view('admin.home');
        }

        else
        {
            return view('admin.home');
        }
    }


    public function addcategory(Request $request)
    {

        return view('admin.category');
    }
}
