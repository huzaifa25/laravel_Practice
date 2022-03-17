<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designation;
use App\Models\post;
use Illuminate\Support\Facades\DB;
//

use Illuminate\Support\Facades\Auth;
class Login extends Controller
{    

    public function show()
    {
        $desig = post::all();
        return view('/login')->with(['desig' => $desig]);
    }
   
    // function userLogin(Request $req){
    //    $data= $req->input('admin_email');
    //    $req->session()->put('user',$data);
    //    return redirect('admin');
    // }

     function userLogin(Request $req)
     {
        $credentials = [
            'email' => $req->admin_email,
            'password' => $req->admin_psw,
            'designation_id' => $req -> designation
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if(request('designation') == '1'){
                return redirect()->intended('admin');
            } 
            elseif(request('designation') == '2'){
                return redirect()->intended('teacher');
            } 
            elseif(request('designation') == '3'){
                return redirect()->intended('student');
            }
        }   
    }

   

    //     $user  =  designation::where("email", $req->admin_email)
    //     ->where('password',$req->admin_psw)
    //     ->first();
    //     //  return redirect('/admin');
    //    // ->where('designation', $req->designation);
       
    //   if ($user) {
    //     $info = $req->input('email');
    //     $req->session()->put('email', $info); 
    //     return redirect('admin');
    //    }
   // }   

//     public function logout(Request $request)
// {
    
//     Auth::logout();
    
//     $request->session()->invalidate();
    
//     $request->session()->regenerateToken();
 
//     return redirect('login');
// }
}

