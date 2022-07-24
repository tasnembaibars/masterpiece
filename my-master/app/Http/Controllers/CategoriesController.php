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
//show in home page
public function view(){
    $category= Categories::all();
       return view('/index',['categories'=>$category]);
}
// show ib add estates page

public function show(){
    $category= Categories::all();
       return view('/admin/add_estates',['categories'=>$category]);
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
    
        return redirect('/edit_category/{id}')
                        ->with('message','Category updated successfully');
 }

}
