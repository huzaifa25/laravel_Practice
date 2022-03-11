<?php

namespace App\Http\Controllers;
use App\Models\designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function ShowDisplayAdimn()
    {
        return view('displayadmin');
    }

    public function viewAll(Request $request)
    {
        if($request->radio == 'adminitrator'){
            $ad = designation::select('id', 'email' , 'user_name')->where('designation', '=', 'admin')->get();
            return view("displayadmin")->with(['ad' => $ad]);
        }
    }
}
