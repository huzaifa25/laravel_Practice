<?php

namespace App\Http\Controllers;

use App\Models\Coursefetch;
use App\Models\designation;
use App\Models\std_brg_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//

use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    function StdShow()
    {
        return view('student');
    }
    function studentData()
    {   
     
        
    }
}
