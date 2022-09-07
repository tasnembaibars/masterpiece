<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){
        $validated = Validator::make(
            $request->all(),

            [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'password_confirmation' => ['required', 'string', 'min:8', 'confirmed'],
                    'phone' => ['required'],
                    'address' => ['required', 'string', 'max:255'],
        
                ]);
                // return redirect('/login');
                if($request->password !== $request->password_confirmation){
                    return redirect('/register');
                 }else{
         
              $user=new user;
              $user->name=$request->name;
              $user->email=$request->email;
              $password = $request->password;
              $hashed = Hash::make($password);
              $user->password = $hashed;
              $user->phone=$request->phone;
              $user->address=$request->address;

              $user->save();
              return redirect('/login');
             }
    }

  
    public function create()
    {
      return view('/register');
       

       
    }
    public function indix()
    {
      return view('/login');
       

       
    }

    public function Login(request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $user = user::where('email', $email)->first();
        
        
        if (isset($user)) {

            if (Hash::check($password, $user->password) == true) {
                $request->session()->put('user_id',$user->id);
                // dd($request);
                // Session::put('user_id',$user->id);
                // session()->save();
                return redirect('/');
            } else {
                return redirect('login')->with('incorrect_password', 'Password Incorrect');
            }
        } else {
            return redirect('login')->with('email_incorrect', 'Email Does not Exist');
        }
    }
//select users for admin dashboard
public function index(){
    $users= user::all();
       return view('/admin/users',['users'=>$users]);
}

//delete from admin
public function destroy($id){
    $user=user::find($id); 
    $user->delete();
    return redirect('/user')->with('message', 'User deleted successfully');
}
// update from admin
public function edit($id){
    $user=user::find($id);
    return view('admin/edit',['user'=>$user]);
 }
public function update(Request $request,user $id){
    //  $user_id = session('id');
    $user = user::find($request->id);
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=$request->password;
    $user->phone=$request->phone;
    $user->address=$request->address;

    $user->save();
    return redirect("edit/$id->id")->with('message', 'User updated successfully');
}

//select users for user profile
public function view($id){
    $id = session()->get('user_id');

    $users = user::find($id);

    
    return view('/user/profile' , ['users' =>$users]);
}

public function logout(Request $request){
    $request->session()->forget('user_id');
    return redirect('/');
}


// edit from user profile
public function edit2($id){
    $user=user::find($id);
    return view('/user/edit_profile',['user'=>$user]);
 }
public function update2(Request $request,user $id){
    //  $user_id = session('id');
    $user = user::find($request->id);
    $user->name=$request->name;
    $user->email=$request->email;
    // $user->password=$request->password;
    $user->phone=$request->phone;
    $user->address=$request->address;

    $user->save();
    return redirect("/user/edit_profile/$id->id")->with('message', 'profile updated successfully');
}
}

