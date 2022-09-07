@extends('layout.master')
@section('content')
<div class="page-template-content ">
<div class="container">
<div class="bravo-vendor-form-register py-5 ">
<div class="row">
<div class="col-12 col-lg-5">
<h2>Join Our Family </h2>
<p class="sub-heading">Join our community and start sharing your agencies estates here.</p>
<form class="form bravo-form-register-vendor" method="post" action="/becomeagent">
    @csrf
{{-- <input type="hidden" name="_token" value="Mx8tV3YRdLdtHnRhK3OADMUJKZXT2VswAa0X5Oou"> --}}
@if ($message = Session::get('message'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif
<div class="form-group">
    <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Contact Name">
    <span class="invalid-feedback error error-first_name"></span>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Contact Email">
        <span class="invalid-feedback error error-email"></span>
        </div>
    <div class="form-group">
        <input type="text" class="form-control" name="phone" autocomplete="off" placeholder="Contact Phone">
        <span class="invalid-feedback error error-phone"></span>
        </div>
      
<div class="form-group">
<input type="text" class="form-control" name="agency_name" autocomplete="off" placeholder="Your Agency Name">
<span class="invalid-feedback error error-first_name"></span>
</div>
<div class="form-group">
<textarea type="text-area" class="form-control" name="agency_desc" autocomplete="off" placeholder="describe your agency"></textarea>
<span class="invalid-feedback error error-last_name"></span>
</div>
<div class="form-group">
    <small>subscription you plan to have with us</small>

    <div class="candidate_revew_select">
        <select name="subscription" class="selectpicker w100 show-tick">
     
              <option disabled selected hidden > Select subscription type</option>
              <option value="monthly" > monthly subscription - 200 JD</option>
              <option value="3months"> 3 months subscription - 550 JD</option>
              <option value="annual"> annual subscription - 1200 JD</option>
       
        </select>
        </div>
        <span class="invalid-feedback error error-business_name"></span>
</div>

{{-- <div class="form-group">
<input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
<span class="invalid-feedback error error-password"></span>
</div> --}}
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
Send application
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