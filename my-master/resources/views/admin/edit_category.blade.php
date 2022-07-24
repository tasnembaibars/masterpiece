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
                 
                  <form class="forms-sample" method="POST" action="/edit_category/{{$category->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if(session()->has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{session('message')}}
                      </div>
                    
                    @endif
                    <div class="form-group">
                      <input type="hidden" name="id" value="{{$category->id}}">
                      <label for="exampleInputUsername1"> Category Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Category Name" name="category_name" value="{{$category->category_name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category Description</label>
                      <input type="text-area" class="form-control" id="exampleInputEmail1" placeholder="Category Description" name="description" value="{{$category->description}}">
                    </div>
                   
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Category Image</label>
                        <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Category Image" name="image" value="{{$category->image}}">
                      </div>
                
                   
                    <span class="card-title"><button type="submit"  class="btn btn-warning mt-3 fw-bold">  Edit</button></span> 
                    <span class="card-title"><a href="{{'/category'}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Cancel</a></span> 
           
                  </form>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</div>
@endsection