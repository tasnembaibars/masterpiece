<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\review;
use App\Models\join;
use App\Models\contact;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function create(){
        return view('/admin/register');
    }

  public function store(Request $request){
    $formFields=$request->validate([
        'name'=>['required'],
        'email'=>['required','email',Rule::unique('admins','email')],
        'password'=>['required', 'min:8'],
        'phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|digits:10|unique:admins,phone',
        'address'=>'required'
    ]);


    $admin = new admin;
    $admin->name = $request->name;
    $admin->email = $request->email;
    $password = $request->password;
    $hashed = Hash::make($password);
    $admin->password = $hashed;
    $admin->phone = $request->phone;
    $admin->address = $request->address;
    $admin->save();
    return redirect('/signin')->with('message', 'Admin created successfully');
  }
public function show(){
    return view('/admin/login');
}
  public function login(Request $request){
    $email=$request->email;
    $password=$request->password;
    $log= admin::where('email',$email)->first();

    if(isset($log)){
        if(Hash::check($password , $log->password)== true){
            // dd($log);
            $request->session()->put('id', $log->id);
            // $request->session()->put('name', $log->Fname);
              if(session()->has('id')){
                return redirect('/dash');

              }else{
            return redirect('/signin');

              }

            
        }else {
            return redirect('/restrict')->with('message', 'Password Incorrect');
        }
    }else {
        return redirect('/restrict')->with('message', 'Only admins can log in');
    }
  }

  public function logout(Request $request){
    $request->session()->forget('id');
    return redirect('/signin');
}


// select admins
public function index(){
    $admin= admin::all();
       return view('/admin/admins',['admins'=>$admin]);
}
//delete admin from admin
public function destroy($id){
    $admin=admin::find($id); 
    $admin->delete();
    return redirect('/admins')->with('message', 'Admin deleted successfully');
}

//edit admin info 
public function edit($id){
    $admin=admin::find($id);
    return view('admin/edit_admin',['admin'=>$admin]);
 }
public function update(Request $request,Admin $id){
    //  $user_id = session('id');
    $admin = admin::find($request->id);
    $admin->name=$request->name;
    $admin->email=$request->email;
    $admin->password=$request->password;
    $admin->phone=$request->phone;
    $admin->address=$request->address;

    $admin->save();
    return redirect("edit_admin/$id->id")->with('message', 'User updated successfully');
}
public function inbox(){
    $joins= join::all();
    $reviews= review::select('users.*','users.id as use','reviews.*','estates.*','estates.id as est')
    ->join('users', 'users.id', '=', 'reviews.user_id')
    ->join('estates', 'estates.id', '=', 'reviews.estate_id')
    ->get();
    $contacts= contact::all();
    return view('/admin/messages',['joins'=>$joins,'reviews'=>$reviews,'contacts'=>$contacts]);
}
}
