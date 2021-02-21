<?php

namespace App\Http\Controllers;

use App\attendance;
use App\employees;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
            $notification=array(
                'message'=>'Attendance already taken',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
        else{

            foreach($request->user_id as $id)
            {
                $data[]=[
                    'user_id'=>$id,
                    'attendance'=>$request->attendance[$id],
                    'att_date'=>$request->att_date,
                    'att_year'=>$request->att_year,
                    'edit_data'=>date('d-m-y'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
            }
            $value=attendance::insert($data);

            $notification=array(
                'message'=>'input filled is requered',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

           // return redirect()->back();
        }



    }

    public function allAttendance(){
        //$all_atten=attendance::groupBy('edit_data')->get();
         $all_atten=DB::table('attendances')->select('edit_data')->groupBy('edit_data')->get();
        // $all_atten=DB::table('attendance')->select('edit_date')
        return view('attendance.all_attendance',compact('all_atten'));
    }

    public function edit($edit)
    {
        $att_date=attendance::where('att_date', $edit)->first();
        $data=attendance::with('employee')->where('edit_data', $edit)->get();

         return view('attendance\edit_attendance',compact('data','att_date'));
    }

    public function update_attendance(Request $request)
    {
        foreach($request->id as $id)
            {
                $data=[
                    'attendance'=>$request->attendance[$id],
                ];

                $att_date=attendance::where(['att_date'=>$request->att_date, 'id'=>$id])->first();
                $att_date->update($data);
            }

        return redirect()->route('all.attendance');
    }
}
