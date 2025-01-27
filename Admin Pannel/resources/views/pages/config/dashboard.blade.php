<!DOCTYPE html>
<html>
<head>

	<title>IDIFY</title>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body style="background-color: rgb(63, 65, 59);">


<div class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="#" class="navbar-brand" style="margin-left: 8px;">IDIFY</a>
            <button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="ccl">
                <ul class="navbar-nav" style="font-size: 15px;">
    
                    <li class="nav-item "><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                   
                </ul>
                <p style="color: cornsilk; margin-left: 350px; margin-top: 5px;"><b>Admin</b></p>
            </div>
            <p>{{session('AdminID')}}</p>
		 </nav>	
	</div>

    <div class="container">

        <div class="card">

            <div class="card-header">

                <div class="row">

                    <div class="col">

                    <h1 class="lead">Dashboard</h1> 
                    </div>

                    <div class="col">
                    <a href="/Adminlogout" type="button" class="btn btn-primary" style="float: right;">Logout</a>

                    </div>

                </div>

               

            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-8">

                        <p class="text-primary"><b>Users details</b></p>

                    </div>

                    <div class="col-4">

                        <a class = "btn btn-primary"  href="" data-toggle="modal" data-target="#itbmodl"  role = "button">View</a>
                    </div>


                </div>
                
                <hr class="my-4">

                <div class="row">

                    <div class="col-8">

                        <p class="text-primary"><b>Verify User details</b></p>

                    </div>

                    <div class="col-4">

                        <a class = "btn btn-primary"  href="" role = "button">View</a>
                    </div>


                </div>

                <hr class="my-4">

                <div class="row">

                    <div class="col-8">

                        <p class="text-primary"><b>User Role</b></p>

                    </div>

                    <div class="col-4">

                        <a class = "btn btn-primary"  href="" role = "button">View</a>
                    </div>


                </div>





            </div>

        </div>







    </div>




    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="itemBrand" aria-hidden="true"
        style="display: none;" id="itbmodl" name="itbmodl" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="mdi mdi-floppy me-1">&nbsp;</i>User Sign Up</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body py-2 px-4">
                    <div class="row">
                        <div class="col-md-12">
                           
                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Full Name<span class="text-danger"> *</span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="ibna" name="ibna" value="{{ old('ibna') }}">
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">ID Number<span class="text-danger"> *</span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="ibna" name="ibna" value="{{ old('ibna') }}">
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Address<span class="text-danger"> *</span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <textarea class="form-control form-control-sm" id="cuad" name="cuad" rows="4" cols="50"></textarea>  
                                        
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <label class="col-12 col-sm-4 col-lg-4 col-form-label-md" for="ibna">Occupation<span class="text-danger"> *</span></label>
                                    <div class="col-12 col-sm-4 col-lg-6">
                                        <input class="form-control form-control-sm" type="text" id="ibna" name="ibna" value="{{ old('ibna') }}">
                                        
                                    </div>
                                </div>
                                

                                <!-- end card-body -->
                            
                            <!--end card-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-success waves-effect" name="" id=""><i class="mdi mdi-book-plus me-1"></i>Add</a>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close me-1"></i>Close</button>
                </div>

            </div>
        </div>
    </div>




	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        
</body>
</html>