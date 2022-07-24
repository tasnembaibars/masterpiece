@extends('layout.master')
@section('content')
<div class="wrapper">
<div class="preloader"></div>

<section class="our-listing bgc-f7 pb30-991">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="listing_sidebar dn db-991">
<div class="sidebar_content_details style3">

<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
<div class="sidebar_advanced_search_widget">
<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
<ul class="sasw_list style2 mb0">
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" placeholder="keyword">
<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
</div>
</li>
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" placeholder="Location">
<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Status</option>
<option>Apartment</option>
<option>Bungalow</option>
<option>Condo</option>
 <option>House</option>
<option>Land</option>
<option>Single Family</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Property Type</option>
<option>Apartment</option>
<option>Bungalow</option>
<option>Condo</option>
<option>House</option>
<option>Land</option>
<option>Single Family</option>
</select>
</div>
</div>
</li>
<li>
<div class="small_dropdown2">
<div id="prncgs" class="btn dd_btn">
<span>Price</span>
<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
</div>
<div class="dd_content2">
<div class="pricing_acontent">
<input type="text" class="amount" placeholder="$52,239">
<input type="text" class="amount2" placeholder="$985,14">
<div class="slider-range"></div>
</div>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Bathrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Bedrooms</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
 <div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Garages</option>
<option>Yes</option>
<option>No</option>
<option>Others</option>
</select>
</div>
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select class="selectpicker w100 show-tick">
<option>Year built</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
</select>
</div>
</div>
</li>
<li class="min_area style2 list-inline-item">
<div class="form-group">
<input type="text" class="form-control" placeholder="Min Area">
</div>
</li>
<li class="max_area list-inline-item">
<div class="form-group">
<input type="text" class="form-control" placeholder="Max Area">
</div>
</li>
<li>
<div id="accordion" class="panel-group">
<div class="panel">
<div class="panel-heading">
<h4 class="panel-title">
<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
</h4>
</div>
<div id="panelBodyRating" class="panel-collapse collapse">
<div class="panel-body row">
<div class="col-lg-12">
<ul class="ui_kit_checkbox selectable-list float-left fn-400">
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck4">
<label class="custom-control-label" for="customCheck4">Barbeque</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck10">
<label class="custom-control-label" for="customCheck10">Gym</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck5">
<label class="custom-control-label" for="customCheck5">Microwave</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck6">
<label class="custom-control-label" for="customCheck6">TV Cable</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck2">
<label class="custom-control-label" for="customCheck2">Lawn</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck11">
<label class="custom-control-label" for="customCheck11">Refrigerator</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck3">
<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
</div>
</li>
</ul>
<ul class="ui_kit_checkbox selectable-list float-right fn-400">
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck12">
 <label class="custom-control-label" for="customCheck12">WiFi</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck14">
<label class="custom-control-label" for="customCheck14">Sauna</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck7">
<label class="custom-control-label" for="customCheck7">Dryer</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck9">
<label class="custom-control-label" for="customCheck9">Washer</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck13">
<label class="custom-control-label" for="customCheck13">Laundry</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck8">
<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck15">
<label class="custom-control-label" for="customCheck15">Window Coverings</label>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</li>
<li>
<div class="search_option_button">
 <button type="submit" class="btn btn-block btn-thm">Search</button>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="breadcrumb_content style2 mb0-991">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active text-thm" aria-current="page">Simple Listing – Grid View</li>
</ol>
<h2 class="breadcrumb_title">Our Agencies</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-xl-4">
<div class="sidebar_listing_grid1 dn-991">
<div class="terms_condition_widget">
<h4 class="title">Featured Properties</h4>
<div class="sidebar_feature_property_slider">
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-1.jpg" alt="Renovated Apartment">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $121<small></small></a>
<a href="property/renovated-apartment-1.html"><h4 class="posr color-white">Renovated Apartment</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-4.jpg" alt="Luxury Family Home">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $800<small></small></a>
<a href="property/luxury-family-home.html"><h4 class="posr color-white">Luxury Family Home</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-6.jpg" alt="Gorgeous Villa Bay View">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $320<small></small></a>
<a href="property/gorgeous-villa-bay-view.html"><h4 class="posr color-white">Gorgeous Villa Bay View</h4></a>
</div>
</div>
 </div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-7.jpg" alt="EAST VILLAGE">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $260<small></small></a>
<a href="property/east-village.html"><h4 class="posr color-white">EAST VILLAGE</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-8.jpg" alt="PARIS GREENWICH VILLA">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $500<small></small></a>
<a href="property/paris-greenwich-villa.html"><h4 class="posr color-white">PARIS GREENWICH VILLA</h4></a>
</div>
</div>
</div>
</div>
<div class="item">
<div class="feat_property home7">
<div class="thumb">
<img class="img-whp" src="uploads/demo/property/property-9.jpg" alt="LUXURY SINGLE">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item"><a>For Buy</a></li>
<li class="list-inline-item"><a>Featured</a></li>
</ul>
<a class="fp_price" href="#"> $350<small></small></a>
<a href="property/luxury-single.html"><h4 class="posr color-white">LUXURY SINGLE</h4></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="terms_condition_widget">
<h4 class="title">Categories</h4>
<div class="widget_list">
<ul class="list_details">
<li><a href="propertybaa2.html?category_id=1"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">2 properties</span></a></li>
<li><a href="propertycfaa.html?category_id=2"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">4 properties</span></a></li>
<li><a href="propertyd7b8.html?category_id=3"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">2 properties</span></a></li>
<li><a href="property9738.html?category_id=4"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">2 properties</span></a></li>
<li><a href="property5125.html?category_id=5"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">1 properties</span></a></li>
</ul>
</div>
</div>
<div class="sidebar_feature_listing">
<h4 class="title">Recently Viewed</h4>
<div class="media">
<img class="align-self-start mr-3" src="uploads/demo/property/property-1.jpg" alt="Renovated Apartment" style="width: 90px; height: 80px">
<div class="media-body">
<a target="_blank" href="property/renovated-apartment-1.html">
<h5 class="mt-0 post_title">Renovated Apartment</h5>
</a>
<a href="property/renovated-apartment-1.html"> $121</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 3</li>
<li class="list-inline-item">Baths: 7</li>
<li class="list-inline-item">Sq Ft: 192 sqft</li>
</ul>
</div>
</div>
<div class="media">
<img class="align-self-start mr-3" src="uploads/demo/property/property-2.jpg" alt="Gorgeous Villa Bay View" style="width: 90px; height: 80px">
<div class="media-body">
<a target="_blank" href="property/gorgeous-villa-bay-view-1.html">
<h5 class="mt-0 post_title">Gorgeous Villa Bay View</h5>
</a>
<a href="property/gorgeous-villa-bay-view-1.html"> $900</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 6</li>
<li class="list-inline-item">Baths: 9</li>
<li class="list-inline-item">Sq Ft: 175 sqft</li>
</ul>
</div>
</div>
<div class="media">
<img class="align-self-start mr-3" src="uploads/demo/property/property-3.jpg" alt="Luxury Family Home" style="width: 90px; height: 80px">
<div class="media-body">
<a target="_blank" href="property/luxury-family-home-1.html">
<h5 class="mt-0 post_title">Luxury Family Home</h5>
</a>
<a href="property/luxury-family-home-1.html"> $650</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 10</li>
<li class="list-inline-item">Baths: 8</li>
<li class="list-inline-item">Sq Ft: 163 sqft</li>
</ul>
</div>
</div>
</div> </div>
</div>
<div class="col-md-12 col-lg-8">
<div class="row">
<div class="grid_list_search_result style2">
<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
<div class="left_area">
<p>4 Search results</p>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-4.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/real-estate-experts.html">
<h4>Real estate experts</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="592938322c353538193f30373d31362c2a3c773a3634">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
 <ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
</ul>
<a href="agency/real-estate-experts.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-3.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/modern-house-real-estate.html">
<h4>Modern House Real estate</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="9dedfcf6e8f1f1fcddfbf4f3f9f5f2e8eef8b3fef2f0">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
</ul>
<a href="agency/modern-house-real-estate.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-2.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/hight-rise-real-estate.html">
<h4>High-Rise Real Estate</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="eb9b8a809e87878aab8d82858f83849e988ec5888486">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
 </ul>
<a href="agency/hight-rise-real-estate.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agency">
<div class="thumb">
<img class="img-fluid" src="uploads/demo/agencies/agencies-1.jpg" alt="1.jpg">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<a href="agency/country-house-real-estate.html">
<h4>Country House Real Estate</h4>
</a>
<p class="text-thm">Agency</p>
<ul class="prop_details mb0">
<li><a href="#">Office: 134 456 3210</a></li>
<li><a href="#">Mobile: 891 456 9874</a></li>
<li><a href="#">Fax: 342 654 1258</a></li>
<li><a href="#">Email: <span><span class="__cf_email__" data-cfemail="acdccdc7d9c0c0cdeccac5c2c8c4c3d9dfc982cfc3c1">[email&#160;protected]</span></span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" target="_blank"></i></a></li>
</ul>
<a href="agency/country-house-real-estate.html">
<div class="fp_pdate float-right text-thm">View My Listing <i class="fa fa-angle-right"></i></div>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection