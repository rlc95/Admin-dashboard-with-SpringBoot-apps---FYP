  <div class="row">
    <div class="col-md-6">
    <div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">ADD USERS</h3>
    </div>
    <div class="card-body p-0">
    <div class="bs-stepper">
    <div class="bs-stepper-header" role="tablist">
    
    <div class="step" data-target="#logins-part">
    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
    <span class="bs-stepper-circle">1</span>
    <span class="bs-stepper-label">User Details</span>
    </button>
    </div>
    <div class="line"></div>
    <!--
    <div class="step" data-target="#information-part">
    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
    <span class="bs-stepper-circle">2</span>
    <span class="bs-stepper-label">Various information</span>
    </button>
    </div>
     -->
    </div>
    <div class="bs-stepper-content">
    
        <form class="form-horizontal" action="/user_store" name="mfrm" id="mfrm" method="post" autocomplete="off" enctype="multipart/form-data">
            
            @csrf
            @if(isset($errors) && count($errors)>0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <i class="mdi mdi-alert-outline me-2"></i> {{$error}}
            </div>
            @endforeach
            @endif
           

            <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                <div class="row">

                    <div class="col-6">
                             <div class="form-group">
                            <label for="InputName">Full Name</label>
                            <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Enter Full Name">
                            <span class="text-danger">@error('InputName'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                            <label for="InputID">Company Name</label>
                            <input type="text" class="form-control" id="InputID" name="InputID" placeholder="Company Name">
                            <span class="text-danger">@error('InputID'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputContact">Contact Number</label>
                                <input type="text" class="form-control" id="inputContact" name="inputContact" placeholder="Enter Contact Number">
                                <span class="text-danger">@error('inputContact'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputPasswrd">Password</label>
                                <input type="password" class="form-control" id="InputPasswrd" name="InputPasswrd" placeholder="Enter Password">
                                <span class="text-danger">@error('InputPasswrd'){{$message}}@enderror</span>
                            </div>

                    </div>

                    <div class="col-6">
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
                                <label for="InputUsername">User Name</label>
                                <input type="text" class="form-control" id="InputUsername" name="InputUsername" placeholder="User name">
                                <span class="text-danger">@error('InputUsername'){{$message}}@enderror</span>
                            </div>

                    </div>


                   
                </div>

                
                <button type="button" id="submitbtn" class="btn btn-primary">Submit</button>

            </div>

        </form>

    



    </div>
    </div>
    </div>
    
    <div class="card-footer">
    </div>
    </div>
    
    </div>
    </div>

    