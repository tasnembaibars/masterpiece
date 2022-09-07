@extends('layout.master')
@section('content')
{{-- <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Building_company</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
        <th scope="col">City</th>
      </tr>
    </thead>
    <tbody>
        @foreach($estates as $estate)
      <tr>
        <th scope="row">{{$estate->building_company}}</th>
        <td>{{$estate->status}}</td>
        <td>{{$estate->price}}</td>
        <td>{{$estate->city}}</td>
      </tr>
   @endforeach
    </tbody>
  </table> --}}
  {{-- <div class="col-lg-12 mt-5">
    <div class="feature_property_slider">
    @foreach($estates as $estate)
    
    <div class="item">
    <div class="feat_property">
    <div class="thumb">
    <a class="thumb-image" href="/single/{{$estate->id}}">
    <img class="img-whp" src="{{$estate->image2}}" alt="property image">
    </a>
    <div class="property-tag">
    <a>For {{$estate->status}}</a>
    </div>
    <div class="property-action">
    <a class="service-wishlist " data-id="11" data-type="property"><i class="fa fa-heart"></i></a>
    <a class="fp_price" href="#"> {{$estate->price}}</a>
    </div>
    </div>
    <div class="details">
    <div class="tc_content">
    <p class="text-thm">{{$estate->category_name }}</p>
    <a href="/single/{{$estate->id}}">
    <h4>{{$estate->description}}</h4>
    </a>
    <p><span class="flaticon-placeholder"></span>{{$estate->city}},{{$estate->address1}}</p>
    <ul class="prop_details mb0">
    <li class="list-inline-item">Beds: {{$estate->rooms_num}}</li>
    <li class="list-inline-item">Baths: {{$estate->bathrooms}}</li>
    <li class="list-inline-item">Sq: {{$estate->space}}</li>
    </ul>
    </div>
    <div class="fp_footer">
    <ul class="fp_meta float-left mb0">
    <li class="list-inline-item"><a href="agent/12.html">
    <img class="avatar" src="uploads/demo/general/avatar-5.jpg" alt="Richard Davina">
    </a></li>
    <li class="list-inline-item"><a href="agent/12.html">Richard Davina</a></li>
    </ul>
    <div class="fp_pdate float-right">07/18/2022</div>
    </div>
    </div>
    </div>
    </div>
     @endforeach 
    
    
    </div>
    </div> --}}


    <div class="col-md-12 col-lg-8 " style="margin-left: 5%;margin-top:3%">
      <div class="row">
      <div class="col-lg-12">
      <div class="breadcrumb_content style2 mt30-767 mb30-767 ">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="https://findhouse.bookingcore.org/">Home</a></li>
      <li class="breadcrumb-item active text-thm" aria-current="page">result</li>
      </ol>
      
      <h2 class="breadcrumb_title"></h2>
      </div>
      </div>
      {{-- @foreach($categories as $category) --}}
      @foreach ($estates as $estate)
      {{-- @if($estate->cat == $estate->category_id ) --}}
  
      <div class="col-lg-12">
      <div class="feat_property list style2 agent">
      <div class="thumb">

      <img class="img-whp" src="{{ $estate->image2 }}" height="180px">
      <div class="thmb_cntnt">
      <ul class="tag mb0">
      <li class="list-inline-item dn"></li>
      <li class="list-inline-item"><a  href="/single/{{$estate->id}}">{{$estate->building_company}}</a></li>
      </ul>
      </div>
      </div>
      <div class="details">
      <div class="tc_content">
      <h4> {{$estate->description}}</h4>
      <p class="text-thm">{{$estate->city}}</p>
       <ul class="prop_details mb0">
      <li><a href="#">type: {{$estate->status	}}</a></li>
      <li><a href="#">Price: {{$estate->price}} </a></li>
      </ul>
      </div>
      <div class="fp_footer">
      <ul class="fp_meta float-left mb0">
      <li class="list-inline-item"><a href="#">space :{{$estate->space}}</a></li>
      <li class="list-inline-item"><a href="#">rooms :{{$estate->rooms_num}}</a></li>
      <li class="list-inline-item"><a href="#">bath :{{$estate->bathrooms}}</a></li>
      {{-- <li class="list-inline-item"><a href="#">{{$estate->rooms_num}}</a></li> --}}
      </ul>
      <a href="/single/{{$estate->id}}">
      <div class="fp_pdate float-right text-thm">View property <i class="fa fa-angle-right"></i></div>
      </a>
      </div>
      </div>
      </div>
  
  
      </div>
      
      {{-- @else
      <p>no estates for this category now</p>
      @endif --}}
      @endforeach
      {{-- @endforeach --}}
     
      </div>
      </div>
@endsection