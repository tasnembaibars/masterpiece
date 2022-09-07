@extends('layout.master')
@section('content')
<section class="our-agent-single bgc-f7 pb30-991">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-lg-8">
    <div class="row">
    <div class="col-lg-12">
    <div class="breadcrumb_content style2 mt30-767 mb30-767">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="https://findhouse.bookingcore.org/">Home</a></li>
    <li class="breadcrumb-item active text-thm" aria-current="page">All Estates</li>
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
    <img class="img-whp" src="../{{ $estate->image2 }}" height="170px">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item dn"></li>
    <li class="list-inline-item"><a>{{$estate->building_company}}</a></li>
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
    <div class="col-lg-4 col-xl-4">
    
        <div class="sidebar_listing_grid1 dn-991">



    <div class="terms_condition_widget">
    <h4 class="title">Featured Properties</h4>
    <div class="sidebar_feature_property_slider">
    <div class="item">
    <div class="feat_property home7">
    <div class="thumb">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-1.jpg" alt="Renovated Apartment">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item"><a>For Buy</a></li>
    <li class="list-inline-item"><a>Featured</a></li>
    </ul>
    <a class="fp_price" href="#"> 13.194 ¥<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/renovated-apartment-1"><h4 class="posr color-white">Renovated Apartment</h4></a>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="feat_property home7">
    <div class="thumb">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-4.jpg" alt="Luxury Family Home">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item"><a>For Buy</a></li>
    <li class="list-inline-item"><a>Featured</a></li>
    </ul>
    <a class="fp_price" href="#"> 87.230 ¥<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/luxury-family-home"><h4 class="posr color-white">Luxury Family Home</h4></a>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="feat_property home7">
    <div class="thumb">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-6.jpg" alt="Gorgeous Villa Bay View">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item"><a>For Buy</a></li>
    <li class="list-inline-item"><a>Featured</a></li>
    </ul>
    <a class="fp_price" href="#"> 34.892 ¥<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/gorgeous-villa-bay-view"><h4 class="posr color-white">Gorgeous Villa Bay View</h4></a>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="feat_property home7">
    <div class="thumb">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-7.jpg" alt="EAST VILLAGE">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item"><a>For Buy</a></li>
    <li class="list-inline-item"><a>Featured</a></li>
    </ul>
    <a class="fp_price" href="#"> 28.350 ¥<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/east-village"><h4 class="posr color-white">EAST VILLAGE</h4></a>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="feat_property home7">
    <div class="thumb">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-8.jpg" alt="PARIS GREENWICH VILLA">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item"><a>For Buy</a></li>
    <li class="list-inline-item"><a>Featured</a></li>
    </ul>
    <a class="fp_price" href="#"> 54.519 ¥<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/paris-greenwich-villa"><h4 class="posr color-white">PARIS GREENWICH VILLA</h4></a>
    </div>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="feat_property home7">
    <div class="thumb">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-9.jpg" alt="LUXURY SINGLE">
    <div class="thmb_cntnt">
    <ul class="tag mb0">
    <li class="list-inline-item"><a>For Buy</a></li>
    <li class="list-inline-item"><a>Featured</a></li>
    </ul>
    <a class="fp_price" href="#"> 38.163 ¥<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/luxury-single"><h4 class="posr color-white">LUXURY SINGLE</h4></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


  

    <div class="sidebar_feature_listing">
    <h4 class="title">Recently Viewed</h4>
    <div class="media">
    <img class="align-self-start mr-3" src="https://findhouse.bookingcore.org/uploads/demo/property/property-1.jpg" alt="Renovated Apartment" style="width: 90px; height: 80px">
    <div class="media-body">
    <a target="_blank" href="https://findhouse.bookingcore.org/property/renovated-apartment-1">
    <h5 class="mt-0 post_title">Renovated Apartment</h5>
    </a>
    <a href="https://findhouse.bookingcore.org/property/renovated-apartment-1"> 13.194 ¥</a>
    <ul class="mb0">
    <li class="list-inline-item">Beds: 3</li>
    <li class="list-inline-item">Baths: 7</li>
    <li class="list-inline-item">Sq Ft: 192 sqft</li>
    </ul>
    </div>
    </div>
    <div class="media">
    <img class="align-self-start mr-3" src="https://findhouse.bookingcore.org/uploads/demo/property/property-2.jpg" alt="Gorgeous Villa Bay View" style="width: 90px; height: 80px">
    <div class="media-body">
    <a target="_blank" href="https://findhouse.bookingcore.org/property/gorgeous-villa-bay-view-1">
    <h5 class="mt-0 post_title">Gorgeous Villa Bay View</h5>
    </a>
    <a href="https://findhouse.bookingcore.org/property/gorgeous-villa-bay-view-1"> 98.134 ¥</a>
    <ul class="mb0">
    <li class="list-inline-item">Beds: 6</li>
    <li class="list-inline-item">Baths: 9</li>
    <li class="list-inline-item">Sq Ft: 175 sqft</li>
    </ul>
    </div>
    </div>
    <div class="media">
    <img class="align-self-start mr-3" src="https://findhouse.bookingcore.org/uploads/demo/property/property-3.jpg" alt="Luxury Family Home" style="width: 90px; height: 80px">
    <div class="media-body">
    <a target="_blank" href="https://findhouse.bookingcore.org/property/luxury-family-home-1">
    <h5 class="mt-0 post_title">Luxury Family Home</h5>
    </a>
    <a href="https://findhouse.bookingcore.org/property/luxury-family-home-1"> 70.875 ¥</a>
    <ul class="mb0">
    <li class="list-inline-item">Beds: 10</li>
    <li class="list-inline-item">Baths: 8</li>
    <li class="list-inline-item">Sq Ft: 163 sqft</li>
    </ul>
    </div>
    </div>
    </div> </div>
    </div>
    </div>
    </div>
    </section>
   @endsection