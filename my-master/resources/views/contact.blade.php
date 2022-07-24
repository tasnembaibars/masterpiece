@extends('layout.master')
@section('content')
<section class="inner_page_breadcrumb" style="background: url('uploads/demo/general/inner-pagebg.jpg')">
<div class="container">
<div class="row">
<div class="col">
<div class="breadcrumb_content">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">
<a href="contact.html">contact</a>
</li>
</ol>
<h4 class="breadcrumb_title">Contact Us</h4>
</div>
</div>
</div>
</div>
</section>

<section class="our-contact pb0 bgc-f7">
<div class="container">
<div class="row">
<div class="col-lg-7 col-xl-8">
<div class="form_grid">
<h4 class="mb5">We&#039;d love to hear from you</h4>
<p>Send us a message and we&#039;ll respond as soon as possible</p>
<form class="contact_form bravo-contact-block-form" id="contact_form" name="contact_form" action="https://findhouse.bookingcore.org/contact/store" method="post" novalidate="novalidate">
<input type="hidden" name="_token" value="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input id="form_name" name="name" class="form-control" type="text" placeholder="Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input id="form_email" name="email" class="form-control required email" type="email" placeholder="Email">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input id="form_phone" name="phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input id="form_subject" name="subject" class="form-control required" required="required" type="text" placeholder="Subject">
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<textarea id="form_message" name="message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
</div>
<div class="form-group mb0">
<button type="submit" class="btn btn-lg btn-thm">Send Message</button>
</div>
</div>
</div>
<div class="form-mess"></div>
</form>
</div>
</div>
<div class="col-lg-5 col-xl-4">
<div class="contact_localtion">
<div class="content_list">
<h5>Contact Us</h5>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst.
</p>
</div>
<div class="content_list">
<h5>Address</h5>
<p>
2301 Ravenswood Rd Madison, WI 53711
</p>
</div>
<div class="content_list">
<h5>Phone</h5>
<p>
(315) 905-2321
</p>
</div>
<div class="content_list">
<h5>Mail</h5>
<p>
<a href="#" class="icofont-facebook">
<span class="__cf_email__" data-cfemail="681c1a09011c0105090600060007040d1e010d05280f05090104460b0705">[email&#160;protected]</span>
</a>
</p>
</div>
<div class="content_list">
<h5>Skype</h5>
<p>
findhouse.com
</p>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid p0 mt50">
<div class="row">
<div class="col-lg-12">
<div class="h600" id="map-canvas"></div>
</div>
</div>
</div>
</section>
@endsection

