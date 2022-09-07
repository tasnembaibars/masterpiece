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
          Dashboard/ <small>estates</small>
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
                 Building company
                </th>
                <th>
                  Category 
                 </th>
                 <th>
                  Agency
                 </th>
                <th>
                  Description
                </th>
                <th>
                 City
                </th>
                <th>price</th>
                <th>year</th>
                <th>
                 location
                   </th>
                   <th>
                 address 1
                     </th>

                     <th>
                  address 2
                       </th>
                       <th>
                  space
                         </th>
                         <th>
                   status
                           </th>  
                           <th>
                            state
                                    </th> 
                           <th>
                            rooms #
                           </th>  <th>
                            baths # </th>
                           <th>	neighbourhood </th>
                            <th>	image 1 
                           </th>
                          <th> 	image 2  
                          </th>
                          <th>	image 3 
                            
                           </th>  
                           <th>	Owner Name </th>
                           <th>	Owner Email  
                          </th>
                         <th> 	Owner Phone  
                         </th>
                         <th>	Owner Address
                           
                          </th>  
              </tr>
            </thead>
            <tbody>
                @foreach ($estates as $estate)
                    
                <tr>
                  <td>
                      {{$estate->est}}
                    </td>
                    <td>
                      {{$estate->building_company}}

                  </td>
                  <td>
                    {{$estate->category_id}}

                   </td>
                   <td>
                    {{$estate->agency_id}}

                   </td>
                  <td>
                    {{$estate->description}}

                  </td>
                  <td>
                    {{$estate->city}}

                  </td>
                  <td>                      {{$estate->price}}
                  </td>
                  <td>                      {{$estate->year}}
                  </td>
                  <td>
                    {{$estate->location}}

                     </td>
                     <td>
                      {{$estate->address1}}

                       </td>
  
                       <td>
                        {{$estate->address2}}

                         </td>
                         <td>
                          {{$estate->space}}

                           </td>
                           <td>
                            {{$estate->status	}}

                             </td>  
                             <td>
                              {{$estate->state}}

                                      </td> 
                             <td>
                              {{$estate->rooms_num}}

                             </td>  <td>
                              {{$estate->bathrooms}} </td>	 

                                <td>  {{$estate->neighbourhood}}</td>
                            
                             	 <td><img src="{{ $estate->image1 }}" alt="" style="height:60px;width:60px; ">
                                </td>
                            
                             	  <td>  <img src="{{ $estate->image2 }}" alt="" style="height:60px;width:60px; ">
                                 </td>	
                             
                                 <td>   <img src="{{ $estate->image3 }}" alt="" style="height:60px;width:60px; ">
                                 </td> 
                            
                                 <td>
                                  {{$estate->owner_name}}
    
                                 </td>  <td>
                                  {{$estate->oEmail}} </td>	  <td>
                                    {{$estate->owner_phone}}
      
                                   </td>  <td>
                                    {{$estate->oAddress}} </td>	
                             
             
                  <td>
             <span class="card-title"><a href="{{'/edit_estate/'.$estate->est}}" type="submit" class="btn btn-warning mt-3 fw-bold">Edit</a></span> 
             @if(count($estates)>1)
             <span class="card-title"><a href="{{'/estates/'.$estate->est}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Delete</a></span> 
          
                   </td>
                   @else
                   <td><p>This is the last estate</p><a href="/add_estates">add estates</a></td>
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