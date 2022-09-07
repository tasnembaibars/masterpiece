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
                 
                  <form class="forms-sample" method="POST" action="/add_agency" enctype="multipart/form-data">
                    @csrf
                    
                    @if(session()->has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{session('message')}}
                      </div>
                    
                    @endif
                    <div class="form-group">
                      <label for="exampleInputUsername1">Agency name <span style="color:#ff0000">*</span></label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Agency name" name="agency_name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Agency description</label>
                      <input type="text-area" class="form-control" id="exampleInputEmail1" placeholder="Agency description" name="agency_desc" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="subscription">
                          <option disabled selected hidden > Select subscription type</option>
                          <option value="monthly" > monthly subscription - 200 JD</option>
                          <option value="3months"> 3 months subscription - 550 JD</option>
                          <option value="annual"> annual subscription - 1200 JD</option>
                        </select>
                     
                      </div>
        
                       <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Agency image <span style="color:#ff0000">*</span></label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Agency image" name="image" required>
                      </div>
                
                   
                    <span class="card-title"><button type="submit"  class="btn btn-primary mt-3 fw-bold">  Add</button></span> 
                    <span class="card-title"><a href="{{'/dash'}}"class="btn btn-warning mt-3 fw-bold"  type="submit">Cancel</a></span> 
                    <span class="card-title"><a href="{{'/agencies'}}"class="btn btn-primary mt-3 fw-bold"  type="submit">Show All</a></span> 
                    
                  </form>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</div>
@endsection