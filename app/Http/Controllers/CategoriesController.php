<?php

namespace App\Http\Controllers;

use App\Catagories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function addCategory()
    {
         return view('categories.add_category');
        
    }

    public function createCategory(Request $request)
    {

        //return $request->all();
        // $validateData=$request->validate([
        //     'cate_name' => 'required|string|max:255',
            
        // ]);

        // return $validateData;


        // $validateData=$request->validate([
        //     'cate_name' => 'required|string|unique:Catagories|max:255',
        // ]);
        // return $request->all();
        // $emp=Catagories::insert([
        //     'cate_name' => $request->name,
            
        // ]);
        $category= new Catagories();
        $category->cate_name=$request->name;
        $category->save();

        return redirect()->back();
        //return "created successfully";
    }

    public function allCategory()
    {
        $all_category=Catagories::paginate(10);
        //return $all_category;
        return view('categories.all_category')->with('all_category',$all_category );
    }

    public function edit($id){
        $data=Catagories::find($id);
        return view('categories.edit_category',compact('data'));
    }

    public function update(Request $request,$id){
        Catagories::find($id)->update([
            'cate_name' => $request->name,
        ]);

        return redirect()->route('all.category');
    }

    public function delete($id){

        $data=Catagories::find($id);
        Catagories::find($id)->delete();
        return redirect()->back();

    }

}
