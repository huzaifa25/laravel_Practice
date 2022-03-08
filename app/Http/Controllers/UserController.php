<?php
namespace App\Http\Controllers;
use App\Models\Coursefetch;
use App\Models\designation;
use App\Models\std_brg_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  // function test()
  // { 
  //   return DB::select("select * from courses");
  // }
  
  public function index(){
        $data = Coursefetch::all();
        return view("signup")->with(['data' => $data]);
  }

  public function display()
  {
    return view("signup");
  }
  public function desg(Request $request)
  {
      $this->validate($request,[
          'uname'=>'required',
          'mail'=>'required',
          'psw'=>'required|same:confirmpsw',
          'designation'=>'required|in:admin,teacher,student'
      ]);
      $new_user = new designation();
      $new_user->user_name = request('uname');
      $new_user->email = request('mail');
      $new_user->password = request('psw');
      $new_user->designation = request('designation');
      $new_user->save();
      if(request('designation') == 'student'){
        foreach(request('course_ids') as $course_id) {
          $new_std = new std_brg_course();
          $new_std->std_id = $new_user->id;
          $new_std->course_id = $course_id;
          $new_std->save();
        }
      }

      return redirect('signup')->with('Entry has been made');
      // return back()->with('success','Item created successfully!');
  }


//  function signup(){

//  }
}
?>