<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function create(){
        return view('/admin/register');
    }

  public function store(Request $request){
    $formFields=$request->validate([
        'name'=>['required','min:5'],
        'email'=>['required','email',Rule::unique('admins','email')],
        'password'=>['required', 'min:8'],
        'phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|digits:10|unique:admins,phone',
        'address'=>'required'
    ]);


    $admin = new Admin;
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

  public function login(Request $request){
    $email=$request->email;
    $password=$request->password;
    $log= Admin::where('email',$email)->first();

    if(isset($log)){
        if(Hash::check($password , $log->password)== true){
            $request->session()->put('id', $log->id);
            $request->session()->put('name', $log->Fname);
            return redirect('/dash');
        }else {
            return redirect('/signin')->with('message', 'Password Incorrect');
        }
    }else {
        return redirect('/signin')->with('message', 'Only admins can log in');
    }
  }

  public function logout(Request $request){
    $request->session()->forget('email');
    return redirect('/signin');
}


// select admins
public function index(){
    $admin= Admin::all();
       return view('/admin/admins',['admins'=>$admin]);
}
//delete admin from admin
public function destroy($id){
    $admin=Admin::find($id); 
    $admin->delete();
    return redirect('/admins')->with('message', 'Admin deleted successfully');
}

//edit admin info 
public function edit($id){
    $admin=Admin::find($id);
    return view('admin/edit_admin',['admin'=>$admin]);
 }
public function update(Request $request){
    //  $user_id = session('id');
    $admin = Admin::find($request->id);
    $admin->name=$request->name;
    $admin->email=$request->email;
    $admin->password=$request->password;
    $admin->phone=$request->phone;
    $admin->address=$request->address;

    $admin->save();
    return redirect('edit_admin/{id}')->with('message', 'User updated successfully');
}
}
