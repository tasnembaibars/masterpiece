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
                  <h3 class="card-title">Dashboard/<small>categories</small></h3>
                    
                  </p>
                 
                  <form class="forms-sample" method="POST" action="/add" enctype="multipart/form-data">
                    @csrf
                    
                    @if(session()->has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{session('message')}}
                      </div>
                    
                    @endif
                    <div class="form-group">
                      <label for="exampleInputUsername1">Category name <span style="color:#ff0000">*</span></label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="category name" name="category_name" required>
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputEmail1">Category description</label>
                      <input type="text-area" class="form-control" id="exampleInputEmail1" placeholder="Category description" name="description" required>
                    </div> --}}
                  
        
                       <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Category image <span style="color:#ff0000">*</span></label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Category image" name="image" required>
                      </div>
                
                   
                    <span class="card-title"><button type="submit"  class="btn btn-primary mt-3 fw-bold">  Add</button></span> 
                    <span class="card-title"><a href="{{'/dash'}}"class="btn btn-warning mt-3 fw-bold"  type="submit">Cancel</a></span> 
                    <span class="card-title"><a href="{{'/category'}}"class="btn btn-primary mt-3 fw-bold"  type="submit">Show All</a></span> 
                    
                  </form>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</div>
@endsection