<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <title>Adminsitracion Hotel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('font/iconsmind-s/css/iconsminds.css')}}" />
  <link rel="stylesheet" href="{{ asset('font/simple-line-icons/css/simple-line-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-stars.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-stars.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/vendor/video-js.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/dore.light.bluenavy.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/main.css')}}" />
</head>

<body class="show-spinner no-footer">
  <div class="landing-page">
    <div class="mobile-menu">
      <a href="#home" class="logo-mobile scrollTo">
        <span></span>
      </a>
      <ul class="navbar-nav">
      @if (Route::has('login'))
                
                    @auth
                    <li class="nav-item pl-4">
                    <a class="btn btn-outline-semi-light btn-sm pr-4 pl-4" target="_top"
                        href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item pl-4">
                    <a class="btn btn-outline-semi-light btn-sm pr-4 pl-4" target="_top"
                        href="{{ route('login') }}">Iniciar Sesion</a>
                    </li>
                    @endauth
                
            @endif
       
      </ul>
    </div>

    <div class="main-container">
      <nav class="landing-page-nav">
        <div class="container d-flex align-items-center justify-content-between">
          <a class="navbar-logo pull-left scrollTo" href="#home">
            <span class="white"></span>
            <span class="dark"></span>
          </a>
          <ul class="navbar-nav d-none d-lg-flex flex-row">
          @if (Route::has('login'))
                
                @auth
                <li class="nav-item pl-4">
                <a class="btn btn-outline-semi-light btn-sm pr-4 pl-4" target="_top"
                    href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                @else
                <li class="nav-item pl-4">
                <a class="btn btn-outline-semi-light btn-sm pr-4 pl-4" target="_top"
                    href="{{ route('login') }}">Iniciar Sesion</a>
                </li>
                @endauth
            
        @endif
          </ul>
          
        </div>
      </nav>

      <div class="content-container" id="home">
        <div class="section home">
          <div class="container">
            <div class="row home-row">
              <div class="col-12 d-block d-md-none">
                <a target="_blank" href="/Dashboard.Default.html">
                  <img alt="mobile hero" class="mobile-hero" src="img/landing-page/home-hero-mobile.png" />
                </a>
              </div>

              <div class="col-12 col-xl-4 col-lg-5 col-md-6">
                <div class="home-text">
                  <div class="display-1">Administre profesionalmente <br />su Hotel</div>
                  <p class="white mb-5">
                    Software de gestion administrativa para hoteles.<br />

                    <br />
                    Le permitira agilizar y desarrollar funciones relacionadas a rol, optimizando recursos y tiempo. <br />
                    <br />
                    Hope you enjoy it!
                  </p>
                  
                </div>
              </div>
              <div class="col-12 col-xl-7 offset-xl-1 col-lg-7 col-md-6  d-none d-md-block">
               
                  <img alt="hero" src="img/landing-page/home-hero.png" />
             
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-12 p-0">
                <div class="owl-container">
                  <div class="owl-carousel home-carousel">
                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-mouse-3 large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Facil Acceso
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Increases overall usability of the project by providing additional actions menu.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-electric-guitar large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Video Player
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Carefully themed multimedia players powered by Video.js library with Youtube support.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-keyboard large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Keyboard Shortcuts
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Easily configurable keyboard shortcuts plugin that highly improves user experience.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-three-arrow-fork large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Two Panels Menu
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Three states two panels icon menu that looks good, auto resizes and does the job well.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-deer large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Icons Mind
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            1040 icons in 53 different categories, designed pixel perfect and ready for your project.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-palette large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            20 Color Schemes
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Colors, icons and design harmony that creates excellent themes to cover entire project.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-air-balloon-1 large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            4 Applications
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Applications that mostly made of components are the way to get started to create something
                            similar.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-resize large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Extra Responsive
                          </h5>
                        </div>
                        <div>
                          <p class="detail-text">
                            Custom Bootstrap 4 xxs & xxl classes delivers better experiences for smaller and larger
                            screens.
                          </p>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div> -->

            <div class="row">

              <a class="btn btn-circle btn-outline-semi-light hero-circle-button scrollTo" href="#features"
                id="homeCircleButton"><i class="simple-icon-arrow-down"></i></a>
            </div>

          </div>

        </div>

    



        <div class="section footer mb-0">
          <div class="container">
            <div class="row footer-row">
              <div class="col-12 text-right">
                <a class="btn btn-circle btn-outline-semi-light footer-circle-button scrollTo" href="#home"
                  id="footerCircleButton"><i class="simple-icon-arrow-up"></i></a>
              </div>
              <div class="col-12 text-center footer-content">
                <a href="#home" class="scrollTo">
                  <img class="footer-logo" alt="footer logo" src="logos/white-full.svg" />
                </a>
              </div>
            </div>
          </div>
          <div class="separator mt-5"></div>
          <div class="container copyright pt-5 pb-5">
            <div class="row">
              <div class="col-12"></div>
              <div class="col-12 text-center">
                <p class="mb-0">2021 © Mcardi Studios</p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="{{ asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/vendor/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/vendor/jquery.barrating.min.js')}}"></script>
  <script src="{{ asset('js/vendor/jquery.barrating.min.js')}}"></script>
  <script src="{{ asset('js/vendor/landing-page/headroom.min.js')}}"></script>
  <script src="{{ asset('js/vendor/landing-page/jQuery.headroom.js')}}"></script>
  <script src="{{ asset('js/vendor/landing-page/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('js/vendor/landing-page/jquery.autoellipsis.js')}}"></script>
  <script src="{{ asset('js/dore.scripts.landingpage.js')}}"></script>
  <script src="{{ asset('js/scripts.js')}}"></script>
</body>

</html>

