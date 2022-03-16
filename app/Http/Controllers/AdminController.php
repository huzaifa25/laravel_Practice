<?php

namespace App\Http\Controllers;
use App\Models\designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminController extends Controller
{
    // public function ShowDisplayAdimn()
    // {
    //     return view('displayadmin');
    // }

    public function viewAll(Request $req)
    {
        
        if(request('field')== 'adminitrator'){
            $ad = designation::select('id', 'email' , 'user_name' , 'designation')->where('designation', '=', 'admin')->get();
            return view("displayadmin")->with(['ad' => $ad]);
        }
        elseif (request('field')== 'Teacher') {
            $ad = designation::select('id', 'email' , 'user_name' , 'designation')->where('designation', '=', 'teacher')->get();
            return view("displayadmin")->with(['ad' => $ad]);
        }
        elseif (request('field') == 'Student') {
            $ad = designation::select('id', 'email' , 'user_name' , 'designation')->where('designation', '=', 'student')->get();
            return view("displayadmin")->with(['ad' => $ad]);
        }
        // else{
        //     return view("displayadmin")->with("something went wrong");
        // }
    }

    public function destroy($id){
         
        $deleted = designation::find($id)->delete();
        return redirect('admin');
    }

    public function showData($id){
        $data = designation::find($id);
        return view('updatedata',['data' => $data]);

    }

    public function upDate(Request $request)
    {
        $upgrade = designation::find($request->id);
        $upgrade->user_name=$request->user_name;
        $upgrade->email=$request->email;
        $upgrade->save();
        return redirect('admin');
    }
}
