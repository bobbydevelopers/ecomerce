<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;



class AdminController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('admin.category',['category'=>$category]);
    }

    public function addcategory(Request $request)
    {
        $category = new Category();
        $category->category_title = $request->category_title;
        $data = $category->save();
        if($data)
        {
            echo "Category Added Succesfully";
        }
        return redirect()->back();

    }
    
    public function delete($id)
    {
        $data = category::find($id);
        $data->delete();
        if($data)
        {
            echo "Category Deleted Succesfully";
        }
        return redirect()->back();
     
    }


    public function view_product()
    {
        $category = category::all();
        return view('admin.product',['category'=>$category]);
    }

    
    public function add_product(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image = $imagename;

        $product->discount = $request->discount;

        $data = $product->save();

        if($data)
        {
            echo "Product Added Succesfully";
        }
        return redirect()->back();

    }

}
