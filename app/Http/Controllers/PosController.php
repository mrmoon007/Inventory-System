<?php

namespace App\Http\Controllers;

use App\Catagories;
use App\customers;
use App\Product;
use Illuminate\Http\Request;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Cart;



class PosController extends Controller
{
    public function index()
    {
        $datas=Product::with('category')->get();
        $customer=customers::get();
        $categories=Catagories::get();
        return view('pos.pos',compact('datas','customer','categories'));
    }

    public function addCart(Request $request)
    {
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['qty']=$request->qty;
        $data['price']=$request->price;
        $data['weight']=$request->weight;

        $cartProduct=Cart::add($data);
        // echo "<pre>";
        // print_r($data);
        return redirect()->back();
    }

    public function updateCart(Request $request,$rowId)
    {
       // $data=array();
        $qty=$request->qty;
       

        Cart::update($rowId, $qty); 
        // echo "<pre>";
        // print_r($data);
        return redirect()->back();
    }

    public function deleteCart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
}
