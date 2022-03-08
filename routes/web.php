<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Login;

//use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  Route::get('users',[UserController::class,'index']);
// Route::get('signup', function(){
//     return view('signup');
// });
//Route::get ('user',[UserController::class,'test']);
Route::get ('signup',[UserController::class,'display']);
Route::post ('signup',[UserController::class,'desg']);
Route::get('signup', [UserController::class,'index']);
//working for login
//Route::view('admin','admin');
//admin 

Route::get('login', [Login::class,'show']);
Route::post("login",[Login::class,'userLogin'])->name('login'); //path for controller with post request
//
// Route::post("login",[Login::class,'userLogin']);
//show admin 
Route::get('admin',function(){
    return view('admin');
})->middleware(['disable_back','auth']);
/////check///
//
// Route::group(['middleware'=>'disable_back'],function(){
//     Route::group(['middleware'=>'auth'],function(){
//         Route::get('admin',function(){
//             return view('admin');
//         });
//     });
// });
//
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function(){
//     return view('admin');
// })->name('admin');
// ////check end////
//logout functionality
Route::post("logout",[Login::class,'logout']);

//login functionality////
// Route::get('login', function () {
//     if(session()->has('user ')){
//         return redirect('admin');
//     }
//     return view('login');
// });

////
//Route::get('signup',[UserController::class,'desg']);
//Route::post('signup',[UserController::class,'insertuser']);

Route::get('/', function () {
    return view('post');
});

// Route::get('article/{wildcard}', function ($slug) { 
//     // find a post by its slug and pass it to a view called "post"
//     $post = Post::find($slug);
    
//     return view('post',[ 'post' => $spot ]);

//     //  $path = __DIR__ . "/../resources/posts/{$slug}.html";
//     //   //ddd($path);
//     //  if(! file_exists( __DIR__ . "/../resources/posts/{$slug}.html")){
//     //      dd('file does not exist');
//     //  }

//     // $post= cache()->remember ("post.{$slug}", 5, function() use ($path){
//     //     var_dump('file_get_contents');
//     //     return file_get_contents($path);
//     // });ntntjnnjjjnjnjn


//     //  //$post = file_get_contents($path);
//     // return view('article',['post' => $post ]);
// }) -> where('wildcard','[A-z -]+');

//Route::get("user/{id}",[UserController::class,'show']);