<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\agency;
use Illuminate\Http\Request;

use App\Models\estate;
class CategoryController extends Controller
{
    public function create(){
        return view ('admin/add_categories');
      }
  
      public function store(Request $request){
  
          $input = $request->all();
          if ($category = $request->file('image')) {
              $destinationPath = 'image/';
              $profileImage = date('YmdHis') . "." . $category->getClientOriginalExtension();
              $category->move($destinationPath, $profileImage);
              $input['image'] = "$profileImage";
          }
  
          category::create($input);
  
       return redirect('/add')->with('message','Category Added Successfully');
       
      }
  
      // select categories
  public function index(){
      $category= category::all();
         return view('/admin/categories',['categories'=>$category]);
  }
  // show in home page
  public function all($id){
      // $categories= Categories::all();
  //     //    return view('/index',compact('categories'));
  //     $categories= Categories::select('states.category_id as catId','categories.*')
  //     ->join('categories','categories.id','=','states.category_id')
  //     ->get();
  // //   $estates = States::all();
  //   return view("/allEstates/${catId}",['categories'=>$categories]);
 
//   $estates = estate::where('category_id' , $id)->get();
//   $category = category::find($id);
//   $categories = category::all();
//   return view("/allEstate/${id}" , ['estates'=>$estates , 'category'=>$category , 'categories'=>$categories ]);
  }
  
  // show ib add estates page
  
  public function show(){
      $categories= category::all();
      $agencies= agency::all();

         return view('/admin/add_estates',['categories'=>$categories,'agencies'=>$agencies]);
  }
  //edit estate
  public function view(){
      $categories= category::all();
         return view('/admin/edit_estate',['categories'=>$categories]);
  }
  //end
  public function destroy($id){
      $category=category::find($id);
      $category->delete();
      return redirect('/category')->with('message', 'Category deleted successfully');
  }
  public function edit($id){
      $category=category::find($id);
      return view('admin/edit_category',['category'=>$category]);
      // return view('admin.edit_category',['category'=>$id]);
  
   }
   public function update(Request $request,category $id){
      $input = $request->all();
    
          if ($category = $request->file('image')) {
              $destinationPath = 'image/';
              $profileImage = date('YmdHis') . "." . $category->getClientOriginalExtension();
              $category->move($destinationPath, $profileImage);
              $input['image'] = "$profileImage";
          }
            
          $id->update($input);
      
          return redirect("/edit_category/$id->id")
                          ->with('message','Category updated successfully');
   }
  
}
