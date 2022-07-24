@extends('admin.common.layout')
@section('content')

<div class="container-fluid page-body-wrapper">
    @include('admin.common.sidebar')

    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-11 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                  <h3 class="card-title">Dashboard/<small>update</small></h3>
                    
                  </p>
                 
                  <form class="forms-sample" method="POST" action="/edit/{{$user->id}}">
                    @csrf
                    @method('PUT')
                    @if(session()->has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{session('message')}}
                      </div>
                    
                    @endif
                    <div class="form-group">
                      <input type="hidden" name="id" value="{{$user->id}}">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{$user->password}}">
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Address details</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Address details" name="address" value="{{$user->address}}">
                      </div> <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Phone number</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone number" name="phone" value="{{$user->phone}}">
                      </div>
                
                   
                    <span class="card-title"><button type="submit"  class="btn btn-warning mt-3 fw-bold">  Edit</button></span> 
                    <span class="card-title"><a href="{{'/user'}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Cancel</a></span> 
           
                  </form>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</div>
@endsection