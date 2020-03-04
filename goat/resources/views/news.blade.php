<!DOCTYPE html>
<html lang="en">
<style>
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-gap: 20px;
    align-items: stretch;
    text-align: center;
  }

  .grid img {
    border: 1px solid #ccc;
    position: relative;
    box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    height: 200px;
    width: 200px;
  }

  .grid b {
    text-align: center;
  }
</style>

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
            <li class="active">
              <a href="/news">News</a>
            </li>
            <li><a href="/matches">Matches</a></li>
            <li><a href="/team">Team</a></li>
            <li class="has-children">
              <a>Tournaments</a>
              <ul class="dropdown arrow-top">
                <li><a href="/tournaments">Create Tournament</a></li>
                <li><a href="/viewtournaments">View Tournaments</a></li>
              </ul>
            </li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
            <!-- <li><a href="service.html"><b style="color:white;">logout</b></a></li> -->
            @endif

            @else
            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
    </header>

    <main class="grid" style="margin-top:30px">
      <div>
        <a href="../team_news/Arsenal">
          <img src="{{URL::to('/')}}/images/Arsenal_Logo.png" alt="Sample photo">
        </a>
        <b>Arsenal</b>
      </div>
      <div>
        <a href="../team_news/Aston Villa">
          <img src="{{URL::to('/')}}/images/Aston Villa_Logo.png" alt="Sample photo">
        </a>
        <b>Aston Villa</b>
      </div>
      <div>
        <a href="../team_news/Bournemouth">
          <img src="{{URL::to('/')}}/images/AFC Bournemouth_Logo.png" alt="Sample photo" width="75%">
        </a>
        <b>Bournemouth</b>
      </div>
      <div>
        <a href="../team_news/Brighton">
          <img src="{{URL::to('/')}}/images/Brighton & Hove Albion_Logo.png" alt="Sample photo">
        </a>
        <b>Brighton</b>
      </div>
      <div>
        <a href="../team_news/Burnley">
          <img src="{{URL::to('/')}}/images/Burnley_Logo.png" alt="Sample photo">
        </a>
        <b>Burnley</b>
      </div>
      <div>
        <a href="../team_news/Chelsea">
          <img src="{{URL::to('/')}}/images/Chelsea_Logo.png" alt="Sample photo">
        </a>
        <b>Chelsea</b>
      </div>
      <div>
        <a href="../team_news/Crystal Palace">
          <img src="{{URL::to('/')}}/images/Crystal Palace_Logo.png" alt="Sample photo">
        </a>
        <b>Crystal Palace</b>
      </div>
      <div>
        <a href="../team_news/Everton">
          <img src="{{URL::to('/')}}/images/Everton_Logo.png" alt="Sample photo">
        </a>
        <b>Everton</b>
      </div>
      <div>
        <a href="../team_news/Leicester City">
          <img src="{{URL::to('/')}}/images/Leicester City_Logo.png" alt="Sample photo">
        </a>
        <b>Leicester City</b>
      </div>
      <div>
        <a href="../team_news/Liverpool">
          <img src="{{URL::to('/')}}/images/Liverpool_Logo.png" alt="Sample photo">
        </a>
        <b>Liverpool</b>
      </div>
      <div>
        <a href="../team_news/Manchester City">
          <img src="{{URL::to('/')}}/images/Manchester City_Logo.png" alt="Sample photo">
        </a>
        <b>Manchester City</b>
      </div>
      <div>
        <a href="../team_news/Manchester United">
          <img src="{{URL::to('/')}}/images/Manchester United_Logo.png" alt="Sample photo">
        </a>
        <b>Manchester United</b>
      </div>
      <div>
        <a href="../team_news/Newcastle United">
          <img src="{{URL::to('/')}}/images/Newcastle United_Logo.png" alt="Sample photo">
        </a>
        <b>Newcastle United</b>
      </div>
      <div>
        <a href="../team_news/Norwich City">
          <img src="{{URL::to('/')}}/images/Norwich City_Logo.png" alt="Sample photo">
        </a>
        <b>Norwich City</b>
      </div>
      <div>
        <a href="../team_news/Sheffield United">
          <img class="img" src="{{URL::to('/')}}/images/Sheffield United_Logo.png" alt="Sample photo">
        </a>
        <b>Sheffield United</b>
      </div>
      <div>
        <a href="../team_news/Southampton">
          <img class="img" src="{{URL::to('/')}}/images/Southampton_Logo.png" alt="Sample photo">
        </a>
        <b>Southampton</b>
      </div>
      <div>
        <a href="../team_news/Tottenham">
          <img class="img" src="{{URL::to('/')}}/images/Tottenham Hotspur_Logo.png" alt="Sample photo">
        </a>
        <b>Tottenham Hotspur</b>
      </div>
      <div>
        <a href="../team_news/Watford">
          <img src="{{URL::to('/')}}/images/Watford_Logo.png" alt="Sample photo">
        </a>
        <b>Watford</b>
      </div>
      <div>
        <a href="../team_news/West Ham">
          <img src="{{URL::to('/')}}/images/West Ham United_Logo.png" alt="Sample photo">
        </a>
        <b>West Ham United</b>
      </div>
      <div>
        <a href="../team_news/Wolverhampton">
          <img src="{{URL::to('/')}}/images/Wolverhampton Wanderers_Logo.png" alt="Sample photo">
        </a>
        <b>Wolverhampton Wanderers</b>
      </div>
    </main>



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