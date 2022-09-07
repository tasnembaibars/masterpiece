{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href={{asset("form/css/style.css")}}>

	</head>
	<body class="img js-fullheight" style="background-image: url(form/images/bg6.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					{{-- <h2 class="heading-section">Create account</h2> --}}
				</div>
			</div>
			<div class="row justify-content-center " style="border: 1px solid white ;background-color:rgba(255, 255, 255, 0.21);height:600px;">
				<div class="col-md-6 col-lg-4 ">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Create account</h3>
		      	<form action="/register" method="post" class="signin-form">
                    @csrf
		      		<div class="form-group">
		      			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" placeholder="User Name" autofocus>
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
		      		</div>
                      <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
	            <div class="form-group">
                    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

	            </div>
				<div class="form-group">
                    
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">

	            </div>
                <div class="form-group">
                    
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="new-phone" placeholder="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
	            </div>
                <div class="form-group">
                    
                    {{-- <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="new-address" placeholder="address"> --}}
					<select class="form-control form-control-lg @error('address') is-invalid @enderror" id="exampleFormControlSelect2" name="address">
						<option disabled selected hidden > Select region</option>
						<option value="amman" > Amman</option>
						<option value="irbid"> Irbid</option>
						<option value="zarqa"> Zarqa</option>
						<option value="ajloun"> Ajloun</option>
						<option value="aqaba"> Aqaba</option>
						<option value="salt"> Al-salt</option>
						<option value="mafraq"> Mafraq</option>
						<option value="tafeleh"> Al-tafeleh</option>
						<option value="karak"> karak</option>
						<option value="ma'an"> Ma'an</option>
						<option value="balqaa"> Balqaa</option>
						<option value="ma'adaba"> Ma'adaba</option>
					  </select>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Register') }}</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="/login" style="color: #c01e2e99;text-decoration:underline">already have an account</a>
								</div>
	            </div>
	          </form>
	          {{-- <p class="w-100 text-center">&mdash; Or Sign Up With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> --}}
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
{{-- @endsection --}}