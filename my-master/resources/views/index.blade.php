
@extends('layout.master')
@section('content')
    

<div class="page-template-content ">
<section class="home-one home1-overlay home1_bgi1" style="background-image: url('uploads/demo/general/19.jpg');">
<div class="container">
<div class="row posr">
<div class="col-lg-12">
<div class="home_content">
<div class="home-text text-center">
<h2 class="fz55">Find Your Dream Home</h2>
<p class="fz18 color-white">From as low as $10 per day with limited time offer discounts.</p>
</div>
<div class="home_adv_srch_opt ">
<ul class="nav nav-pills" id="pills-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="pills-buy-tab" data-toggle="pill" href="#pills-buy" role="tab" aria-controls="pills-buy" aria-selected="true">Buy</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-rent-tab" data-toggle="pill" href="#pills-rent" role="tab" aria-controls="pills-rent" aria-selected="true">Rent</a>
</li>
</ul>
<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-buy" role="tabpanel" aria-labelledby="pills-home-tab">
<form method="get" action="https://findhouse.bookingcore.org/property">
<input type="hidden" name="_token" value="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou"> <input type="hidden" name="property_type" id="property_type" value="1">
<div class="home1-advnc-search ">
<ul class="h1ads_1st_list mb0">
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" id="ServiceName" name="service_name" placeholder="Enter keyword ..." value="">
</div>
</li> <li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="category_id" class="selectpicker w100 show-tick">
<option value="0">Property Category</option>
<option value="1"> Apartment</option>
<option value="2"> Condo</option>
<option value="3"> Family House</option>
<option value="4"> Modern Villa</option>
<option value="5"> Town House</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="location_id" class="selectpicker w100 show-tick">
<option value="0">Location</option>
<option value="1"> Paris</option>
<option value="2"> New York, United States</option>
<option value="3"> California</option>
<option value="4"> United States</option>
<option value="5"> Los Angeles</option>
<option value="6"> New Jersey</option>
<option value="7"> San Francisco</option>
<option value="8"> Virginia</option>
</select>
</div>
</div>
</li>
<li>
<div class="small_dropdown2 ">
<div id="prncgs2" class="btn dd_btn property_select_price">
<span>Price</span>
<label><span class="dropdown-toggle"></span></label>
</div>
<div class="dd_content2 property_select_price--slider ">
<div class="pricing_acontent">
<div class="clearfix">
<input type="text" name="price_range[0]" class="amount" placeholder="0">
<input type="text" name="price_range[1]" class="amount2" placeholder="900.00">
</div>
<input type="hidden" id="max_value" value="900.00">
<div class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
</div>
</div>
</div>
</div>
</li>
<li class="custome_fields_520 list-inline-item">
<div class="navbered">
<div class="mega-dropdown">
<span id="show_advbtn" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
<div class="dropdown-content">
<div class="row p-md-1 pt0-xsd">
<div class="col-lg-11 col-xl-10">
<ul class="apeartment_area_list mb0">
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="bathroom" class="selectpicker w100 show-tick">
<option value="0">Bathrooms</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="bedroom" class="selectpicker w100 show-tick">
<option value="0">Bedrooms</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="garage" class="selectpicker w100 show-tick">
<option value="0">Garages</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="year_built" class="selectpicker w100 show-tick">
<option value="0">Year built</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
</select>
</div>
</div>
</li>
</ul>
</div>
<div class="col-lg-1 col-xl-2">
<div class="mega_dropdown_content_closer">
<h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp">Hide</span></h5>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="list-inline-item">
<div class="search_option_button ">
<button type="submit" class="btn btn-thm">Search</button>
</div>
</li>
</ul>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="feature-property" class="feature-property bgc-f7">
<div class="mouse_scroll">
<a href="#feature-property">
<div class="icon">
<h4>Scroll Down</h4>
<p>to discover more</p>
</div>
<div class="thumb">
<img src="findhouse/images/resource/mouse.png" alt="mouse.png">
</div>
</a>
</div>
<div class="container ovh">
<div class="row">
<div class="col-lg-12">
<div class="main-title text-center mb40">
 <h2>Featured Properties</h2>
<p>Handpicked properties by our team.</p>
</div>
</div>
<div class="col-lg-12">
<div class="feature_property_slider">
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/stay-greenwich-village.html">
<img class="img-whp" src="uploads/demo/property/property-11.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="11" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $150</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Modern Villa</p>
<a href="property/stay-greenwich-village.html">
<h4>STAY GREENWICH VILLAGE</h4>
</a>
<p><span class="flaticon-placeholder"></span> California</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 9</li>
<li class="list-inline-item">Baths: 10</li>
<li class="list-inline-item">Sq: 104 sqft</li>
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
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/lily-dale-village.html">
<img class="img-whp" src="uploads/demo/property/property-10.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="10" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $250</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Town House</p>
<a href="property/lily-dale-village.html">
<h4>LILY DALE VILLAGE</h4>
</a>
<p><span class="flaticon-placeholder"></span> New York, United States</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 9</li>
<li class="list-inline-item">Baths: 9</li>
<li class="list-inline-item">Sq: 145 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/1.html">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="System Admin">
</a></li>
<li class="list-inline-item"><a href="agent/1.html">System Admin</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/luxury-single.html">
<img class="img-whp" src="uploads/demo/property/property-9.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
<a>Featured</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="9" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $350</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Condo</p>
 <a href="property/luxury-single.html">
<h4>LUXURY SINGLE</h4>
</a>
<p><span class="flaticon-placeholder"></span> Los Angeles</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 5</li>
<li class="list-inline-item">Baths: 1</li>
<li class="list-inline-item">Sq: 151 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/10.html">
<img class="avatar" src="uploads/demo/general/avatar-5.jpg" alt="Sarah Violet">
</a></li>
<li class="list-inline-item"><a href="agent/10.html">Sarah Violet</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/paris-greenwich-villa.html">
<img class="img-whp" src="uploads/demo/property/property-8.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
<a>Featured</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="8" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $500</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Modern Villa</p>
<a href="property/paris-greenwich-villa.html">
<h4>PARIS GREENWICH VILLA</h4>
</a>
<p><span class="flaticon-placeholder"></span> Paris</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 5</li>
<li class="list-inline-item">Baths: 2</li>
<li class="list-inline-item">Sq: 159 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/18.html">
<img class="avatar" src="uploads/demo/general/avatar-5.jpg" alt="John Dakshi">
</a></li>
<li class="list-inline-item"><a href="agent/18.html">John Dakshi</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/east-village.html">
<img class="img-whp" src="uploads/demo/property/property-7.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
<a>Featured</a>
 </div>
<div class="property-action">
<a class="service-wishlist " data-id="7" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $260</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Family House</p>
<a href="property/east-village.html">
<h4>EAST VILLAGE</h4>
</a>
<p><span class="flaticon-placeholder"></span> California</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 10</li>
<li class="list-inline-item">Baths: 6</li>
<li class="list-inline-item">Sq: 143 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/9.html">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="William Diana">
</a></li>
<li class="list-inline-item"><a href="agent/9.html">William Diana</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/gorgeous-villa-bay-view.html">
<img class="img-whp" src="uploads/demo/property/property-6.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
<a>Featured</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="6" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $320</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Condo</p>
<a href="property/gorgeous-villa-bay-view.html">
<h4>Gorgeous Villa Bay View</h4>
</a>
<p><span class="flaticon-placeholder"></span> United States</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 4</li>
<li class="list-inline-item">Baths: 8</li>
<li class="list-inline-item">Sq: 192 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/9.html">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="William Diana">
</a></li>
<li class="list-inline-item"><a href="agent/9.html">William Diana</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
 <a class="thumb-image" href="property/renovated-apartment.html">
<img class="img-whp" src="uploads/demo/property/property-5.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="5" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $220</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Apartment</p>
<a href="property/renovated-apartment.html">
<h4>Renovated Apartment</h4>
</a>
<p><span class="flaticon-placeholder"></span> United States</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 4</li>
<li class="list-inline-item">Baths: 9</li>
<li class="list-inline-item">Sq: 177 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/14.html">
<img class="avatar" src="uploads/demo/general/avatar-3.jpg" alt="Anne Nami">
</a></li>
<li class="list-inline-item"><a href="agent/14.html">Anne Nami</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/luxury-family-home.html">
<img class="img-whp" src="uploads/demo/property/property-4.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
<a>Featured</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="4" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $800</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Family House</p>
<a href="property/luxury-family-home.html">
<h4>Luxury Family Home</h4>
</a>
<p><span class="flaticon-placeholder"></span> New York, United States</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 6</li>
<li class="list-inline-item">Baths: 6</li>
<li class="list-inline-item">Sq: 103 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/15.html">
<img class="avatar" src="uploads/demo/general/avatar-3.jpg" alt="Bush Elise">
</a></li>
 <li class="list-inline-item"><a href="agent/15.html">Bush Elise</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/luxury-family-home-1.html">
<img class="img-whp" src="uploads/demo/property/property-3.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="3" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $650</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Condo</p>
<a href="property/luxury-family-home-1.html">
<h4>Luxury Family Home</h4>
</a>
<p><span class="flaticon-placeholder"></span> California</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 10</li>
<li class="list-inline-item">Baths: 8</li>
<li class="list-inline-item">Sq: 163 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/18.html">
<img class="avatar" src="uploads/demo/general/avatar-5.jpg" alt="John Dakshi">
</a></li>
<li class="list-inline-item"><a href="agent/18.html">John Dakshi</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/gorgeous-villa-bay-view-1.html">
<img class="img-whp" src="uploads/demo/property/property-2.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="2" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $900</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Condo</p>
<a href="property/gorgeous-villa-bay-view-1.html">
<h4>Gorgeous Villa Bay View</h4>
</a>
<p><span class="flaticon-placeholder"></span> California</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 6</li>
<li class="list-inline-item">Baths: 9</li>
<li class="list-inline-item">Sq: 175 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/9.html">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="William Diana">
</a></li>
<li class="list-inline-item"><a href="agent/9.html">William Diana</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property">
<div class="thumb">
<a class="thumb-image" href="property/renovated-apartment-1.html">
<img class="img-whp" src="uploads/demo/property/property-1.jpg" alt="property image">
</a>
<div class="property-tag">
<a>For Buy</a>
<a>Featured</a>
</div>
<div class="property-action">
<a class="service-wishlist " data-id="1" data-type="property"><i class="fa fa-heart"></i></a>
<a class="fp_price" href="#"> $121</a>
</div>
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">Apartment</p>
<a href="property/renovated-apartment-1.html">
<h4>Renovated Apartment</h4>
</a>
<p><span class="flaticon-placeholder"></span> Paris</p>
<ul class="prop_details mb0">
<li class="list-inline-item">Beds: 3</li>
<li class="list-inline-item">Baths: 7</li>
<li class="list-inline-item">Sq: 192 sqft</li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="agent/1.html">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="System Admin">
</a></li>
<li class="list-inline-item"><a href="agent/1.html">System Admin</a></li>
</ul>
<div class="fp_pdate float-right">07/18/2022</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="property-city" class="property-city pb30 style_1">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="main-title text-center">
<h2>Categories</h2>
<p>you can find anything you want with BoyoutKom. </p>
</div>
</div>
</div>
{{-- categories --}}
@foreach ($categories as $category)
<div class="row">
<div class="col-lg-4 col-xl-4">
<a href="">
<div class="properti_city ">
<div class="thumb"><img class="img-fluid w100" src="/image/{{ $category->image }}" alt=""></div>
<div class="overlay">
<div class="details ">
<div class="">
<h4>{{$category['category_name']}}</h4>
</div>
<p class="desc">
<span></span>
</p>
</div>
</div>
</div>
</a>
 </div>
 @endforeach
{{-- end category --}}
{{-- <div class="col-lg-8 col-xl-8">
<a href="propertyd752.html?location_id=2">
<div class="properti_city ">
<div class="thumb"><img class="img-fluid w100" src="uploads/demo/location/location-2.jpg" alt=""></div>
<div class="overlay">
<div class="details ">
<div class="">
<h4>villas</h4>
</div>
<p class="desc">
<span>2 Properties</span>
</p>
</div>
</div>
</div>
</a> </div> --}}
{{-- <div class="col-lg-8 col-xl-8">
<a href="property6456.html?location_id=3">
<div class="properti_city ">
<div class="thumb"><img class="img-fluid w100" src="uploads/demo/location/location-3.jpg" alt=""></div>
<div class="overlay">
<div class="details ">
<div class="">
<h4>Apartments</h4>
</div>
<p class="desc">
<span>4 Properties</span>
</p>
</div>
</div>
</div>
</a> </div> --}}
{{-- <div class="col-lg-4 col-xl-4">
<a href="propertyeedc.html?location_id=4">
<div class="properti_city ">
<div class="thumb"><img class="img-fluid w100" src="uploads/demo/location/location-4.jpg" alt=""></div>
<div class="overlay">
<div class="details ">
<div class="">
<h4>Compounds</h4>
</div>
<p class="desc">
<span>2 Properties</span>
</p>
</div>
</div>
</div>
</a> </div> --}}
</div>
</div>
</section>
<section id="why-chose" class="whychose_us bgc-f7 pb30">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="main-title text-center">
<h2></h2>
<p></p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-4 col-xl-4">
<a href="#" class="btn btn-default w100">
<div class="why_chose_us">
<div class="icon">
<span class="flaticon-high-five"></span>
</div>
<div class="details">
<h4>Trusted By Thousands</h4>
<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.
the best prices on</p>
</div>
</div>
</a>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
<a href="register.html" class="btn btn-default w100">
<div class="why_chose_us">
<div class="icon">
<span class="flaticon-home-1"></span>
</div>
<div class="details">
<h4>Wide Renge Of Properties</h4>
<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.
</p>
</div>
</div>
</a>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
<a href="register.html" class="btn btn-default w100">
<div class="why_chose_us">
<div class="icon">
<span class="flaticon-profit"></span>
</div>
<div class="details">
<h4>Financing Made Easy</h4>
<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
</div>
</div>
</a>
</div>
</div>
</div>
</section>

<section id="our-testimonials" class="our-testimonial" style="background-image: url('')">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="main-title text-center">
<h2 class="color-white">Testimonials</h2>
<p class="color-white"></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 offset-lg-3">
<div class="testimonial_grid_slider">
<div class="item">
<div class="testimonial_grid">
<div class="thumb">
<img src="uploads/demo/general/avatar.jpg" alt="Eva Hicks">
</div>
<div class="details">
<h4>Eva Hicks</h4>
<p></p>
<p class="mt25">Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. </p>
</div>
</div>
</div>
<div class="item">
<div class="testimonial_grid">
<div class="thumb">
<img src="uploads/demo/general/avatar-2.jpg" alt="Donald Wolf">
</div>
<div class="details">
<h4>Donald Wolf</h4>
<p></p>
<p class="mt25">Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. </p>
</div>
</div>
</div>
<div class="item">
<div class="testimonial_grid">
<div class="thumb">
<img src="uploads/demo/general/avatar-3.jpg" alt="Charlie Harrington">
</div>
<div class="details">
<h4>Charlie Harrington</h4>
<p></p>
<p class="mt25">Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="our-blog bb1 pb30" style="background-color: #f7f7f7;background-image: url('')">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="main-title text-center">
<h2>Articles &amp; Tips</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="for_blog feat_property">
<a href="news/morning-in-the-northern-sea.html">
<div class="thumb">
<img src="uploads/demo/news/news-1.jpg" class="img-whp" alt="">
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">
<a href="news/category/family-house.html">
Family House
</a>
</p>
<h4><a href="news/morning-in-the-northern-sea.html">Morning in the Northern sea</a></h4>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="System Admin">
</a></li>
<li class="list-inline-item"><a href="#">System Admin</a></li>
</ul>
<a class="fp_pdate float-right" href="#">07/18/2022</a>
</div>
</div>
</a>
</div> </div>
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="for_blog feat_property">
<a href="news/america-national-parks-with-denver.html">
<div class="thumb">
<img src="uploads/demo/news/news-3.jpg" class="img-whp" alt="">
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">
<a href="news/category/family-house.html">
Family House
</a>
</p>
<h4><a href="news/america-national-parks-with-denver.html">America National Parks with Denver</a></h4>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="System Admin">
</a></li>
<li class="list-inline-item"><a href="#">System Admin</a></li>
</ul>
<a class="fp_pdate float-right" href="#">07/18/2022</a>
</div>
</div>
</a>
</div> </div>
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="for_blog feat_property">
<a href="news/a-seaside-reset-in-laguna-beach.html">
<div class="thumb">
<img src="uploads/demo/news/news-2.jpg" class="img-whp" alt="">
</div>
<div class="details">
<div class="tc_content">
<p class="text-thm">
<a href="news/category/condo.html">
Condo
</a>
</p>
<h4><a href="news/a-seaside-reset-in-laguna-beach.html">A Seaside Reset in Laguna Beach</a></h4>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#">
<img class="avatar" src="uploads/demo/general/avatar.jpg" alt="System Admin">
</a></li>
<li class="list-inline-item"><a href="#">System Admin</a></li>
</ul>
<a class="fp_pdate float-right" href="#">07/18/2022</a>
</div>
</div>
</a>
</div> </div>
</div>
</div>
</section>

@endsection