<?php

namespace App\Http\Controllers;

use App\Models\Coursefetch;
use App\Models\designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//

use Illuminate\Support\Facades\Auth;
class TeacherController extends Controller
{
    function Teachershow()
    {   
        return view('/teacher');
    }


    function test()
    { 
        $std = designation::select('id', 'user_name')->where('designation', '=', 'student')->get();
        return view("teacher")->with(['std' => $std]);
    }
}
