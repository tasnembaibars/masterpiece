<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request,$id){
      if(session()->has('user_id')){
  $user_id = session()->get('user_id');

        $review=new review;
        $review->review=$request->review;
        $review->estate_id=$request->estate_id;
        $review->user_id=$request->user_id;
        $review->save();
        return redirect("/single/${id}");
      
    }else{
      return redirect("/login");

    }
  }
}
