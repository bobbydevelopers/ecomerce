<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Product;



use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

     public function index()
     {
        $product = product::all();
        return view('home.homepage',['product'=>$product]);
     }

     public function product_details($id)
     {
        $product = product::find($id);
        return view('home.product_details',['product'=>$product]);
     }



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



}
