<?php

namespace App\Http\Controllers;

use App\Catagories;
use App\customers;
use App\Product;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index()
    {
        $datas=Product::with('category')->get();
        $customer=customers::get();
        $categories=Catagories::get();
        return view('pos.pos',compact('datas','customer','categories'));
    }
}
