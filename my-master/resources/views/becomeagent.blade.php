@extends('layout.master')
@section('content')
<div class="page-template-content ">
<div class="container">
<div class="bravo-vendor-form-register py-5 ">
<div class="row">
<div class="col-12 col-lg-5">
<h2>Become a agent</h2>
<p class="sub-heading">Join our community to unlock your greatest asset and welcome paying guests into your home.</p>
<form class="form bravo-form-register-vendor" method="post" action="https://findhouse.bookingcore.org/agent/register">
<input type="hidden" name="_token" value="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou">
<div class="form-group">
<input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="First Name">
<span class="invalid-feedback error error-first_name"></span>
</div>
<div class="form-group">
<input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="Last Name">
<span class="invalid-feedback error error-last_name"></span>
</div>
<div class="form-group">
<input type="text" class="form-control" name="business_name" autocomplete="off" placeholder="Business Name">
<span class="invalid-feedback error error-business_name"></span>
</div>
<div class="form-group">
<input type="text" class="form-control" name="phone" autocomplete="off" placeholder="Phone">
<span class="invalid-feedback error error-phone"></span>
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email">
<span class="invalid-feedback error error-email"></span>
</div>
<div class="form-group">
<input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
<span class="invalid-feedback error error-password"></span>
</div>
<div class="form-group">
<label for="term">
<input id="term" type="checkbox" name="term" class="mr5">
I have read and accept the <a href='#' target='_blank'>Terms and Privacy Policy</a>
<span class="checkmark fcheckbox"></span>
</label>
<div><span class="invalid-feedback error error-term"></span></div>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary form-submit">
Sign Up
<span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true" style="display: none"></span>
</button>
</div>
<div class="message-error"></div>
</form>
</div>
<div class="col-md-1"></div>
<div class="col-12 col-lg-6">
<div class="bravo_gallery">
<div class="btn-group">
<span class="btn-transparent has-icon bravo-video-popup" data-toggle="modal" data-src="https://www.youtube.com/embed/AmZ0WrEaf34" data-target="#video-register">
<img src="../uploads/demo/general/thumb-vendor-register.jpg" class="img-fluid" alt="Youtube">
<div class="play-icon">
<img src="../module/vendor/img/ico-play.svg" alt="Play background" class="img-fluid play-image">
</div>
</span>
</div>
<div class="modal fade" id="video-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content p-0">
<div class="modal-body">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item bravo_embed_video" src="#" allowscriptaccess="always" allow="autoplay"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection