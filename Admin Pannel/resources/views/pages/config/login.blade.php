<!DOCTYPE html>
<html lang="en">

<head>
    <title>IDIFY</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body class="loading authentication-bg authentication-bg-pattern" style="background-color:#434343;">
    <aside>
    </aside>
    <div class="account-pages mt-5 mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center w-90 m-auto">
                                <div class="auth-logo">
                                    <a href="" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="{{asset('assets/images/logo.png')}}" alt="" height="100">
                                        </span>
                                    </a>

                                    <a href="" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="{{asset('assets/images/logo-lg-light.png')}}" alt="" height="100">
                                        </span>
                                    </a>
                                </div>
                                <p class="text" style="margin-bottom: 0rem;">WELCOME TO IDIFY !</p>
                                <p class="text-muted mb-3">Enter your username and password to access</p>
                            </div>


                            @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>
                            <br>@endif
                            @if(session('success'))<div class=" alert alert-success">{{ session('success') }}</div>
                            <br>@endif

                            @if (sizeof($errors) > 0)
                            <ul style="padding-left: 1rem;">
                                @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif

                            <form method="POST" action="/login" autocomplete="off" id="loginForm">
                                {{ csrf_field() }}

                                <div class="mb-2">
                                    <label for="username" class="form-label">Username<span class="text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="uname" id="uname" required="" value="" minlength="5" autocomplete="off" placeholder="Enter your username">
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label">Password<span class="text-danger"> *</span></label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password" id="password" class="form-control password" required="" value="" autocomplete="off" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center d-grid mb-4">
                                    <button class="btn btn-info col-lg-12" type="submit" id="login">Log In</button>
                                </div>

                            </form>

                            <div class="text-center">
                                <a class="" href="">Forgot your password?</a><br>
                                <a class="" href="">Self unlock</a>
                            </div>

                            <hr style="margin:0.75rem">
                            <div class="text-center">
                                <h5 class="text-muted" style="font-family: monospace;">Follow us on</h5>
                                <ul class="social-list list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="" class="social-list-item border-info text-info" target="bank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="social-list-item border-primary text-primary" target="bank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/" class="social-list-item border-danger text-danger" target="bank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>
