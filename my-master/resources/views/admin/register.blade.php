<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 18:09:50 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              @if(session()->has('message'))
              <div class="alert alert-warning" role="alert">
                  {{session('message')}}
                </div>
              
              @endif
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" action="/signup">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="exampleInputUsername1" placeholder="Username" name="name">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email" name="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror" id="exampleInputPassword1" placeholder="phone" name="phone">
                  @error('phone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
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
              
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="/signin" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from bootstrapdash.com/demo/skydash-free/template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 18:09:50 GMT -->
</html>
