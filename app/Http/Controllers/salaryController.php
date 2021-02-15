<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salaryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addSalary(Request $request)
    {
        return view('salary.add_salary');
    }

    public function allSalary()
    {
        return view('salary.all_salary');
    }

}
