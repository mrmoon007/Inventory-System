<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;

class customerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customer.add-customer');
    }

    public function create(Request $request)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',

        ]);


        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/customer/';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);

        $emp=customers::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'shopname' => $request->shopname,
            'account_holder' => $request->accountHolder,
            'account_number' => $request->accountNumber,
            'bank_name' => $request->bankName,
            'bank_branch' => $request->bankBranch,
            'city' => $request->name,
            'image' => $last_img,
        ]);

       return view('home');
    }

    public function show()
    {
        $all_customer=customers::all();
        return view('customer.all-customer',compact('all_customer'));
    }

    public function view($id)
    {

         $data=customers::find($id);
         //return response()->json($data);
        return view('customer.view-customer',compact('data'));
    }

    public function delete($id)
    {
        $data=customers::find($id);
        $old_image=$data->image;
        unlink($old_image);
        customers::find($id)->delete();
        return redirect()->back();

    }

    public function edit($id)
    {
        $data=customers::find($id);
        return view('customer.edit-customer',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $old_image=$request->old_image;


        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/customer/';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);
        unlink($old_image);

        customers::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'shopname' => $request->shopname,
            'account_holder' => $request->accountHolder,
            'account_number' => $request->accountNumber,
            'bank_name' => $request->bankName,
            'bank_branch' => $request->bankBranch,
            'city' => $request->city,
            'image' => $last_img,

        ]);

        return redirect()->route('all.customer');
    }

}
