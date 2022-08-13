@extends('layout.master')
@section('content')
<section class="listing-title-area mt-2">
    <div class="container mt50">
    <div class="row mb30">
    <div class="col-lg-7 col-xl-8">
    <div class="single_property_title mt30-767">
    <h2>{{$estate->description}}</h2>
    <p>{{$estate->address1}},{{$estate->address2}},{{$estate->city}}</p>
    </div>
    </div>
    <div class="col-lg-5 col-xl-4">
    <div class="single_property_social_share">
    <div class="price float-left fn-400">
    <h2>{{$estate->price}}</h2>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-7 col-lg-8">
    <div class="row">
    <div class="col-lg-12">
    <div class="spls_style_two mb30-520">
    <a class="popup-img" href="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-1.jpg"><img class="img-fluid w100" src="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-1.jpg" alt="1.jpg"></a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-5 col-lg-4">
    <div class="row">
    <div class="col-sm-6 col-lg-6">
    <div class="spls_style_two mb30">
    <a class="popup-img" href="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-2.jpg"><img class="img-fluid w100" src="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-2.jpg" alt="2.jpg"></a>
    </div>
    </div>
    <div class="col-sm-6 col-lg-6">
    <div class="spls_style_two mb30">
    <a class="popup-img" href="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-3.jpg"><img class="img-fluid w100" src="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-3.jpg" alt="2.jpg"></a>
    </div>
    </div>
    <div class="col-sm-6 col-lg-6">
    <div class="spls_style_two mb30">
    <a class="popup-img" href="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-4.jpg"><img class="img-fluid w100" src="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-4.jpg" alt="2.jpg"></a>
    </div>
    </div>
    <div class="col-sm-6 col-lg-6">
    <div class="spls_style_two mb30">
    <a class="popup-img" href="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-5.jpg"><img class="img-fluid w100" src="https://findhouse.bookingcore.org/uploads/demo/property/gallery/property-gallery-5.jpg" alt="2.jpg"></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <section class="our-agent-single bgc-f7 pt-0 pb30-991">
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
    <div class="col-md-12 col-lg-8 mt50">
    <div class="row">
    <div class="col-lg-12">
    <div class="listing_single_description2 mt30-767 mb30-767">
    <div class="single_property_title">
    <h2>{{$estate->description}}</h2>
    <p>{{$estate->address1}},{{$estate->address2}},{{$estate->city}}</p>
    </div>
    <div class="single_property_social_share style2">
    <div class="price">
    <h2>{{$estate->price}}</h2>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="listing_single_description style2">
    <div class="lsd_list">
    <ul class="mb0">
    <li class="list-inline-item"><a href="#">{{$estate->category_id}}</a></li> <li class="list-inline-item"><a href="#">Beds: {{$estate->rooms_num}}</a></li>
    <li class="list-inline-item"><a href="#">Baths: {{$estate->bathrooms}}</a></li>
    <li class="list-inline-item"><a href="#">Sq m2: {{$estate->space}}</a></li>
    </ul>
    </div>
    {{-- <h4 class="mb30">Description</h4> --}}
    {{-- <div class="gpara second_para white_goverlay mt10 mb10"><p>{{$estate->description}}</p><p></p></div> --}}
    {{-- <div class="collapse" id="collapseExample">
    <div class="card card-body">
    <p class="mt10 mb10"><p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh's The Starry Night</li><li>Check out Campbell's Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul></p>
    </div>
    </div> --}}
    {{-- <p class="overlay_close">
    {{-- <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Show More <span class="flaticon-download-1 fz12"></span>
    </a> --}}
    {{-- </p>  --}}
    </div>
    </div>
    <div class="col-lg-12">
    <div class="additional_details">
    <div class="row">
    <div class="col-lg-12">
    <h4 class="mb15">Property Details</h4>
    </div>
     <div class="col-md-6 col-lg-6 col-xl-4">
    <dl class="inline">
    <dt><p>Property ID :</p></dt>
    <dd><p>{{$estate->id}}</p></dd>
    <dt><p>Price :</p></dt>
    <dd><p>{{$estate->price}}</p></dd>
    <dt><p>Property Size :</p></dt>
    <dd><p>{{$estate->space}}</p></dd>
    
    </dl>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-4">
    <dl class="inline">
    <dt><p>Bedrooms :</p></dt>
    <dd><p>{{$estate->bathrooms}}</p></dd>
    <dt><p>Bathrooms :</p></dt>
    <dd><p>{{$estate->bathrooms}}</p></dd>
    <dt><p>Garage :</p></dt>
    <dd><p>{{$estate->garage}}</p></dd>
    </dl>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-4">
    <dl class="inline">
        <dt><p>Property Status :</p></dt>
    <dd><p><span>{{$estate->status}}</span></p></dd>
    <dt><p>Neighbourhood:</p></dt>
    <dd><p>{{$estate->neighbourhood}}</p></dd>
    <dt><p>Year Built :</p></dt>
    <dd><p>{{$estate->year}}</p></dd>
    </dl>
    </div>
    </div>
    </div>
    </div>
{{--     
    <div class="col-lg-12">
    <div class="additional_details">
    <div class="row">
    <div class="col-lg-12">
    <h4 class="mb15">Additional details</h4>
    </div>
    <div class="col-md-6 col-lg-6">
    <dl class="inline">
    <dt><p>Deposit :</p></dt>
    <dd><p>20</p></dd>
    <dt><p>Pool Size :</p></dt>
    <dd><p><span>300 sqft</span></p></dd>
    <dt><p>Additional Rooms :</p></dt>
    <dd><p><span>Guest Bath</span></p></dd>
    </dl>
    </div>
    <div class="col-md-6 col-lg-6">
    <dl class="inline">
    <dt><p>Last remodel year :</p></dt>
    <dd><p>1987</p></dd>
    <dt><p>Amenities :</p></dt>
    <dd><p><span>Clubhouse</span></p></dd>
    <dt><p>Equipment :</p></dt>
    <dd><p><span>Grill - Gas</span></p></dd>
    </dl>
    </div>
    </div>
    </div>
    </div> --}}
    {{-- <div class="col-lg-12">
    <div class="application_statics mt30 g-attributes amenities attr-2">
    <div class="row">
    <div class="col-lg-12">
    <h4 class="mb10">Neighbourhood</h4>
     </div>
    <div class="col-sm-6 col-md-6 col-lg-4">
    <ul class="order_list list-inline-item">
    <li><a href="#">
    <span class="flaticon-tick"></span>
    {{$estate->neighbourhood}}
    </a></li>
    </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-4">
    <ul class="order_list list-inline-item">
    <li><a href="#">
    <span class="flaticon-tick"></span>
    {{$estate->neighbourhood}}
    </a></li>
    </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-4">
    <ul class="order_list list-inline-item">
    <li><a href="#">
    <span class="flaticon-tick"></span>
    {{$estate->neighbourhood}}
    </a></li>
    </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-4">
    <ul class="order_list list-inline-item">
    <li><a href="#">
    <span class="flaticon-tick"></span>
    {{$estate->neighbourhood}}
    </a></li>
    </ul>
    </div>
    </div>
    </div>
    </div> --}}

    {{-- <div class="col-lg-12">
    <div class="application_statics mt30">
    <h4 class="mb30">Location <small class="application_statics_location float-right">Jordan</small></h4>
    <div class="property_video p0">
    <div class="thumb">
    <div class="h400" id="map-canvas"></div>
    <div class="overlay_icon">
    <a href="#"><img class="map_img_icon" src="https://findhouse.bookingcore.org/findhouse/images/header-logo.png" alt="header-logo.png"></a>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    {{-- <div class="col-lg-12">
    <div class="shop_single_tab_content style2 mt30">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
    </li>
    </ul>
    <div class="tab-content" id="myTabContent2">
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
    <div class="property_video">
    <div class="thumb">
     <img class="pro_img img-fluid w100" src="https://findhouse.bookingcore.org/uploads/demo/property/property-3.jpg" alt="video">
    <div class="overlay_icon">
    <a class="video_popup_btn red popup-youtube" href="https://www.youtube.com/watch?v=UfEiKK-iX70"><span class="flaticon-play"></span></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    <div class="col-lg-12">
    <div class="product_single_content">
    <div class="mbp_pagination_comments">
    <ul class="total_reivew_view">
    <li class="list-inline-item sub_titles">
    1 Review
    </li>
    <li class="list-inline-item">
    <ul class="star_list">
    <ul>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    </ul>
    </ul>
    </li>
    <li class="list-inline-item avrg_review">(5.0 out of 5)</li>
    <li class="list-inline-item write_review">Write a Review</li>
    </ul>
    <div class="mbp_first media">
    <img class="mr-3" src="https://findhouse.bookingcore.org/uploads/demo/general/avatar.jpg" alt="Shushi Yashashree">
    <div class="media-body">
    <h4 class="sub_title mt-0">Shushi Yashashree
    <div class="sspd_review dif">
    <ul class="ml10">
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
    </ul>
    </div>
    </h4>
     <a class="sspd_postdate fz14" href="#">07/18/2022 02:30</a>
    <p class="mt10">Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te</p>
    </div>
    </div>
    <div class="custom_hr"></div>
    <div class="mbp_comment_form style2">
    <h4>Write a review</h4>
    <form class="comments_form review-form" id="review-form" action="/single/{{$estate->id}}" method="post">
        @csrf
    {{-- <input type="hidden" name="_token" value="Cf1oHX3d7SQCy9XuQkgmQjq3kpcrPjq87fyplGJ4"> --}}
    <div class="form-group review-items sspd_review">
    <div class="item">
    <input class="review_rate" type="hidden" name="review_rate">
    <div class="rates">
    <i class="fa fa-star-o"></i>
    <i class="fa fa-star-o"></i>
    <i class="fa fa-star-o"></i>
    <i class="fa fa-star-o"></i>
    <i class="fa fa-star-o"></i>
    </div>
    <label class="review_rating_para">Your Rating &amp; Review</label>

    </div>
    </div>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    {{-- <div class="form-group">
    <input type="text" class="form-control" id="review_title" name="review" aria-describedby="textHelp" placeholder="Review Title">
    </div> --}}
    <div class="form-group">
    <textarea class="form-control @error('review') is-invalid @enderror" name="review" rows="12" placeholder="Your Review"></textarea>
    </div>
    <input type="hidden" name="estate_id" value="{{$estate->id}}">
    {{-- <input type="hidden" name="review_service_type" value="property"> --}}
    <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span>
    </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    {{-- <div class="col-lg-12">
    <h4 class="mt30 mb30">Similar Properties</h4>
    </div> --}}
    {{-- <div class="col-lg-6">
    <div class="item">
    <div class="feat_property">
    <div class="thumb">
    <a class="thumb-image" href="https://findhouse.bookingcore.org/property/paris-greenwich-villa">
    <img class="img-whp" src="https://findhouse.bookingcore.org/uploads/demo/property/property-8.jpg" alt="property image">
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
    <a href="https://findhouse.bookingcore.org/property/paris-greenwich-villa">
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
    <li class="list-inline-item"><a href="https://findhouse.bookingcore.org/agent/18">
    <img class="avatar" src="https://findhouse.bookingcore.org/uploads/demo/general/avatar-5.jpg" alt="John Dakshi">
    </a></li>
    <li class="list-inline-item"><a href="https://findhouse.bookingcore.org/agent/18">John Dakshi</a></li>
    </ul>
    <div class="fp_pdate float-right">07/18/2022</div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}

    </div>
    </div>
    <div class="col-lg-4 col-xl-4 mt50">



    <div class="sidebar_listing_list">
    <div class="sidebar_advanced_search_widget">
    <div class="sl_creator">
    <h4 class="mb25">Listed By</h4>
    <div class="media">
    <a href="https://findhouse.bookingcore.org/agent/1" class="c-inherit">
    <img class="mr-3" src="https://findhouse.bookingcore.org/uploads/demo/general/avatar.jpg" alt="System Admin">
    </a>
    <div class="media-body">
    <h5 class="mt-0 mb0"><a href="https://findhouse.bookingcore.org/agent/1" class="c-inherit">System Admin</a></h5>
    <p class="mb0">112 666 888</p>
    <p class="mb0"><a href="https://findhouse.bookingcore.org/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f4f1f8fcfbd5f1f0e3bbf6faf8">[email&#160;protected]</a></p>
    <a class="text-thm" href="https://findhouse.bookingcore.org/agent/1">View My Listing</a>
    </div>
    </div>
    </div>
    <form action="https://findhouse.bookingcore.org/agent/contactAgent" method="POST" class="agent_contact_form">
    <input type="hidden" name="_token" value="Cf1oHX3d7SQCy9XuQkgmQjq3kpcrPjq87fyplGJ4"> <ul class="sasw_list mb0">
    <li class="search_area">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Your Name" name="name">
    </div>
    </li>
    <li class="search_area">
    <div class="form-group">
    <input type="number" class="form-control" placeholder="Phone" name="phone">
    </div>
    </li>
    <li class="search_area">
    <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    </li>
    <li class="search_area">
    <div class="form-group">
    <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="Your Message"></textarea>
    </div>
    </li>
    <li>
    <input type="hidden" name="vendor_id" value="1">
    <input type="hidden" name="object_id" value="1">
    <input type="hidden" name="object_model" value="property">
    </li>
    <li>
    <div class="search_option_button">
    <button type="submit" class="btn btn-block btn-thm">Contact</button>
    </div>
    </li>
    </ul>
    <div class="form-mess"></div>
    </form>
    </div>
    </div> 

{{-- 

    <div class="sidebar_listing_list dn-991">
    <div class="sidebar_advanced_search_widget">
    <ul class="sasw_list mb0">
    <form action="https://findhouse.bookingcore.org/property" class="form bravo_form" method="get">
    <input type="hidden" name="filter" value="">
    <input type="hidden" name="layout" value="4">
    <input type="hidden" name="type" value="">
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
    </div>  --}}
    
    
    {{-- <div class="terms_condition_widget">
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
    <a class="fp_price" href="#"> $121<small></small></a>
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
    <a class="fp_price" href="#"> $800<small></small></a>
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
    <a class="fp_price" href="#"> $320<small></small></a>
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
    <a class="fp_price" href="#"> $260<small></small></a>
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
    <a class="fp_price" href="#"> $500<small></small></a>
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
    <a class="fp_price" href="#"> $350<small></small></a>
    <a href="https://findhouse.bookingcore.org/property/luxury-single"><h4 class="posr color-white">LUXURY SINGLE</h4></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    {{-- <div class="terms_condition_widget">
    <h4 class="title">Categories</h4>
    <div class="widget_list">
    <ul class="list_details">
    <li><a href="https://findhouse.bookingcore.org/property?category_id=1"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">2 properties</span></a></li>
    <li><a href="https://findhouse.bookingcore.org/property?category_id=2"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">4 properties</span></a></li>
    <li><a href="https://findhouse.bookingcore.org/property?category_id=3"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">2 properties</span></a></li>
    <li><a href="https://findhouse.bookingcore.org/property?category_id=4"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">2 properties</span></a></li>
    <li><a href="https://findhouse.bookingcore.org/property?category_id=5"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">1 properties</span></a></li>
    </ul>
    </div>
    </div> --}}


    {{-- <div class="sidebar_feature_listing">
    <h4 class="title">Recently Viewed</h4>
    <div class="media">
    <img class="align-self-start mr-3" src="https://findhouse.bookingcore.org/uploads/demo/property/property-1.jpg" alt="Renovated Apartment" style="width: 90px; height: 80px">
    <div class="media-body">
    <a target="_blank" href="https://findhouse.bookingcore.org/property/renovated-apartment-1">
    <h5 class="mt-0 post_title">Renovated Apartment</h5>
    </a>
    <a href="https://findhouse.bookingcore.org/property/renovated-apartment-1"> $121</a>
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
    <a href="https://findhouse.bookingcore.org/property/gorgeous-villa-bay-view-1"> $900</a>
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
    <a href="https://findhouse.bookingcore.org/property/luxury-family-home-1"> $650</a>
    <ul class="mb0">
    <li class="list-inline-item">Beds: 10</li>
    <li class="list-inline-item">Baths: 8</li>
    <li class="list-inline-item">Sq Ft: 163 sqft</li>
    </ul>
    </div>
    </div>
    </div>  --}}

</div>
    </div>
    </div>
    </section>
    
@endsection