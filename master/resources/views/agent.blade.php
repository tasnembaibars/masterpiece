@extends('layout.master')
@section('content')
<section class="our-listing bgc-f7 pb30-991">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="listing_sidebar dn db-991">
<div class="sidebar_content_details style3">

<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
<div class="sidebar_advanced_search_widget">
<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
<ul class="sasw_list style2 mb0">
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="category_id" class="selectpicker w100 show-tick">
<option value="0">Category</option>
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
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active text-thm" aria-current="page">All Agent</li>
</ol>
<h2 class="breadcrumb_title">All Agents</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-xl-4">
<div class="sidebar_listing_grid1 dn-991">
<div class="sidebar_listing_list">
<div class="sidebar_advanced_search_widget">
<h4 class="mb25">Find Agent</h4>
<form>
<ul class="sasw_list mb0">
<li class="search_area">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter Agent Name">
</div>
</li>
<li>
<div class="search_option_two">
<div class="candidate_revew_select">
<select name="category_id" class="selectpicker w100 show-tick">
<option value="0">Category</option>
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
<div class="search_option_button">
<button type="submit" class="btn btn-block btn-thm">Search</button>
</div>
</li>
</ul>
</form>
</div>
</div>
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
<p>10 Search results</p>
</div>
</div>
<div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
<div class="right_area style2 text-right">
<form>
<ul>
<li class="list-inline-item"><span class="shrtby">Sort by:</span>
<select onchange="this.form.submit()" name="filter" class="selectpicker show-tick">
<option value="a-z">Name ( a -&gt; z )</option>
<option value="z-a">Name ( z -&gt; a )</option>
</select>
</li>
</ul>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agent">
<div class="thumb">
<img class="img-whp" src="uploads/demo/general/avatar-3.jpg" alt="James Alia">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">0 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<h4><a href="agent/17.html">James Alia</a></h4>
<p class="text-thm">Agent</p>
<ul class="prop_details mb0">
<li><a href="#">Mobile: 888 999 777</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="97d6fbfef6d7f3f2e1b9f4f8fa">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<div class="fp_pdate float-right text-thm"><a href="agent/17.html">View My Listing <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agent">
<div class="thumb">
<img class="img-whp" src="uploads/demo/general/avatar-2.jpg" alt="Paul Amora">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">0 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<h4><a href="agent/11.html">Paul Amora</a></h4>
<p class="text-thm">Agent</p>
<ul class="prop_details mb0">
<li><a href="#">Mobile: 888 999 777</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="f7b69a988596b7939281d994989a">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<div class="fp_pdate float-right text-thm"><a href="agent/11.html">View My Listing <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agent">
<div class="thumb">
<img class="img-whp" src="uploads/demo/general/avatar-5.jpg" alt="John Dakshi">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">2 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<h4><a href="agent/18.html">John Dakshi</a></h4>
<p class="text-thm">Agent</p>
<ul class="prop_details mb0">
<li><a href="#">Mobile: 888 999 777</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="d296b3b9a1babb92b6b7a4fcb1bdbf">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<div class="fp_pdate float-right text-thm"><a href="agent/18.html">View My Listing <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agent">
<div class="thumb">
<img class="img-whp" src="uploads/demo/general/avatar-5.jpg" alt="Richard Davina">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">1 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<h4><a href="agent/12.html">Richard Davina</a></h4>
<p class="text-thm">Agent</p>
<ul class="prop_details mb0">
<li><a href="#">Mobile: 888 999 777</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="b3f7d2c5daddd2f3d7d6c59dd0dcde">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<div class="fp_pdate float-right text-thm"><a href="agent/12.html">View My Listing <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agent">
<div class="thumb">
<img class="img-whp" src="uploads/demo/general/avatar.jpg" alt="William Diana">
<div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">3 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<h4><a href="agent/9.html">William Diana</a></h4>
<p class="text-thm">Agent</p>
<ul class="prop_details mb0">
<li><a href="#">Mobile: 888 999 777</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="490d20282728092d2c3f672a2624">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<div class="fp_pdate float-right text-thm"><a href="agent/9.html">View My Listing <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="feat_property home7 agent">
<div class="thumb">
<img class="img-whp" src="uploads/demo/general/avatar-3.jpg" alt="Bush Elise">
 <div class="thmb_cntnt">
<ul class="tag mb0">
<li class="list-inline-item dn"></li>
<li class="list-inline-item"><a href="#">1 Listings</a></li>
</ul>
</div>
</div>
<div class="details">
<div class="tc_content">
<h4><a href="agent/15.html">Bush Elise</a></h4>
<p class="text-thm">Agent</p>
<ul class="prop_details mb0">
<li><a href="#">Mobile: 888 999 777</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="1451787d6771547071623a777b79">[email&#160;protected]</span></a></li>
</ul>
</div>
<div class="fp_footer">
<ul class="fp_meta float-left mb0">
<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
</ul>
<div class="fp_pdate float-right text-thm"><a href="agent/15.html">View My Listing <i class="fa fa-angle-right"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 mt20">
<div class="mbp_pagination">
<nav>
<ul class="pagination">
<li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
<span class="page-link" aria-hidden="true">&lsaquo;</span>
</li>
<li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
<li class="page-item"><a class="page-link" href="agent4658.html?page=2">2</a></li>
<li class="page-item">
<a class="page-link" href="agent4658.html?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
</li>
</ul>
</nav>
</div>
</div>
</div> </div>
</div>
</div>
</section>
@endsection