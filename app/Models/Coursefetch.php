<?php

namespace App\Models;
use App\Http\UserController;
use App\Http\TeacherController;
use App\Http\StudentController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursefetch extends Model
{
    use HasFactory; 

    protected $table = 'courses';
}
