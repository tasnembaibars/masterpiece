<?php

namespace App\Http\Controllers;

use App\Models\join;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function create(){
        return view ('/becomeagent');
      }
  
      public function store(Request $request){
  
          $input = $request->all();
       
  
          join::create($input);
  
       return redirect('/becomeagent')->with('message','we have recieved your application we will review it soonly ');
       
      }
}
