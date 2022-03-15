<?php

namespace App\Models;
use App\Http\UserController;
use App\Http\TeacherController;
use App\Http\StudentController;
use App\Models\std_brg_course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class designation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'users';
    public $timestamps=false;
    public function getStd(){
        return $this->hasMany('App\Models\std_brg_course');
        //return $this->hasMany(std_brg_course::class);
    }
}
