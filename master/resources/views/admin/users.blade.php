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
          Dashboard/ <small>User</small>
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
                  User Name
                </th>
                <th>
                  Email
                </th>
                {{-- <th>
                  Password 
                </th> --}}
                <th>
                phone 
                </th>
                <th>
                 Address
                </th>
                <th>
                    Actions
                   </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
              <tr>
                <td class="py-1" >
                 {{$user['id']}}
                </td>
                <td>
                 {{$user['name']}}
                  
                </td>
                <td>
                    {{$user['email']}}
                 
                </td>
                {{-- <td>
                    {{$user['password']}}
             
                </td> --}}
                <td>
                 {{$user['phone']}}
                </td>
                <td>
                 {{$user['address']}}
                  
                </td>
                <td>
                  
             <span class="card-title"><a href="{{'/edit/'.$user->id}}" type="submit" class="btn btn-warning mt-3 fw-bold">Edit</a></span> 
             <span class="card-title"><a href="{{'/user/'.$user->id}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Delete</a></span> 
           
                   </td>
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