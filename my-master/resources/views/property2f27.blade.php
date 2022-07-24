@extends('layout.master')
@section('content')
<div id="page" class="stylehome1 h0">
<div class="mobile-menu">
<div class="header stylehome1">
<div class="main_logo_home2 text-center">
<img class="nav_logo_img img-fluid mt20" src="uploads/demo/general/header-logo2.png" alt="FindHouse">
<span class="mt20">FindHouse</span>
</div>
<ul class="menu_bar_home2">
<li class="list-inline-item list_s"><a href="login21b9.html"><span class="flaticon-user"></span></a></li>
<li class="list-inline-item"><a href="#menu"><span></span></a></li>
</ul>
</div>
</div>
<nav id="menu" class="stylehome1 mm-menu_offcanvas">
<ul>
<li class=" depth-0"><a target="" href="index.html">Home</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="index.html">Home 1</a></li><li class=" depth-1"><a target="" href="page/home-page-3.html">Home 3</a></li><li class=" depth-1"><a target="" href="page/home-page-5.html">Home 5</a></li><li class=" depth-1"><a target="" href="page/home-page-6.html">Home 6</a></li><li class=" depth-1"><a target="" href="page/home-page-8.html">Home 8</a></li><li class=" depth-1"><a target="" href="page/home-page-10.html">Home 10</a></li></ul></li><li class=" active  depth-0"><a target="" href="#">Property</a><ul class="children-menu menu-dropdown"><li class=" active depth-1"><a target="" href="property.html">Property List</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property659a.html?layout=1">Property List V1</a></li><li class=" depth-2"><a target="" href="property6d5a.html?layout=2">Property List V2</a></li></ul></li><li class=" depth-1"><a target="" href="property/renovated-apartment-1.html">Property Detail</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property/renovated-apartment-1659a.html?layout=1">Property Detail V1</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-16d5a.html?layout=2">Property Detail V2</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1de65.html?layout=3">Property Detail V3</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1d787.html?layout=4">Property Detail V4</a></li></ul></li></ul></li><li class=" depth-0"><a target="" href="#">Agencies</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="agency.html">Agencies</a></li><li class=" depth-1"><a target="" href="agency/real-estate-experts.html">Agency Detail</a></li><li class=" depth-1"><a target="" href="agent.html">Agent List</a></li><li class=" depth-1"><a target="" href="agent/1.html">Agent Detail</a></li></ul></li><li class=" depth-0"><a target="" href="#">Page</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="news.html">News</a></li><li class=" depth-1"><a target="" href="news/city-spotlight-philadelphia.html">News Detail</a></li><li class=" depth-1"><a target="" href="contact.html">Contact</a></li><li class=" depth-1"><a target="" href="page/about-us.html">About</a></li><li class=" depth-1"><a target="" href="page/become-a-agent.html">Become a agent</a></li></ul></li> <li><a href="login.html"><span class="flaticon-user"></span> Login</a></li>
<li><a href="register.html"><span class="flaticon-edit"></span> Register</a></li>
<li><li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
JPY
<i class="fa fa-angle-down d-none"></i>
</a>
<ul class=" text-left width-auto">
<li>
<a href="property2f27.html?agent_id=12&amp;type=list&amp;set_currency=eur" class="is_login">
EUR
</a>
</li>
<li>
<a href="property2f27.html?agent_id=12&amp;type=list&amp;set_currency=usd" class="is_login">
USD
</a>
</li>
</ul>
</li>
</li>
<li><li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
<span class="flag-icon flag-icon-gb"></span>
English
</a>
<ul class=" text-left">
<li>
<a href="ja/property2f27.html?agent_id=12&amp;type=list&amp;set_lang=ja" class="is_login">
<span class="flag-icon flag-icon-jp"></span>
Japanese
</a>
</li>
<li>
<a href="egy/property2f27.html?agent_id=12&amp;type=list&amp;set_lang=egy" class="is_login">
<span class="flag-icon flag-icon-eg"></span>
Egyptian
</a>
</li>
</ul>
</li>
</li>
</ul>
</nav>
</div>
<section class="our-listing bgc-f7 pb30-991">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div class="listing_sidebar dn db-991">
<div class="sidebar_content_details style3">

<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
<div class="sidebar_advanced_search_widget">
<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right"><small>Hide
Filter</small> <span class="flaticon-close"></span></a></h4>
<ul class="sasw_list style2 mb0">
<form action="https://findhouse.bookingcore.org/property" class="form bravo_form" method="get">
<input type="hidden" name="filter" value="">
 <input type="hidden" name="layout" value="">
<input type="hidden" name="type" value="list">
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" id="ServiceName" name="service_name" placeholder="Property Name" value="">
</div>
</li> <li>
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
<select name="category_id" class="selectpicker w100 show-tick">
<option value="0">Property Type</option>
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
<div class="g-button-submit">
<button class="btn btn-primary btn-search" type="submit">Search</button>
</div>
</form>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="dn db-991">
<div id="main2">
<span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
</div>
</div>
<div class="breadcrumb_content style2 mt30-767 mb30-767">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active text-thm" aria-current="page">List Property</li>
</ol>
<h2 class="breadcrumb_title">List Property</h2>
</div>
</div>
<div class="col-lg-6">
<div class="listing_list_style mb20-xsd tal-991">
<ul class="mb0">
<li class="list-inline-item  link_for_grid_view" onclick="javascript:window.location='propertyd560.html?agent_id=12&amp;type=grid'"><a href="javascript:void(0)"><span class="fa fa-th-large"></span></a></li>
<li class="list-inline-item active link_for_list_view" onclick="javascript:window.location='property2f27.html?agent_id=12&amp;type=list'"><a href="javascript:void(0)"><span class="fa fa-th-list"></span></a></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-xl-4">
<div class="sidebar_listing_list dn-991">
<div class="sidebar_advanced_search_widget">
<ul class="sasw_list mb0">
<form action="https://findhouse.bookingcore.org/property" class="form bravo_form" method="get">
<input type="hidden" name="filter" value="">
<input type="hidden" name="layout" value="">
<input type="hidden" name="type" value="list">
<li class="search_area">
<div class="form-group">
<input type="text" class="form-control" id="ServiceName" name="service_name" placeholder="Property Name" value="">
</div>
</li> <li>
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
<select name="property_type" class="selectpicker w100 show-tick">
<option value="0">Property Type</option>
<option value="1">For Buy</option>
<option value="2">For Rent</option>
</select>
</div>
</div>
</li>
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
<li>
<div class="search_option_button">
<button type="submit" class="btn btn-block btn-thm">Search</button>
 </div>
</li>
</form>
</ul>
</div>
</div> <div class="terms_condition_widget">
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
<a class="fp_price" href="#"> 13.194 ¥<small></small></a>
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
<a class="fp_price" href="#"> 87.230 ¥<small></small></a>
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
<a class="fp_price" href="#"> 34.892 ¥<small></small></a>
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
<a class="fp_price" href="#"> 28.350 ¥<small></small></a>
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
<a class="fp_price" href="#"> 54.519 ¥<small></small></a>
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
<a class="fp_price" href="#"> 38.163 ¥<small></small></a>
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
<a href="property/renovated-apartment-1.html"> 13.194 ¥</a>
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
<a href="property/gorgeous-villa-bay-view-1.html"> 98.134 ¥</a>
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
<a href="property/luxury-family-home-1.html"> 70.875 ¥</a>
<ul class="mb0">
<li class="list-inline-item">Beds: 10</li>
<li class="list-inline-item">Baths: 8</li>
<li class="list-inline-item">Sq Ft: 163 sqft</li>
</ul>
</div>
</div>
</div> </div>
<div class="col-md-12 col-lg-8">
<div class="bravo-list-item">
<div class="row">
<div class="grid_list_search_result">
<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
<div class="left_area tac-xsd">
<p>
1 property found
</p>
</div>
</div>
<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
<div class="right_area text-right tac-xsd">
<form method="GET">
<ul>
<li class="list-inline-item"><span class="shrtby">Sort by:</span>
<select value="" onchange="changeFilterProperty(this)" name="filter" class="selectpicker property-select-filter show-tick">
<option data-url="https://findhouse.bookingcore.org/property?agent_id=12&amp;type=list&amp;filter=new" value="new">Newest</option>
<option data-url="https://findhouse.bookingcore.org/property?agent_id=12&amp;type=list&amp;filter=old" value="old">Oldest</option>
<option data-url="https://findhouse.bookingcore.org/property?agent_id=12&amp;type=list&amp;filter=price_high" value="price_high">Price [high to low]</option>
<option data-url="https://findhouse.bookingcore.org/property?agent_id=12&amp;type=list&amp;filter=price_low" value="price_low">Price [low to high]</option>
<option data-url="https://findhouse.bookingcore.org/property?agent_id=12&amp;type=list&amp;filter=name_high" value="name_high">Name [a-&gt;z]</option>
<option data-url="https://findhouse.bookingcore.org/property?agent_id=12&amp;type=list&amp;filter=name_low" value="name_low">Name [z-&gt;a]</option>
</select>
</li>
</ul>
</form>
</div>
</div>
</div>
</div>
<div class="list-item">
<div class="row">
<div class="col-lg-12  display_type_list">
<div class="feat_property list">
<div class="thumb">
<a class="thumb-image" target="_blank" href="property/stay-greenwich-village.html">
<img class="img-whp" src="uploads/demo/property/property-11.jpg" alt="property image">
</a>
<div class="property-action">
<a class="service-wishlist " data-id="11" data-type="property"><i class="fa fa-heart"></i></a>
</div>
</div>
<div class="details">
<div class="tc_content">
<div class="dtls_headr">
<ul class="tag">
<li class="list-inline-item"><a>For Buy</a></li>
</ul>
<a class="fp_price" href="#"> 16.356 ¥</a>
</div>
<p class="text-thm">Modern Villa</p>
<a target="_blank" href="property/stay-greenwich-village.html">
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
<div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 mt20">
<div class="mbp_pagination">
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection