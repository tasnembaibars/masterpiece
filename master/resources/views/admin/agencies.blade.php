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
          Dashboard/ <small>Agencies</small>
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
                  Agency Name
                </th>
                <th>
                  Agency description
                </th>
                <th>
                    Subscription type
                  </th>
                   <th>
                    Actions
                   </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($agencies as $agency)
                    
              <tr>
                <td class="py-1" >
                 {{$agency['id']}}
                </td>
                <td>
                 {{-- {{$agency['image']}} --}}
                 <img src="/image/{{ $agency->image }}" alt="" style="height:60px;width:60px; ">
                </td>
                <td>
                    {{$agency['agency_name']}}
                 
                </td>
                <td>
                    {{$agency['agency_desc']}}
             
                </td>
                <td>
                    {{$agency['subscription']}}
             
                </td>
                <td>
                  
             <span class="card-title"><a href="{{'/edit_agencies/'.$agency->id}}" type="submit" class="btn btn-warning mt-3 fw-bold">Edit</a></span> 
             @if(count($agencies)>1)
             <span class="card-title"><a href="{{'/agencies/'.$agency->id}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Delete</a></span> 
          
                   </td>
                   @else
                   <td><p>This is the last Agency</p><a href="/add_agency">add agencies</a></td>
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