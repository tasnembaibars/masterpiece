<?php

namespace App\Http\Controllers;

use App\Models\agency;
use App\Models\estate;
use Illuminate\Http\Request;


use App\Models\Category;
use App\Models\review;
use Illuminate\Support\Facades\DB;
class EstateController extends Controller
{
    public function create(){
        $estate= estate::select('estates.*','estates.id as est','categories.*')
        ->join('categories','categories.id','=','estates.category_id')
        ->get();
        return $estate;
       
       return view('/admin/add_estates');
    }
   

    public function store(Request $request){
        $this->validate($request, [

            'image1' => 'required',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

    ]);
          $estate= new estate;
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
          $estate->agency_id=$request->agency_id;
          $image1 = $request->file('image1')->Move('img', $request->image1->getClientOriginalName());
          $estate->image1 =$image1 ;
          $image2 = $request->file('image2')->Move('img', $request->image2->getClientOriginalName());
          $estate->image2 =$image2 ;
          $image3 = $request->file('image3')->Move('img', $request->image3->getClientOriginalName());
          $estate->image3 =$image3 ;         
          $estate->owner_name=$request->owner_name;
          $estate->oEmail=$request->oEmail;
          $estate->owner_phone=$request->owner_phone;
          $estate->oAddress=$request->oAddress;
          
          $estate->save(); 
       
          return redirect('/add_estates')->with('message','Estates created successfully');
 

    }
    public function show(){
      $estates= estate::select('estates.*','estates.id as est','categories.*','agencies.*')
        ->join('categories','categories.id','=','estates.category_id')
        ->join('agencies','agencies.id','=','estates.agency_id')
        ->get();
      $categories = Category::all();
    $agencies=agency::all();
      
      return view('index',['estates'=>$estates , 'categories'=>$categories,'agencies'=>$agencies]);
    }
    // view all estates website
    public function all($id){
      $estates= estate::select('estates.*','categories.*','categories.id as cat')
      ->join('categories','categories.id','=','estates.category_id')
        ->get();
      $categories = Category::find($id);
      $estates = estate::where('category_id' , $id)->get();
      return view("/allEstates",['estates'=>$estates , 'categories'=>$categories]);
     
    }
    // attempt
 

    // end attempt
    public function view(){
      $estates= estate::select('estates.*','estates.id as est','categories.*')
        ->join('categories','categories.id','=','estates.category_id')
        ->get();
      
      return view('/admin/estates',['estates'=>$estates]);
    }
    public function destroy($id){
      $estates=estate::find($id);
      $estates->delete();
      return redirect('/estates')->with('message', 'Estate deleted successfully');
  }
  public function edit($id){
   
    $estate=estate::find($id);
    $categories=Category::all();
    $agencies=agency::all();
    return view('admin/edit_estate',['estate'=>$estate ,'categories'=>$categories,'agencies'=>$agencies]);
    

 }
 public function single($id){

  $estate = estate::find($id);
  $agency_id = $estate->agency_id;
  // $category_id = $product->category_id; 
  $agency = agency::find($agency_id);
  // $category = Category::find($category_id);
  // $estates = estate::where('estates.agency_id' , $id)->get();
  $reviews = review::select('users.*','users.id as use','reviews.*','estates.*','estates.id as est')
    ->join('users', 'users.id', '=', 'reviews.user_id')
    ->join('estates', 'estates.id', '=', 'reviews.estate_id')
    ->get();
  return view('/single',['estate'=>$estate ,'reviews'=>$reviews,'agency'=>$agency]);
 

}
 public function update(Request $request,estate $id){
  $estate= new estate;

  $image1 = $request->file('image1')->Move('image', $request->image1->getClientOriginalName());
  $estate->image1 =$image1 ;
  $image2 = $request->file('image2')->Move('image', $request->image2->getClientOriginalName());
  $estate->image2 =$image2 ;
  $image3 = $request->file('image3')->Move('image', $request->image3->getClientOriginalName());
  $estate->image3 =$image3 ; 
  $input = $request->all();

        $id->update($input);
        return redirect("/edit_estate/$id->id")
                        ->with('message','Estate updated successfully');
 }


public function search(Request $request){
//   $estates=estate::select('categories.*','categories.id as cat','agencies.*','estates.*','agencies.id as age')
//   ->join('categories', 'categories.id', '=', 'estates.category_id')
//   ->join('agencies', 'agencies.id', '=', 'estates.agency_id')
//   ->get();
if($request->query){
  $search_text=$_GET['query'];
 
  $estates=estate::where('building_company','LIKE','%'.$search_text.'%')->get();
}
  $search_option=$_GET['category_name'];
  $categories=Category::where('category_name','LIKE','%'.$search_option.'%')->get();
  if($request->city){
  $search_city=$_GET['city'];
  $estates=estate::where('city','LIKE','%'.$search_city.'%')->get();
  }
if($request->type){
  $search_type=$_GET['type'];
  $estates=estate::where('status','LIKE','%'.$search_type.'%')->get();
}
  return view('/search',compact('estates','categories'));
}

}
