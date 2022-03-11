<?php

namespace App\Http\Controllers;

use App\Models\Coursefetch;
use App\Models\designation;
use App\Models\std_brg_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   

    function courseShow()
    {
        $crs = DB::table('users')
        ->rightjoin('std_brg_courses','users.id','=','std_brg_courses.std_id')
        ->rightjoin('courses','courses.course_id','=','std_brg_courses.course_id')
        ->select('courses.course_id','courses.course_name')
        ->where('users.id', Auth::user()->id)
        ->get();  
        $data = DB::table('users')
        ->select('id', 'email', 'user_name')
        ->where('id', Auth::user()->id)
        ->get(); 
        return view("student")->with([
            'crs' => $crs,
            'data' => $data
        ]); 
    }
    //   return DB::select("select * from courses");
}
