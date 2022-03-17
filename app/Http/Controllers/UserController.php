<?php
namespace App\Http\Controllers;
use App\Models\Coursefetch;
use App\Models\designation;
use App\Models\std_brg_course;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
  // function test()
  // { 
  //   return DB::select("select * from courses");
  // }

  public function showPost()
  {
    $desig = post::all();
    $data = Coursefetch::all();
    return view("signup")->with(['desig' => $desig, 'data' => $data]);
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
          'designation'=>'required'
      ]);
      $new_user = new designation();
      $new_user->user_name = request('uname');
      $new_user->email = request('mail');
      $new_user->password = hash::make(request('psw'));
      $new_user->designation_id = request('designation');
      $new_user->save();
      if(request('designation') == '3'){
        foreach(request('course_ids') as $course_id) {
          $new_std = new std_brg_course();
          $new_std->std_id = $new_user->id;
          $new_std->course_id = $course_id;
          $new_std->save();
        }
      }

      return redirect('signup')->with('Entry has been made');
  }
}
?>