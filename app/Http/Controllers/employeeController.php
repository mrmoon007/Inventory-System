<?php

namespace App\Http\Controllers;

use App\employees;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('add-employee');
    }

    public function create(Request $request)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',

        ]);

       // dd($validateData);

        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/employee';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);

        // $employee=employees::insert([
        //     'name' => $request->name,
        //     'email' => $request->name,
        //     'phone' => $request->name,
        //     'experience' => $request->name,
        //     'salary' => $request->name,
        //     'vacation' => $request->name,
        //     'city' => $request->name,
        //     'nid' => $request->name,
        //     'image' => $last_img,
        // ]);

        $employees= new employees;
        $employees->name= $request->name;
        $employees->email= $request->email;
        $employees->phone= $request->phone;
        $employees->experience= $request->experience;
        $employees->nid= $request->nid;
        $employees->salary= $request->salary;
        $employees->vacation= $request->vacation;
        $employees->city= $request->city;
        $employees->image= $last_img;
        $employees->save();
        return view('home');

    }
}
