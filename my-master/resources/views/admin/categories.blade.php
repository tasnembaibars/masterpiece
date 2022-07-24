@extends('admin.common.layout')
@section('content')
<div class="container-fluid page-body-wrapper">
    @include('admin.common.sidebar')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card ">
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-description" style="font-size: 35px;margin-top:70px">
          Dashboard/ <small>categories</small>
        </p>
        {{-- <div class="card-header">
            <h4 class="card-title">Edit Users</h4> 
             <h4 class="card-title"><a href="{{url('signup')}}" class="btn btn-warning mt-3 fw-bold">Create User</a></h4> 

        </div> --}}
        @if(session()->has('message'))
<div class="alert alert-warning" role="alert">
    {{session('message')}}
  </div>

@endif
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                    Id
                  </th>
                  <th>
                  image 
                </th>
                <th>
                  Category Name
                </th>
                <th>
                  Category description
                </th>
                
                   <th>
                    Actions
                   </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    
              <tr>
                <td class="py-1" >
                 {{$category['id']}}
                </td>
                <td>
                 {{-- {{$category['image']}} --}}
                 <img src="/image/{{ $category->image }}" alt="" style="height:60px;width:60px; ">
                </td>
                <td>
                    {{$category['category_name']}}
                 
                </td>
                <td>
                    {{$category['description']}}
             
                </td>
                {{-- @if(count($categories)===0)
                <td> 
                  
                    <span>no categories added<a href="/add">add here</a></span>
                  
                </td>
                @endif --}}
                <td>
                  
             <span class="card-title"><a href="{{'/edit_category/'.$category->id}}" type="submit" class="btn btn-warning mt-3 fw-bold">Edit</a></span> 
             @if(count($categories)>1)
             <span class="card-title"><a href="{{'/category/'.$category->id}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Delete</a></span> 
          
                   </td>
                   @else
                   <td><p>This is the last category</p><a href="/add">add categories</a></td>
                   @endif
               </tr>
        
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
</div>
@endsection