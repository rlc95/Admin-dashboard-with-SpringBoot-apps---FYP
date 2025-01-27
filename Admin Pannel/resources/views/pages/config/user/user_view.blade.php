@extends('layouts.admin-dashboard')

@section('title','dashboard')

<style>
    .error {
    color: #F00;
    background-color: #FFF;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: small;
    }
  </style>

@section('content')



<div class="container" id="usr">

    <div class="card">
        
        <div class ="card-header">
          <div class="container">
            <div class="row">
            
                  <div class="row">
                    <div class="col-sm">
                      <label class="form-label" for="form1" style="margin-top: 5px; text-shadow: 10px;">Search</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="search form-control" placeholder="Find Your Data" id="searchinput" style="position: relative; right: 100px;"  >
                    </div>
                  </div>
                    
                  <a href="#" class="notification" style="background-color: rgb(205, 87, 87); color: white; text-decoration: none; padding: 8px 19px; display: inline-block;  border-radius: 2px; position: relative; left: 680px;">
                    <span>Users</span>
                    <span class="badge" id="count" style="position: absolute; top: -1px;  padding: 5px 10px; border-radius: 50%; background: red;  color: white; "></span>
                  </a> 

            </div>
            
          </div>
          
        </div>

        <div class="card-body">

            <table class="table"  id="userTbl">
                <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact Num</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr> 
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['company_name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['contact_num'] }}</td>
                        <td>
                            <input type="hidden" name="viewid" id="viewid" value="{{ $user['id'] }}" class="form-control form-control-sm" >
                            <a class = "btn btn-primary" id="view" onclick="view({{ $user['id'] }})"  role = "button">View</a>

                            <input type="hidden" name="editid" id="editid" value="{{ $user['id'] }}" class="form-control form-control-sm" >
                            <a class = "btn btn-success" id="edit" onclick="edit({{ $user['id'] }})" role = "button">Edit</a>
                        
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
              </table>

        </div>

    </div>


    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="itemBrand" aria-hidden="true"
        style="display: none;" id="viewmodl" name="viewmodl" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="mdi mdi-floppy me-1">&nbsp;</i>User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body py-2 px-4">
                    <div class="row">
                        <div class="col-md-12">
                           
                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Full Name<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="usrna" name="usrna" value="{{ old('usrna') }}" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Company Name<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="usrid" name="usrid" value="{{ old('usrid') }}" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Email<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="usremail" name="usremail" value="{{ old('usremail') }}" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Contact <span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="usrcntct" name="usrcntct" value="{{ old('usrcntct') }}" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Address<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <textarea class="form-control form-control-sm" id="adrs" name="adrs" rows="4" cols="50" disabled></textarea>  
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Occupation<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="ocpn" name="ocpn" value="{{ old('ocpn') }}" disabled>
                                        
                                    </div>
                                </div>
                                

                                <!-- end card-body -->
                            
                            <!--end card-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close me-1"></i>Close</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="itemBrand" aria-hidden="true"
        style="display: none;" id="editmodl" name="editmodl" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="mdi mdi-floppy me-1">&nbsp;</i>User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


            <form class="form-horizontal" action="/user_update" name="mfrm" id="mfrm" method="post" autocomplete="off" enctype="multipart/form-data">
            
                    @csrf
                    @if(isset($errors) && count($errors)>0)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <i class="mdi mdi-alert-outline me-2"></i> {{$error}}
                    </div>
                    @endforeach
                    @endif

                <div class="modal-body py-2 px-4">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="edtid" id="edtid" value="" class="form-control form-control-sm" >
                            <div class="form-group">
                                <label for="InputName">Full Name</label>
                                <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Enter Full Name">
                                <span class="text-danger">@error('InputName'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputID">Company Name</label>
                                <input type="text" class="form-control" id="InputID" name="InputID" placeholder="Enter ID Number">
                                <span class="text-danger">@error('InputID'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                    <label for="inputContact">Contact Number</label>
                                    <input type="text" class="form-control" id="inputContact" name="inputContact" placeholder="Enter Contact Number">
                                    <span class="text-danger">@error('inputContact'){{$message}}@enderror</span>
                            </div>
    
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter email">
                                <span class="text-danger">@error('InputEmail'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputAddrs">Address</label>
                                <textarea class="form-control form-control-sm" id="InputAddrs" name="InputAddrs" name="InputAddrs" rows="2" cols="50"></textarea>  
                                <span class="text-danger">@error('InputAddrs'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputOcuptn">Occupation</label>
                                <input type="text" class="form-control" id="InputOcuptn" name="InputOcuptn" placeholder="Enter Occupation">
                                <span class="text-danger">@error('InputOcuptn'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputPasswrd">Password</label>
                                <input type="password" class="form-control" id="InputPasswrd" name="InputPasswrd" placeholder="Enter Password">
                                <span class="text-danger">@error('InputPasswrd'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputUsername">User Name</label>
                                <input type="text" class="form-control" id="InputUsername" name="InputUsername" placeholder="User name">
                                <span class="text-danger">@error('InputUsername'){{$message}}@enderror</span>
                            </div>
                            <input type="hidden" name="userRoleid" id="userRoleid" value="" class="form-control form-control-sm" >
                            

                                <!-- end card-body -->
                            
                            <!--end card-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submitedit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close me-1"></i>Close</button>
                </div>

            </form>

            </div>
        </div>
    </div>




  


</div>


<script src="{{ url('assets/js/blade/config/user/user.js') }}"></script>


@endsection


