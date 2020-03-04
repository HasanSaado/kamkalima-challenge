<!DOCTYPE html>
<html lang="en">

<head>
    <title>G.O.A.T</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/aos.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/style.css">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-logo">
                    <a href="#"><img src="{{URL::to('/')}}/app-assets/images/logo.png" alt="Image"></a>
                </div>
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar absolute transparent" role="banner">
            <div class="py-3">
                <div class="container" >
                    <div class="row align-items-center">
                        <div class="col-6 col-md-3">
                            <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
                            <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
                        </div>
                        <div class="col-6 col-md-9 text-right">
                            <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">info@goat.com</span></a></div>
                            <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+961 71 283 282</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
                <div class="container position-relative">
                    <div class="site-logo">
                        <a href="home"><img src="{{URL::to('/')}}/app-assets/images/logo.png" alt=""></a>
                    </div>

                    <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li>
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="active">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <body>
            <div>
                <div class="container" style="width:800px; margin:0 auto; margin-top:30px; magin-bottom:30px">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Register') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>



        <footer class="site-footer border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">About Sportz</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                        </div>



                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Quick Menu</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Matches</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Team</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Membership</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Follow Us</h3>

                                <div>
                                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">


                        <div class="mb-5">
                            <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <!-- Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="{{URL::to('/')}}/app-assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/jquery-ui.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/popper.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/owl.carousel.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/jquery.stellar.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/jquery.countdown.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{URL::to('/')}}/app-assets/js/aos.js"></script>

    <script src="{{URL::to('/')}}/app-assets/js/main.js"></script>

</body>

</html>