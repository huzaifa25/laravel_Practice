<?php

namespace App\Http\Controllers;
use App\Models\designation;
use App\Models\post;
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
        return designation::select('id', 'email' ,'user_name','designations.designation')->where('designation_id','=','1')->getall ;
        }
        // if(request('field')== 'adminitrator'){
        //     $ad = designation::select('id', 'email' , 'user_name' , 'designation_id')->where('designation_id', '=', '1')->get();
        //     return view("displayadmin")->with(['ad' => $ad]);
        // }
        // elseif (request('field')== 'Teacher') {
        //     $ad = designation::select('id', 'email' , 'user_name' , 'designation_id')->where('designation_id', '=', '2')->get();
        //     return view("displayadmin")->with(['ad' => $ad]);
        // }
        // elseif (request('field') == 'Student') {
        //     $ad = designation::select('id', 'email' , 'user_name' , 'designation_id')->where('designation_id', '=', '3')->get();
        //     return view("displayadmin")->with(['ad' => $ad]);
        // }
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
