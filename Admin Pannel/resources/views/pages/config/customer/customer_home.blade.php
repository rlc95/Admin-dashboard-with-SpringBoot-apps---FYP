@extends('layouts.authority-dashboard')

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
                    <span>Customers</span>
                    <span class="badge" id="count" style="position: absolute; top: -1px;  padding: 5px 10px; border-radius: 50%; background: red;  color: white; "></span>
                  </a> 

            </div>
            
          </div>
          
        </div>

        <div class="card-body">

            <table class="table"  id="userTbl">
                <thead>
                  <tr>
                    
                    <th>Authority Name</th>
                    <th>Customer</th>
                    <th>Transaction</th>
                   
                  </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr> 
                        <td>{{ $customer->authrtyName }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->trnsactn }}</td>
                        <td>
                            <input type="hidden" name="custmrid" id="custmrid" value="{{ $customer->id }}" class="form-control form-control-sm" >
                            <a class = "btn btn-primary" id="custmrview"  role = "button">View</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>

    </div>


    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="itemBrand" aria-hidden="true"
        style="display: none;" id="custmrmodl" name="custmrmodl" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="mdi mdi-floppy me-1">&nbsp;</i>Customer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body py-2 px-4">
                    <div class="row">
                        <div class="col-md-12">
                           
                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Name<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="usrna" name="usrna" value="{{ old('usrna') }}" disabled>
                                        
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
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Birthday <span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="dob" name="dob" value="{{ old('dob') }}" disabled>
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Gender<span class="text-danger"></span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="gndr" name="gndr" value="{{ old('gndr') }}" disabled>
                                        
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



</div>


<script src="{{ url('assets/js/blade/config/customer/customer.js') }}"></script>


@endsection


