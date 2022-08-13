<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\States;
use App\Models\review;
class StatesController extends Controller
{
    public function create(){
        $estate= States::select('states.*','states.id as est','categories.*')
        ->join('categories','categories.id','=','states.category_id')
        ->get();
        return $estate;
       
       return view('/admin/add_estates');
    }
   

    public function store(Request $request){
        $this->validate($request, [

            'image1' => 'required',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

    ]);
          $estate= new States;
          $estate->building_company=$request->building_company;
          $estate->description=$request->description;
          $estate->city=$request->city;
          $estate->location=$request->location;
          $estate->address1=$request->address1;
          $estate->address2=$request->address2;
          $estate->neighbourhood=$request->neighbourhood;
          $estate->price=$request->price;
          $estate->space=$request->space;
          $estate->year=$request->year;
          $estate->garage=$request->garage;
          $estate->rooms_num=$request->rooms_num;
          $estate->bathrooms=$request->bathrooms;
          $estate->status=$request->status;
          $estate->category_id=$request->category_id;
          $image1 = $request->file('image1')->Move('img', $request->image1->getClientOriginalName());
          $estate->image1 =$image1 ;
          $image2 = $request->file('image2')->Move('img', $request->image2->getClientOriginalName());
          $estate->image2 =$image2 ;
          $image3 = $request->file('image3')->Move('img', $request->image3->getClientOriginalName());
          $estate->image3 =$image3 ;         
   
          $estate->save(); 
       
          return redirect('/add_estates')->with('message','Estates created successfully');
 

    }
    public function show(){
      $estates= States::select('states.*','states.id as est','categories.*')
        ->join('categories','categories.id','=','states.category_id')
        ->get();
      $categories = Categories::all();
      return view('index',['estates'=>$estates , 'categories'=>$categories]);
    }
    // view all estates website
    public function all(){
      $estates= States::all();
       
      return view('/allEstates',compact('estates'));
    }
    public function view(){
      $estates= States::select('states.*','states.id as est','categories.*')
        ->join('categories','categories.id','=','states.category_id')
        ->get();
      
      return view('/admin/estates',['estates'=>$estates]);
    }
    public function destroy($id){
      $estates=States::find($id);
      $estates->delete();
      return redirect('/estates')->with('message', 'Estate deleted successfully');
  }
  public function edit($id){
   
    $estate=States::find($id);
    $categories=Categories::all();

    return view('admin/edit_estate',['estate'=>$estate ,'categories'=>$categories]);
    

 }
 public function single($id){
  
  $estate=States::find($id);
  return view('/single',compact('estate'));
 

}
 public function update(Request $request,States $id){
    
       $input = $request->all();
        $id->update($input);
        return redirect("/edit_estate/$id->id")
                        ->with('message','Estate updated successfully');
 }

//  add reviews in sinle post

// public function add(Request $request,review $id){
//   $review=new review;
//   $review->review=$request->review;
//   $review->estate_id=$request->estate_id;
//   $review->save();
//   return redirect("/single/$id->id")->with('message', 'Thank you for your review,Tha admin will review it soon');
// }
}
