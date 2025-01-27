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
    
</head>
<body style="background-color: rgb(248, 241, 241);" >

<div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    @include('layouts.left-sidebar')

                </div>
                <div class="co-9">

                    <div class="container" style="max-width: 2000px;">

                        <div class="card">
                    
                            <div class="card-header">
                                    
                                
                                      
                                <div class="container" style="margin-top: 8px;">
                                <div class="carousel-slide" data-ride="carousel">
                    
                                    <div class="carousel-inner">
                    
                                        <div class="carousel-item active">
                    
                                            <img src="{{asset('images/UserAuthentication.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    
                                        </div>
                                        
                                        <div class="carousel-item">
                    
                                            <img src="{{asset('images/digitalwallet.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                                        </div>
                    
                                        <div class="carousel-item">
                    
                                            <img src="{{asset('images/driverLic.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                                        </div>
                    
                                        
                    
                                    </div>
                    
                                </div>
                    
                                </div>
                                <hr class="my-4" style="color: brown;">
                    
                    
                            </div>
                    
                                <div class="card-body">
                    
                    
                                
                    
                                </div>
                    
                            </div>
                    
                    
                    
                            <div class="card-footer" style="background-color: rgb(63, 57, 50);" >
                                <p style="color: cornsilk; margin-left: 420px;" >Developed By Rangana Lakshan</p>
                            </div>
                    
                        </div>

                </div>
            </div>
           
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
               
                <a href="#" class="navbar-brand" style="margin-left: 8px;">IDIFY</a>
                <button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="ccl">
                    <ul class="navbar-nav" style="font-size: 15px;">
        
                        <li class="nav-item "><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item "><a href="{{route('login')}}" class="nav-link">Sign Up</a></li>
                        
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</div>
</body>
</html>