<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body class="loading authentication-bg authentication-bg-pattern" style="background-color:#434343;">

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
                                            <img src="{{asset('assets/images/logo-lg-dark.png')}}" alt="" height="100">
                                        </span>
                                    </a>

                                    <a href="" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="{{asset('assets/images/logo-lg-light.png')}}" alt="" height="100">
                                        </span>
                                    </a>
                                </div>
                                <p class="text" style="margin-bottom: 0rem;">Idify Say Ayubowan, to you !</p>
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

                            <form method="POST" action="/login" autocomplete="off" >
                                @csrf

                                <div class="mb-2">
                                    <label for="username" class="form-label">Username<span class="text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="uname" id="uname" required="" value="" autocomplete="off" placeholder="Enter your username">
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
                                    <button class="btn btn-info" type="submit" id="login">Log In</button>
                                </div>

                            </form>

                            <div class="text-center">
                                <a class="" href="">Forgot your password?</a><br>
                                <a class="" href="">Self unlock</a>
                            </div>

                            <hr style="margin:0.75rem">
                            <div class="text-center">
                                <h5 class="text-muted">Follow us on</h5>
                                <ul class="social-list list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="" class="social-list-item border-info text-info" target="bank"><i class="mdi mdi-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="social-list-item border-primary text-primary" target="bank"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/" class="social-list-item border-danger text-danger" target="bank"><i class="mdi mdi-youtube"></i></a>
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


</body>

</html>
