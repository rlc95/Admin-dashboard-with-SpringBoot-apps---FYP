<!DOCTYPE html>
<html>
<head>

	<title>IDIFY</title>
  
    <script src="jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel ="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/leftSideBar.css') }}" >

</head>
<body style="background-color: rgb(248, 241, 241);" >

    <div class="wrapper show">
        <div class="navbar-custom">
            <div class="container-fluid">

                <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
               
                    <a href="#" class="navbar-brand" style="margin-left: 8px;">IDIFY</a>
                    <button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="ccl">
                        <ul class="navbar-nav" style="font-size: 15px; ">
            
                            <li class="nav-item "><a href="{{route('login')}}" class="nav-link ml-20">Sign Up</a></li>
                            
                        </ul>
                    </div>
                    
        
                    <ul style="list-style:none; font-size: 30px; float: right;">
                        
                        <li style="display: inline; "><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>	
        
                    </ul>
                 </nav>	


            </div>
        </div>
        

            <div class="container-fluid">
                    <div class="row">

                        <div class="col-2">
                            <!-- Sidebar  -->
                    <div class="left-side-menu">
                    <div class="container"  style="background-color: rgb(185, 183, 183); min-height: 700px;">
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3 class="ml-3">Dashboard</h3>
                        </div>
            
                        <ul class="list-unstyled components">
                            <p>Admin</p>
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a href="">Home 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#">Page 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Page 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Page 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    </div>
                    </div>
                 </div>





                        <div class="col-10" style="min-height: 500px; background-color: rgb(155, 151, 151);" >
                            <div class="content-page">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="container-fluid">
                
                                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                                        <i class="fas fa-align-left"></i>
                                        <span>Toggle Sidebar</span>
                                    </button>
                                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-align-justify"></i>
                                    </button>
                                    <div class="col-6">
                                        <div class="input-group" id="tooltip-container">
                                            <input type="text" name="searchinput" class="search form-control form-control-sm" id="searchinput" placeholder="Search..." >
                                            <input type="hidden" name="arID" id="arID" class="form-control form-control-sm" >
                                            <a type="button" class="btn btn-sm btn-success waves-effect waves-light" id="arad" name="arad" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add entry"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </div> 
                                    </div>
                                    
                
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="nav navbar-nav ml-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <div class="container">

                                <div class="row" style="margin-top: 20px;">

                                    <div class="col">

                                        <div class="card ">
                                            <div class="card-header">
                                                ABBBB

                                            </div>
                                            <div class="card-body">


                                            </div>
                                            
                                        </div>

                                    </div>

                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header">
                                                ABBBB

                                            </div>
                                            <div class="card-body">


                                            </div>
                                            
                                        </div>

                                    </div>

                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header">
                                                ABBBB

                                            </div>
                                            <div class="card-body">


                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">



                                </div>
                                

                            </div>
                        </div>
                    </div>
            </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="{{url('assets/js/blade/config/user/user.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>