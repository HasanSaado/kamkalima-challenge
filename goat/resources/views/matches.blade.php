@extends('layouts.app')
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/aos.css">

  <link rel="stylesheet" href="{{URL::to('/')}}/app-assets/css/style.css">
  <link rel="stylesheet" href="{{ mix('/css/app.css')}}" />
<style>
.th{
  text-align: center;
    width: 150px;
}
.games{
  text-align: center;
}
.the{
  text-align: center;
  width: 250px;
}
.Table{
  margin-right: 30px;
    margin-left: -230px;
    width: 120%;
}
</style>
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
        <div class="container">
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
            <a href="home"><img src="{{URL::to('/')}}/app-assets/images/logo.png" alt="">
          <div style="    background-color: #f04732;
    width: 83px;
    position: absolute;
    margin-top: -70px;
    height: 35px;
    margin-left: 23.5px;text-align: center;"><strong style="color: #FFF;font-size: 20px;">G.O.A.T</strong> </div>
          </a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="home">Home</a>
            </li>
            <li>
              <a href="/news">News</a>
            </li class="active">
            <li><a href="/matches" >Matches</a></li>
            <li><a href="/team">Team</a></li>
            <li class="has-children">
              <a>Tournaments</a>
              <ul class="dropdown arrow-top">
                <li><a href="/tournaments">Create Tournament</a></li>
                <li><a href="/viewtournaments">View Tournaments</a></li>
              </ul>
            </li>            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <body>
      <div style="margin-top: 30px; margin-left: 300px">
        <div id='match' />
      </div>
    </body>


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