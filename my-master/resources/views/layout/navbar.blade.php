<!DOCTYPE html>
<html lang="en" class="">

<!-- Mirrored from findhouse.bookingcore.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 13:27:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- auth test --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
{{-- end auth test --}}
<meta name="csrf-token" content="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou">
<link rel="icon" type="image/png" href="uploads/demo/general/favicon.png" />
<title>Home Page</title>
<meta name="description" content="" />
<meta property="og:url" content="index.html" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Home Page" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Home Page">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<link rel="canonical" href="index.html" />
<link href="../libs/flags/css/flag-icon.min.css" rel="stylesheet">
<link rel="stylesheet" href="../findhouse/css/bootstrap.min.css">
<link rel="stylesheet" href="../findhouse/css/style.css">

<link rel="stylesheet" href="../findhouse/css/responsive.css">
<link rel="stylesheet" href="../dist/frontend/css/frontend.css">


<link rel="dns-prefetch" href="http://fonts.gstatic.com/">
<script>
        var bookingCore = {
            url:'https://findhouse.bookingcore.org',
            url_root:'https://findhouse.bookingcore.org',
            booking_decimals:0,
            thousand_separator:'.',
            decimal_separator:',',
            currency_position:'left',
            currency_symbol:'$',
			currency_rate:'1',
            date_format:'MM/DD/YYYY',
            map_provider:'gmap',
            map_gmap_key:'',
            routes:{
                login:'https://findhouse.bookingcore.org/login',
                register:'https://findhouse.bookingcore.org/register',
            },
            currentUser:0,
            rtl: false
        };
        var i18n = {
            warning:"Warning",
            success:"Success",
        };
        var daterangepickerLocale = {
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "first_day_of_week": 1,
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ],
        };
    </script>

<link href="../custom-css.css" rel="stylesheet">
</head>
<body class="frontend-page  ">
<div class="wrapper  mt-0 pt-0">
<div class="preloader d-none"></div>

<header class="header-nav menu_style_home_one navbar-scrolltofixed  stricky main-menu   header-transparent ">
<div class="container-fluid p0">

<nav>

<div class="menu-toggle">
<img class="nav_logo_img img-fluid" src="../uploads/demo/general/header-logo2.png" alt="FindHouse">
<button type="button" id="menu-btn">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<a href="/" class="navbar_brand float-left dn-smd">
<img class="logo img-fluid" src="../uploads/demo/general/header-logo2.png"   alt="FindHouse">
{{-- <img class="logo2 img-fluid" src="uploads/demo/general/header-logo2.png" alt="FindHouse"> --}}
<span>BaytKom</span>
</a>


<ul id="respMenu" class="ace-responsive-menu text-right " data-menu-style="horizontal">
<li class=" depth-0"><a target="" href="/">Home</a></li>
<li class=" depth-0"><a target="" href="/property2">Property</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="/property2">Property List</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href=""></a></li><li class=" depth-2"><a target="" href=""></a></li></ul></li><li class=" depth-1"><a target="" href=""></a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href=""></a></li><li class=" depth-2"><a target="" href=""></a></li><li class=" depth-2"><a target="" href=""></a></li><li class=" depth-2"><a target="" href=""></a></li></ul></li></ul></li><li class=" depth-0"><a target="" href="/agency">Agency</a></li><li class="dropdown">
    <li class=" depth-0"><a target="" href="/about">About</a></li>
    <li class=" depth-0"><a target="" href="/contact">Contact</a></li>
    <li class=" depth-0"><a target="" href="/">Page</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="news.html">News</a></li><li class=" depth-1"><a target="" href="/becomeagent">Become a agent</a></li></ul></li> 
    <a href="#" data-toggle="dropdown" class="is_login">

<i class="fa fa-angle-down d-none"></i>
</a>
{{-- <ul class="dropdown-menu text-left width-auto"> --}}
{{-- <li>
<a href="indexe8d3.html?set_currency=eur" class="is_login">

</a>
</li> --}}
{{-- <li>
<a href="index34ee.html?set_currency=jpy" class="is_login">

</a>
</li> --}}
{{-- </ul> --}}
</li>
<li class="dropdown">
    <a className="nav-link"  style="color:grey,margin-left:40px"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg></a>
      <ul class="children-menu menu-dropdown">
      @guest
      @if (Route::has('login'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
      @endif
      
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
      </ul>
    </li>

      @else
      {{-- <li class="nav-item dropdown"> --}}
<li class="dropdown">

          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
      
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">
                  {{ __('Profile') }}
              </a>
              @if (Auth::user()->role_type == 1)
              <a class="dropdown-item" href="/admin">
                  {{ __('Admin Dashboard') }}
              </a>
         @endif
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                                                                                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
      
              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  class="d-none">
                  @csrf
              </form>
          </div>
      </li>
      @endguest
    

{{-- <li class="list-inline-item">
<a href="/login" class="btn flaticon-user"> <span class="dn-lg" data-toggle="modal" data-target="#login"></span> </a><a href="/register"><span data-toggle="modal" data-target="#register"></span> </a>
</li> --}}

{{-- <li class="list-inline-item add_listing"><a href="login0ba4.html"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li> --}}
</ul>
</nav>
</div>
</header>

<div id="page" class="stylehome1 h0">
<div class="mobile-menu">
<div class="header stylehome1">
<div class="main_logo_home2 text-center">
<img class="nav_logo_img img-fluid mt20" src="../uploads/demo/general/header-logo2.png" alt="FindHouse">
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
<li class=" depth-0"><a target="" href="/">Home</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="index.html">Home 1</a></li><li class=" depth-1"><a target="" href="page/home-page-3.html">Home 3</a></li><li class=" depth-1"><a target="" href="page/home-page-5.html">Home 5</a></li><li class=" depth-1"><a target="" href="page/home-page-6.html">Home 6</a></li><li class=" depth-1"><a target="" href="page/home-page-8.html">Home 8</a></li><li class=" depth-1"><a target="" href="page/home-page-10.html">Home 10</a></li></ul></li><li class=" depth-0"><a target="" href="#">Property</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="property.html">Property List</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property659a.html?layout=1">Property List V1</a></li><li class=" depth-2"><a target="" href="property6d5a.html?layout=2">Property List V2</a></li></ul></li><li class=" depth-1"><a target="" href="property/renovated-apartment-1.html">Property Detail</a><ul class="children-menu menu-dropdown"><li class=" depth-2"><a target="" href="property/renovated-apartment-1659a.html?layout=1">Property Detail V1</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-16d5a.html?layout=2">Property Detail V2</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1de65.html?layout=3">Property Detail V3</a></li><li class=" depth-2"><a target="" href="property/renovated-apartment-1d787.html?layout=4">Property Detail V4</a></li></ul></li></ul></li><li class=" depth-0"><a target="" href="#">Agencies</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="agency.html">Agencies</a></li><li class=" depth-1"><a target="" href="agency/real-estate-experts.html">Agency Detail</a></li><li class=" depth-1"><a target="" href="agent.html">Agent List</a></li><li class=" depth-1"><a target="" href="agent/1.html">Agent Detail</a></li></ul></li><li class=" depth-0"><a target="" href="#">Page</a><ul class="children-menu menu-dropdown"><li class=" depth-1"><a target="" href="news.html">News</a></li><li class=" depth-1"><a target="" href="news/city-spotlight-philadelphia.html">News Detail</a></li><li class=" depth-1"><a target="" href="contact.html">Contact</a></li><li class=" depth-1"><a target="" href="page/about-us.html">About</a></li><li class=" depth-1"><a target="" href="page/become-a-agent.html">Become a agent</a></li></ul></li> <li><a href="login.html"><span class="flaticon-user"></span> Login</a></li>
<li><a href="/register"><span class="flaticon-edit"></span> Register</a></li>
<li><li class="dropdown">
<a href="#" data-toggle="dropdown" class="is_login">
USD
<i class="fa fa-angle-down d-none"></i>
</a>
<ul class=" text-left width-auto">
<li>
<a href="indexe8d3.html?set_currency=eur" class="is_login">
EUR
</a>
</li>
<li>
<a href="index34ee.html?set_currency=jpy" class="is_login">
JPY
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
<a href="indexec6b.html?set_lang=ja" class="is_login">
<span class="flag-icon flag-icon-jp"></span>
Japanese
</a>
</li>
<li>
<a href="index628c.html?set_lang=egy" class="is_login">
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