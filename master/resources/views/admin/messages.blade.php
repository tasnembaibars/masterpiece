@extends('admin.common.layout')
@section('content')
<div class="container-fluid page-body-wrapper">

@include('admin.common.sidebar')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-10 grid-margin stretch-card mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"></h4>
            <h4 class="card-title">
                Join Requests<code></code>
            </h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Agency Name</th>
                    <th>Agency description</th>
                    <th>wanted subscription </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($joins as $join)
                  <tr>
                    <td>{{$join->name}}</td>
                    <td>{{$join->email}}</td>
                    <td>{{$join->phone}}</td>
                    <td>{{$join->agency_name}}</td>
                    <td>{{$join->agency_desc}}</td>
                    <td><label class="badge badge-danger">{{$join->subscription}}</label></td>
                  </tr>
                 @endforeach
                  
                 
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-10 grid-margin stretch-card mt-5">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <h4 class="card-title">
                  Contacts<code></code>
              </h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($contacts as $contact)
                    <tr>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->subject}}</td>
                      <td>{{$contact->message}}</td>
                    
                    </tr>
                   @endforeach
                    
                   
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 grid-margin stretch-card mt-5">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <h4 class="card-title">
                  Reviews on Estates<code></code>
              </h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>User name</th>
                      <th>Estate ID</th>
                      <th>review</th>
                      {{-- <th>Message</th> --}}
                     
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($reviews as $review)
                    <tr>
                      <td>{{$review->user_id}}</td>
                      <td>{{$review->name}}</td>
                      <td>{{$review->estate_id}}</td>
                      <td>{{$review->review}}</td>
                    
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