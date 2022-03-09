<?php

namespace App\Models;
use App\Http\UserController;
use App\Http\TeacherController;
use App\Http\StudentController;
use App\Models\std_brg_course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class designation extends Model
{
    use HasFactory;
    protected $table = 'users';
   
}
