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
            'address' => 'required',
            'phone' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',

        ]);


        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/employee/';
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
        $employees->address= $request->address;
        $employees->experience= $request->experience;
        $employees->nid= $request->nid;
        $employees->salary= $request->salary;
        $employees->vacation= $request->vacation;
        $employees->city= $request->city;
        $employees->image= $last_img;
        $employees->save();
        return view('home');

    }

    public function show()
    {
        $all_employee=employees::all();
        return view('all-employee',compact('all_employee'));
    }

    public function view($di)
    {
        $data=employees::find($di);
        return view('view-employee',compact('data'));
    }

    public function edit($id)
    {
        $data=employees::find($id);
        return view('edit-employee',compact('data'));
    }

    public function delete($id)
    {
        $data=employees::find($id);
        $old_image=$data->image;
        unlink($old_image);
        employees::find($id)->delete();
        return redirect()->back();
        //return response()->json($data);
        //dd($id);
        //return view('view',compact('data'));
        //return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $validateData=$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required',
            'phone' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $old_image=$request->old_image;


        $e_image=$request->file('image');
        $name_gen=hexdec(uniqid());
        $img_ext=strtolower($e_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $img_location='image/employee/';
        $last_img=$img_location.$img_name;
        $e_image->move($img_location,$img_name);
        unlink($old_image);

        employees::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'vacation' => $request->vacation,
            'city' => $request->city,
            'nid' => $request->nid,
            'image' => $last_img ,

        ]);

        return redirect()->route('view.employee');
    }

}
