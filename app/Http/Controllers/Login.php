<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designation;
use Illuminate\Support\Facades\DB;
//

use Illuminate\Support\Facades\Auth;
class Login extends Controller
{    

    public function show()
    {
        return view('/login');
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
            'password' => $req->admin_psw
        ];
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin');
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
    }   

//     public function logout(Request $request)
// {
    
//     Auth::logout();
    
//     $request->session()->invalidate();
    
//     $request->session()->regenerateToken();
 
//     return redirect('login');
// }
}

