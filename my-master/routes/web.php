<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
// use Illuminate\Routing\Route ;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'index');
Route::view('/contact', 'contact');
Route::view('/login', 'login');

Route::view('/property', 'property');
Route::view('/property2', 'property2f27');

Route::view('/agency', 'agency');
Route::view('/agent', 'agent');
Route::view('/becomeagent', 'becomeagent');
Route::view('/about', 'about');
Route::view('/profile/{id} ','/user/profile');



// Route::view('/register','register');
//admin dashboard routes
Route::view('/dash' , '/admin/index');
Route::view('/dash2','/admin/index-2');
Route::view('/basic','/admin/basic_elements');
Route::view('/table','/admin/basic-table');
Route::view('/error','/admin/error-404');
Route::view('/error500','/admin/error-500');
Route::view('/user','/admin/users');
Route::view('/signin','/admin/login');
Route::view('/signup','/admin/register');
Route::view('/user','/admin/users');
Route::view('/edit/{id}','/admin/edit');
Route::view('/add','/admin/add_categories');
Route::view('/edit_category','/admin/edit_category');
Route::view('/add_estates','/admin/add_estates');

Route::post('/signup', [AdminController::class,'store']);
Route::post('/signin', [AdminController::class,'login']);
Route::get('/logout', [AdminController::class,'logout']);
Route::get('/admins', [AdminController::class,'index']);
Route::get('/admins/{id}', [AdminController::class,'destroy']);
Route::get('/edit_admin/{id}', [AdminController::class,'edit']);
Route::put('/edit_admin/{id}', [AdminController::class,'update']);
Route::post('/add', [CategoriesController::class,'store']);
Route::get('/category', [CategoriesController::class,'index']);
Route::get('/', [CategoriesController::class,'view']);
Route::get('/category/{id}', [CategoriesController::class,'destroy']);
Route::get('/edit_category/{id}', [CategoriesController::class,'edit']);
Route::put('/edit_category/{id}', [CategoriesController::class,'update']);

// estates routes
Route::post('/add_estates',[StatesController::class,'store']);
Route::get('/add_estates', [CategoriesController::class,'show']);

//Auth  routes
Route::get('/user', [RegisterController::class, 'index']);
Route::get('/user/{id}', [RegisterController::class, 'destroy']);
Route::get('/edit/{id}', [RegisterController::class, 'edit']);
Route::put('/edit/{id}', [RegisterController::class, 'update']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::post('/register',[RegisterController::class,'create']);

//select users from login controller
Route::get('/profile/{id}',[LoginController::class,'index']);

