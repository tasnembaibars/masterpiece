<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
class StatesController extends Controller
{
    public function create(){
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
          $estate->category_id=$request->category;
          $estate->price=$request->price;
          $estate->space=$request->space;
          $estate->year=$request->year;
          $estate->garage=$request->garage;
          $estate->rooms_num=$request->rooms_num;
          $estate->bathrooms=$request->bathrooms;
          $estate->status=$request->status;

          if($request->hasfile('image'))
          {
 
       foreach($estate = $request->file('image')as $image) {
            // $destinationPath = 'image/';
            // $profileImage = date('YmdHis') . "." . $estate->getClientOriginalExtension();
            // $estate->move($destinationPath, $profileImage);
            // $input['image'] = "$profileImage";
            $estate=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $estate);  
            $data[] = $estate;  
        }
    }
          $estate->save(); 
        // $input = $request->all();
       

        // States::create($input);
           
          return redirect('/add_estates')->with('message','Estates created successfully');
 

    }
}
