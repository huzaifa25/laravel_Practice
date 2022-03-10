<?php

namespace App\Models;

use App\Http\UserController;
use App\Http\TeacherController;
use App\Http\StudentController;
use App\Models\designation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_brg_course extends Model
{
    use HasFactory;
    protected $table = 'std_brg_courses';
    
    // public function users(){
    //     return $this->hasMany(designation::class);
    // }
}
