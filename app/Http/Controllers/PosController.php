<?php

namespace App\Http\Controllers;

use App\Catagories;
use App\customers;
use App\Product;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Cart;
use PDF;
use Illuminate\Auth\Recaller;

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
       //return $rowId;

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

    public function invoice(Request $request)
    {
        $validatedData = $request->validate([
            'cust_id' => ['required'],
            
        ],
        [
            'cust_id.required'=>'Select A Customer First!!'
        ]);

        $cust_id=$request->cust_id;
        $customer=customers::find($cust_id);
        $content=Cart::content();

        return view('invoice',compact('customer','content'));
    }

    public function createPDF($id) {
        ini_set('max_execution_time', 300);
        
        $cust_id=$id;
        $customer=customers::find($cust_id)->first();
        $content=Cart::content();
        // share data to view
        view()->share('invoice',compact('customer','content'));
        $pdf = PDF::loadView('invoicePdf', compact('customer','content'));
  
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
      }
}
