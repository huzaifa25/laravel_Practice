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
        return view('teacher');
    }

//     function teaLogin(Request $request)
//     {
//        $credentials = [
//            'email' => $request->teacher_email,
//            'password' => $request->tpsw
//        ];
//        if (Auth::attempt($credentials)) {
//            // Authentication passed...
//            return redirect()->intended('/teacher');
//        }
//    }

    function test()
    { 
        $std = designation::select('id', 'user_name')->where('designation', '=', 'student')->get();
        return view("teacher")->with(['std' => $std]);
    }
}
