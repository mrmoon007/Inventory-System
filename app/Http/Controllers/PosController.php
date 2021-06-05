<?php

namespace App\Http\Controllers;

use App\Catagories;
use App\customers;
use App\order;
use App\orderDetails;
use App\Product;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Cart;
// use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
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
        // ini_set('max_execution_time', 300);
        
        $cust_id=$id;
        $customer=customers::find($cust_id)->first();
        $content=Cart::content();
        // share data to view
        view()->share('invoice',compact('customer','content'));
        $pdf = PDF::loadView('invoicePdf', compact('customer','content'));
  
        // download PDF file with download method
        return $pdf->download('invoice.pdf');
      }

      public function finalInvoice(Request $request)
      {
          //return $request->all();
          $data=array();
          $data['customer_id']=$request->customer_id;
          $data['oder_date']=$request->order_date;
          $data['oder_status']=$request->oder_status;
          $data['total_products']=$request->total_products;
          $data['sub_total']=$request->sub_total;
          $data['vat']=$request->vat;
          $data['total']=$request->total;
          $data['payment_status']=$request->payment_status;
          $data['pay']=$request->pay;
          $data['pay']=$request->pay;
          
         $order1_id=order::insertGetId($data);
         $contents=Cart::content();

         $odata=array();
         foreach ($contents as $content) {
            
            $odata['oder_id']=$order1_id;
            $odata['product_id']=$content->id;
            $odata['qty']=$content->qty;
            $odata['unit_cost']=$content->price;
            $odata['total']=$content->total;
            $insert=orderDetails::insert($odata);
         }

        

         if($insert){
             Cart::destroy();
             return redirect()->route('home');
         }else{
             return redirect()->back();
         }
      }
}
