<?php

namespace App\Http\Controllers;

use App\Catagories;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $all_category=Catagories::all();
        //return $all_category;
        return view('product.add_product',compact('all_category'));
    }

    public function create(Request $request)
    {
       // return $request->all();
        $validateData=$request->validate([
            'product_name' => 'required|string|max:255',
            'product_image' => 'required|mimes:jpg,png,jpeg',

        ]);


        $product_image=$request->file('product_image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($product_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/product/';
        $last_img=$img_location.$img_name;
        $product_image->move($img_location,$img_name);

        $product= new Product;
        $product->product_name= $request->product_name;
        $product->product_code= $request->product_code;
        $product->cate_id= $request->cate_id;
        $product->sup_id= $request->sup_id;
        $product->product_garage= $request->product_garage;
        $product->product_route= $request->product_route;
        $product->buy_date= $request->buy_date;
        $product->expire_date= $request->expire_date;
        $product->buying_price= $request->buying_price;
        $product->selling_price= $request->selling_price;
        $product->product_image= $last_img;
        $product->save();

         if ($product->save()) {
             $notification=array(
                 'message'=>'Product is added successfully',
                 'alert-type'=>'success'
             );

             return redirect()->back()->with($notification);
         } else {
            $notification=array(
                'message'=>'input filled is requered',
                'alert-type'=>'error'
            );
             return Redirect()->back()->with($notification);
         }
    }

    public function show()
    {
        $all_product=Product::paginate(10)->onEachSide(1);
        return view('product.all-product',compact('all_product'));
    }

    public function edit($id)
    {
        $data=Product::find($id);
        $all_category=Catagories::all();
        return view('product.edit_product',compact('data','all_category'));
    }

    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'product_name' => 'required|string|max:255',
            'product_image' => 'required|mimes:jpg,png,jpeg',

        ]);

        $old_image=$request->old_image;


        $e_image=$request->file('product_image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/product/';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);
        $old_image?'':unlink($old_image);

        Product::find($id)->update([
            'name' => $request->product_name,
            'product_code' => $request->product_code,
            'cate_id' => $request->cate_id,
            'sup_id' => $request->sup_id,
            'product_garage' => $request->product_garage,
            'product_route' => $request->product_route,
            'buy_date' => $request->buy_date,
            'expire_date' => $request->expire_date,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'image' => $last_img,

        ]);

        return redirect()->route('all.products');
    }

    public function delete($id)
    {
        $data=Product::find($id);
        $old_image=$data->product_image;
        $old_image?'':unlink($old_image);
        Product::find($id)->delete();
        return redirect()->back();
    }
}
