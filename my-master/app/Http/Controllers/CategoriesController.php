<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
class CategoriesController extends Controller
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

     Categories::create($input);

     return redirect('/add')->with('message','Category Added Successfully');
     
    }

    // select categories
public function index(){
    $category= Categories::all();
       return view('/admin/categories',['categories'=>$category]);
}
// show in home page
public function all(){
    $categories= Categories::all();
       return view('/index',compact('categories'));
}

// show ib add estates page

public function show(){
    $categories= Categories::all();
       return view('/admin/add_estates',['categories'=>$categories]);
}
//edit estate
public function view(){
    $categories= Categories::all();
       return view('/admin/edit_estate',['categories'=>$categories]);
}
//end
public function destroy($id){
    $category=Categories::find($id);
    $category->delete();
    return redirect('/category')->with('message', 'Category deleted successfully');
}
public function edit($id){
    $category=Categories::find($id);
    return view('admin/edit_category',['category'=>$category]);
    // return view('admin.edit_category',['category'=>$id]);

 }
 public function update(Request $request,Categories $id){
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
