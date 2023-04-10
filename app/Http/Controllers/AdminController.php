<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;



class AdminController extends Controller
{
    public function view_category()
    {
        $category = category::all();
        return view('admin.category',['category'=>$category]);
    }

    public function add_category(Request $request)
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
    
    public function delete_category($id)
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
        return view('admin.add_product',['category'=>$category]);
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


    public function show_product()
    {
        $product = product::all();
        return view('admin.show_product',['product'=>$product]);

    }


    public function delete_product($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back();

    }


    
    public function update_product($id)
    {
        $data = product::find($id);
        $category = category::all();
        return view('admin.update_product',['data'=>$data,'category'=>$category]);
    }


    public function update_product_confirm($id,Request $request)
    {
        $product = product::find($id);
        
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->discount = $request->discount;
         
        $image = $request->image;
        if($image)
        {
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image = $imagename;
        }    
       $product->save();
        return redirect()->back();

    }





}

