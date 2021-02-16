<?php

namespace App\Http\Controllers;

use App\attendance;
use App\employees;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class attendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function takeAttendance()
    {
         $data=employees::all();
         return view("attendance.take_attendance",compact('data'));
    }

    public function insertAttendance(Request $request)
    {
        // return $request->all();
        $date=$request->att_date;
        // echo $date;
        $att_date=attendance::where('att_date', $date)->first();
        // dd($att_date);
        if($att_date){
            echo "already taken";
        }
        else{

            foreach($request->user_id as $id)
            {
                $data[]=[
                    'user_id'=>$id,
                    'attendance'=>$request->attendance[$id],
                    'att_date'=>$request->att_date,
                    'att_year'=>$request->att_year,
                    'edit_data'=>date('d/m/y'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
            }
            $value=attendance::insert($data);

            return redirect()->back();
        }



    }
}
