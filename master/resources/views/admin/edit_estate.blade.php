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
                  <h3 class="card-title">Dashboard/<small>Estate</small></h3>
                    
                  </p>
                 
                  <form class="forms-sample" method="POST" action="/edit_estate/{{$estate->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if(session()->has('message'))
                    <div class="alert alert-warning" role="alert">
                        {{session('message')}}
                      </div>
                    
                    @endif
                    <p class="card-description">
                      Location info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Building name <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="building_company" placeholder="Building name" required value="{{$estate->building_company}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Breif Description</label>
                          <div class="col-sm-9">
                            <input type="text-area" class="form-control" name="description" placeholder="Breif Description" value="{{$estate->description}}"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label ">City <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <select class="form-control form-control-lg @error('address') is-invalid @enderror" id="exampleFormControlSelect2" name="city" value="{{$estate->city}}" required>
                              <option disabled selected hidden >{{$estate->city}}</option>
                              <option value="amman" > Amman</option>
                              <option value="irbid"> Irbid</option>
                              <option value="zarqa"> Zarqa</option>
                              <option value="ajloun"> Ajloun</option>
                              <option value="aqaba"> Aqaba</option>
                              <option value="salt"> Al-salt</option>
                              <option value="mafraq"> Mafraq</option>
                              <option value="tafeleh"> Al-tafeleh</option>
                              <option value="karak"> karak</option>
                              <option value="ma'an"> Ma'an</option>
                              <option value="balqaa"> Balqaa</option>
                              <option value="ma'adaba"> Ma'adaba</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Location <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="Location" name="location" required value="{{$estate->location}}"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1 <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="Address 1" name="address1" required value="{{$estate->address1}}"/>
                          </div>
                        </div>
                      </div>
                     
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="Address 2" name="address2" value="{{$estate->address2}}"/>
                            </div>
                          </div>
                        </div>
                        
                      {{-- <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                                Free
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                Professional
                              </label>
                            </div>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                    <p class="card-description">
                      Estates Info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Estates type <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                           
      
                            <select class="form-control form-control-lg @error('category_id') is-invalid @enderror" id="exampleFormControlSelect2" name="category_id" value="{{$estate->category_id}}"  required>
                              <option disabled selected hidden > Select Category</option>
                              @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->category_name}} </option>
                              @endforeach
                            </select>
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Related Agency<span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                           
      
                            <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="agency_id" value="{{$estate->agency_id}}" required>
                              <option disabled selected hidden > Select Agency</option>
                              @foreach ($agencies as $agency)
                              <option value="{{$agency->id}}">{{$agency->agency_name}} </option>
                              @endforeach
                            </select>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Expected price <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  name="price" required value="{{$estate->price}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Area sqm2 <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  name="space" required value="{{$estate->space}}"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Building year</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="year" value="{{$estate->year}}"/>
                          </div>
                        </div>
                      </div>
                      {{-- rent or sell --}}
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Estate type <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                            <select class="form-control form-control-lg @error('type') is-invalid @enderror" id="exampleFormControlSelect2" name="status" required value="{{$estate->status}}">
                              <option disabled selected hidden >{{$estate->status}}</option>
                              <option value="rent">rent </option>
                              <option value="buy"> buy </option>
                     
      
                            </select>
                          
                          </div>
                        </div>
                      </div>
                      {{-- end rent or sell --}}
                 
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Rooms number</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="rooms_num" value="{{$estate->rooms_num}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Bathrooms number</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="bathrooms" value="{{$estate->bathrooms}}" />
                          
                          </div>
                        </div>
                      </div>
                
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Garage</label>
                          <div class="col-sm-9">
                            <select class="form-control form-control-lg @error('type') is-invalid @enderror" id="exampleFormControlSelect2" name="garage" value="{{$estate->garage}}">
                              <option disabled selected hidden >{{$estate->garage}}</option>
                              <option value="yes">yes </option>
                              <option value="no">no </option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Public Features</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="neighbourhood" value="{{$estate->neighbourhood}}" />
                          </div>
                        </div>
                      </div>
                    </div>
      
                    {{-- images --}}
                    <p class="card-description">
                      Required Files
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="exampleInputConfirmPassword1" class="col-sm-3 col-form-label">Image 1 <span style="color:#ff0000">*</span></label>
                          <div class="col-sm-9">
                          <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Category image" name="image1" required value="{{$estate->image1}}">
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="exampleInputConfirmPassword1" class="col-sm-3 col-form-label">Image 2</label>
                          <div class="col-sm-9">
                          <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Category image" name="image2" value="{{$estate->image2}}">
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="exampleInputConfirmPassword1" class="col-sm-3 col-form-label">Image 3</label>
                          <div class="col-sm-9">
                          <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Category image" name="image3" value="{{$estate->image3}}">
                        </div>
                        </div>
                      </div>
                    </div>
                
                   
                    <span class="card-title"><button type="submit"  class="btn btn-warning mt-3 fw-bold">  Edit</button></span> 
                    <span class="card-title"><a href="{{'/estates'}}"class="btn btn-danger mt-3 fw-bold"  type="submit">Cancel</a></span> 
           
                  </form>
                </div>
              </div>
            </div>

</div>
</div>
</div>
</div>
@endsection