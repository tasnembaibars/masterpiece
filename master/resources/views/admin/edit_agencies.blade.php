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
                  <h3 class="card-title">Dashboard/<small>agencies</small></h3>
                    
                  </p>
                 
                  <form class="forms-sample" method="POST" action="/edit_agencies/{{$agencies->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if(session()->has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{session('message')}}
                      </div>
                    
                    @endif
                    <div class="form-group">
                      <input type="hidden" name="id" value="{{$agencies->id}}">
                      <label for="exampleInputUsername1"> Agency Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Agency Name" name="agency_name" value="{{$agencies->agency_name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Agency Description</label>
                      <input type="text-area" class="form-control" id="exampleInputEmail1" placeholder="Agency Description" name="agency_desc" value="{{$agencies->agency_desc}}">
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="subscription" value="{{$agencies->subscription}}">
                          <option disabled selected hidden > Select subscription type</option>
                          <option value="monthly" > monthly subscription - 200 JD</option>
                          <option value="3months"> 3 months subscription - 550 JD</option>
                          <option value="annual"> annual subscription - 1200 JD</option>
                        </select>
                     
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Agency Image</label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Agency Image" name="image" value="{{$agencies->image}}">
                      </div>
                
                   
                    <span class="card-title"><button type="submit"  class="btn btn-warning mt-3 fw-bold">  Edit</button></span> 
                    <span class="card-title"><a href="{{'/agencies'}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Cancel</a></span> 
           
                  </form>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</div>
@endsection