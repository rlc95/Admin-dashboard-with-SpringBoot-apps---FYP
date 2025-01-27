<br>
<div class="row">
    <div class="col-md-6">
    <div class="card card-default">
    <div class="card-header">
    <h3 class="card-title">ADD USERS</h3>
    </div>
    <div class="card-body p-0">

    <div class="container">
    
        <form class="form-horizontal" action="/customer_store" name="custm" id="custm" method="post" autocomplete="off" enctype="multipart/form-data">
            
            @csrf
            @if(isset($errors) && count($errors)>0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <i class="mdi mdi-alert-outline me-2"></i> {{$error}}
            </div>
            @endforeach
            @endif

            <div id="logins-part" class="content mt-3" role="tabpanel" aria-labelledby="logins-part-trigger">
                <div id="frst">

                    <div class="row">

                        <div class="col-6">
                                 <div class="form-group">
                                <label for="InputName">Name</label>
                                <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Enter Name">
                                <span class="text-danger">@error('InputName'){{$message}}@enderror</span>
                                </div>
                                
                        </div>
    
                        <div class="col-6">
                                
                                <div class="form-group">
                                <label for="InputOcuptn">Birthday</label>
                                <input type="text" class="form-control" id="InputBD" name="InputBD" placeholder="Enter Birthday">
                                <span class="text-danger">@error('InputBD'){{$message}}@enderror</span>
                                </div>
    
                        </div>
                    </div>
    
    
                    <div class="row">
    
                        <div class="col-11">
    
                            <div class="form-group">
                                <label for="InputFulnm">Full Name</label>
                                <input type="text" class="form-control" id="InputFulnm" name="InputFulnm" placeholder="Enter Full Name">
                                <span class="text-danger">@error('InputBD'){{$message}}@enderror</span>
                            </div>
    
                        </div>
    
                    </div>
    
                    <div class="row">
    
                        <div class="col-6">
    
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter email">
                                <span class="text-danger">@error('InputEmail'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputContact">Contact Number</label>
                                <input type="text" class="form-control decimal" id="inputContact" name="inputContact" placeholder="Enter Contact Number">
                                <span class="text-danger">@error('inputContact'){{$message}}@enderror</span>
                            </div>
    
                            <div class="form-group">
                                <label for="InputOcuptn">Occupation</label>
                                <input type="text" class="form-control" id="InputOcuptn" name="InputOcuptn" placeholder="Occupation">
                                <span class="text-danger">@error('InputOcuptn'){{$message}}@enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="InputPasswrd">Password</label>
                                <input type="password" class="form-control" id="InputPasswrd" name="InputPasswrd" placeholder="Enter Password">
                                <span class="text-danger">@error('InputPasswrd'){{$message}}@enderror</span>
                            </div>
    
                        </div>
    
                        <div class="col-6">
    
                            <div class="form-group">
                                <label for="gendr">Gender</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdio" id="rdio" value="male">
                                            <label class="form-check-label" for="rdio">
                                              Male
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdio" id="rdio" value="female">
                                            <label class="form-check-label" for="rdio">
                                              Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
    
                            <div class="form-group" style="position: relative; top: 12px;">
                                <label for="InputID">ID Number</label>
                                <input type="text" class="form-control" id="InputID" name="InputID" placeholder="Enter ID">
                                <span class="text-danger">@error('InputID'){{$message}}@enderror</span>
                            </div>
    
                                <div class="form-group" style="position: relative; top: 9px;">
                                <label for="InputAddrs">Address</label>
                                <textarea class="form-control form-control-sm" id="InputAddrs" name="InputAddrs" name="InputAddrs" rows="2" cols="50"></textarea>  
                                <span class="text-danger">@error('InputAddrs'){{$message}}@enderror</span>
                                </div>


                                <div class="form-group">
                                    <label class="col-12 col-sm-6 col-lg-5 col-form-label-md" for="myfile">User Image</label>
                                    <div class="col-12 col-sm-4 col-lg-5">
                                        <input type="file" accept="image/*" id="image" name="image" onchange="loadFile(event)">
                                        <p class="mt-1"><img id="output" width="50"/></p>
                                    </div>
                                    
                                </div>
    
                        </div>
    
    
                    </div>

                    <button type="button" id="Next" onclick="next()" class="btn btn-primary">Next</button>

                </div>

                <div id="nxt" style="display: none;">

                    <div class="row mb-2">
                        <div class="col-12 col-sm-6 col-lg-3 col-form-label-md">
                            <h3 class="card-title">Driving Licence</h3>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-9 col-form-label-md">
                            <hr>
                        </div>
                    </div>
                    
    
                    <div class="row">
    
                        <div class="col-6">
    
                            <div class="form-group">
                                <label for="inputLicencNum">Licence Number</label>
                                <input type="text" class="form-control decimal" id="inputLicencNum" name="inputLicencNum" placeholder="Enter Contact Number">
                                <span class="text-danger">@error('inputLicencNum'){{$message}}@enderror</span>
                            </div>
    
                            <div class="form-group">
                                <label for="inputIssuedate">Issue Date</label>
                                <input type="text" class="form-control decimal" id="inputIssuedate" name="inputIssuedate" placeholder="Enter Contact Number">
                                <span class="text-danger">@error('inputIssuedate'){{$message}}@enderror</span>
                            </div>
    
                        </div>
    
                        <div class="col-6">
    
                            <div class="form-group">
                                <label for="inputExpirydate">Expiry Date</label>
                                <input type="text" class="form-control decimal" id="inputExpirydate" name="inputExpirydate" placeholder="Enter Contact Number">
                                <span class="text-danger">@error('inputExpirydate'){{$message}}@enderror</span>
                            </div>
    
                        </div>
    
                    </div>
    
                    <div class="row">
                        <label class="col-12 col-sm-6 col-lg-3 col-form-label-md" for="gendr">Vehicle Classes</label>
                    </div>
                    
    
                    <div class="row mb-5">
    
                        <div class="col-12 col-sm-4 col-lg-12">
                            
                            <div class="row">
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="A1" id="A1" value="0">
                                    <label class="form-check-label" for="rdio">
                                        A1
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    
                                    <input class="form-check-input Chck" type="checkbox" name="A" id="A" value="0">
                                    <label class="form-check-label" for="rdio">
                                        A
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    
                                    <input class="form-check-input Chck" type="checkbox" name="B1" id="B1" value="0">
                                    <label class="form-check-label" for="B1">
                                        B1
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="B" id="B" value="0">
                                    <label class="form-check-label" for="B">
                                        B
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="C1" id="C1" value="0">
                                    <label class="form-check-label" for="C1">
                                        C1
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    
                                    <input class="form-check-input Chck" type="checkbox" name="C" id="C" value="0">
                                    <label class="form-check-label" for="C">
                                        C
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    
                                    <input class="form-check-input Chck" type="checkbox" name="CE" id="CE" value="0">
                                    <label class="form-check-label" for="CE">
                                        CE
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    
                                    <input class="form-check-input Chck" type="checkbox" name="D1" id="D1" value="0">
                                    <label class="form-check-label" for="D1">
                                        D1
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="D" id="D" value="0">
                                    <label class="form-check-label" for="D">
                                        D
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="DE" id="DE" value="0">
                                    <label class="form-check-label" for="DE">
                                        DE
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="G1" id="G1" value="0">
                                    <label class="form-check-label" for="G1">
                                        G1
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="G" id="G" value="0">
                                    <label class="form-check-label" for="G">
                                        G
                                    </label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input Chck" type="checkbox" name="J" id="J" value="0">
                                    <label class="form-check-label" for="J">
                                        J
                                    </label>
                                </div>
                            </div>
                            
    
                        </div>
                    
                    </div>

                    <button type="button" id="back" onclick="prev()"  class="btn btn-primary">Back </button>
                    <button type="button" id="submitcus" class="btn btn-primary">Submit</button>

                </div>

            </div>

        </form>


    </div>
    
    </div>
    
    <div class="card-footer">
    </div>
    </div>
    
    </div>
    </div>

    