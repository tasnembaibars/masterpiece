<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JoinController;

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

Route::view('/agency', 'agency');
Route::view('/agent', 'agent');
Route::view('/becomeagent', 'becomeagent');
Route::view('/about', 'about');
Route::view('/profile/{id}','/user/profile');
// Route::view('/allEstates','allEstates');
Route::view('/dash' , '/admin/index');
Route::view('/dash2','/admin/index-2');


// Route::view('/register','register');
//admin dashboard routes

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
Route::view('/add_agency','/admin/add_agencies');
Route::view('/edit_agencies','/admin/edit_agencies');

Route::view('restrict' , 'admin/adminRestrict');
Route::post('/signup', [AdminController::class,'store']);
Route::get('/signin', [AdminController::class,'show']);
Route::get('/admin/logout', [AdminController::class,'logout']);
Route::get('/admins', [AdminController::class,'index']);
Route::get('/admins/{id}', [AdminController::class,'destroy']);
Route::get('/edit_admin/{id}', [AdminController::class,'edit']);
Route::put('/edit_admin/{id}', [AdminController::class,'update']);
Route::post('/signin', [AdminController::class,'login']);

Route::group(['middleware'=>['admin']],function(){

 
});
Route::post('/add', [CategoryController::class,'store']);
Route::get('/category', [CategoryController::class,'index']);
// Route::get('/', [CategoryController::class,'view']);
Route::get('/category/{id}', [CategoryController::class,'destroy']);
Route::get('/edit_category/{id}', [CategoryController::class,'edit']);
Route::put('/edit_category/{id}', [CategoryController::class,'update']);
Route::get('/add_estates', [CategoryController::class,'show']);
// Route::get('/edit_estate/{id}', [CategoryController::class,'view']);
Route::get('/index/{catId}',[CategoryController::class,'all']);

// estates routes
Route::post('/add_estates',[EstateController::class,'store']);
Route::get('/',[EstateController::class,'show']);
Route::get('/estates',[EstateController::class,'view']);
Route::get('/estates/{id}', [EstateController::class,'destroy']);
Route::get('/edit_estate/{id}', [EstateController::class,'edit']);
Route::put('/edit_estate/{id}', [EstateController::class,'update']);
Route::get('/single/{id}', [EstateController::class,'single']);

// //Auth  routes
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'destroy']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::put('/edit/{id}', [UserController::class, 'update']);

Route::get('/user/edit_profile/{id}', [UserController::class, 'edit2']);
Route::put('/user/edit_profile/{id}', [UserController::class, 'update2']);
Route::get('/user/profile/{id}', [UserController::class,'view']);
Route::post('/register', [UserController::class,'store']);
Route::post('/login', [UserController::class,'Login']);
Route::get('/register', [UserController::class,'create']);
Route::get('/login', [UserController::class,'indix']);
Route::get('/logout', [UserController::class,'logout']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::post('/register',[RegisterController::class,'create']);

//select users from login controller
Route::get('/user',[UserController::class,'index']);

// select estates for website
Route::get('/allEstates/{id}',[EstateController::class,'all']);

//review router

Route::post('/single/{id}',[ReviewController::class,'store']);
// Route::get('/single',[StatesController::class,'let']);

// search route
Route::get('/search',[EstateController::class,'search']);
// contact
Route::post('/contact',[ContactController::class,'contact']);
Route::get('/contact',[ContactController::class,'create']);


// agency routes
Route::post('/add_agency', [AgencyController::class,'store']);
Route::get('/agencies', [AgencyController::class,'index']);
Route::get('/add_agency', [AgencyController::class,'create']);
Route::get('/agencies/{id}', [AgencyController::class,'destroy']);
Route::get('/edit_agencies/{id}', [AgencyController::class,'edit']);
Route::put('/edit_agencies/{id}', [AgencyController::class,'update']);
// Route::get('/admin/add_estates', [AgencyController::class,'show']);
// Route::get('/edit_agencies/{id}', [AgencyController::class,'view']);

// join route
Route::post('/becomeagent', [JoinController::class,'store']);
Route::get('/becomeagent', [JoinController::class,'create']);

// display messages in admin 
Route::view('/inbox','/admin/messages');
Route::get('/inbox',[AdminController::class,'inbox']);