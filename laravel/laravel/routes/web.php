<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //add the ControllerNameSpace
use App\Http\Controllers\UserController; //add the ControllerNameSpace
 
// Route::get('/', function () {
//     return view('welcome');
// });
 
// Route::resource("/student", StudentController::class);
Route::resource("/user", UserController::class);