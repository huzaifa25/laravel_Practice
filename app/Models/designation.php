<?php

namespace App\Models;
use App\Http\UserController;
use App\Http\TeacherController;
use App\Http\StudentController;
use App\Models\std_brg_course;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class designation extends Model
{   
    use SoftDeletes;
    use HasFactory;
    protected $table = 'users';
    
  //  public $timestamps=false;
    // public function getall(){
    //     //return $this->hasone('App\Models\post');
    //     //return $this->hasMany(std_brg_course::class);
    // }
}
