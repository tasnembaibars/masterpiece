<?php

namespace App\Http\Controllers;

use App\Models\agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function create(){
        return view ('admin/add_agencies');
      }
  
      public function store(Request $request){
  
          $input = $request->all();
          if ($agency = $request->file('image')) {
              $destinationPath = 'image/';
              $profileImage = date('YmdHis') . "." . $agency->getClientOriginalExtension();
              $agency->move($destinationPath, $profileImage);
              $input['image'] = "$profileImage";
          }
  
          agency::create($input);
  
       return redirect('/add_agency')->with('message','Agency Added Successfully');
       
      }
  
      // select agencies
  public function index(){
      $agencies= agency::all();
         return view('/admin/agencies',['agencies'=>$agencies]);
  }
 
  
  // show ib add estates page
  
//   public function show(){
//       $agencies= agency::all();
//          return view('/admin/add_estates',['agencies'=>$agencies]);
//   }
  //edit estate
  public function view(){
      $agencies= agency::all();
         return view('/admin/edit_agencies',['agencies'=>$agencies]);
  }
  //end
  public function destroy($id){
      $agency=agency::find($id);
      $agency->delete();
      return redirect('/agencies')->with('message', 'Agency deleted successfully');
  }
  public function edit($id){
      $agencies=agency::find($id);
      return view('admin/edit_agencies',['agencies'=>$agencies]);
      // return view('admin.edit_category',['category'=>$id]);
  
   }
   public function update(Request $request,agency $id){
      $input = $request->all();
    
          if ($agency = $request->file('image')) {
              $destinationPath = 'image/';
              $profileImage = date('YmdHis') . "." . $agency->getClientOriginalExtension();
              $agency->move($destinationPath, $profileImage);
              $input['image'] = "$profileImage";
          }
            
          $id->update($input);
      
          return redirect("/edit_agencies/$id->id")
                          ->with('message','Agency updated successfully');
   }
}
