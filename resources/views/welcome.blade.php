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
                  <div class="display-1">MAGIC IS IN <br />THE DETAILS</div>
                  <p class="white mb-5">
                    Dore is the combination of good design, quality code and attention for details.<br />

                    <br />
                    We used same design language for components, layouts, apps
                    and other parts of the template. <br />
                    <br />
                    Hope you enjoy it!
                  </p>
                  <a class="btn btn-secondary btn-xl mr-2 mb-2" target="_blank" href="/Dashboard.Default.html">VIEW NOW <i
                      class="simple-icon-arrow-right"></i></a>

                </div>
              </div>
              <div class="col-12 col-xl-7 offset-xl-1 col-lg-7 col-md-6  d-none d-md-block">
                <a target="_blank" href="/Dashboard.Default.html">
                  <img alt="hero" src="img/landing-page/home-hero.png" />
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col-12 p-0">
                <div class="owl-container">
                  <div class="owl-carousel home-carousel">
                    <div class="card">
                      <div class="card-body text-center">
                        <div>
                          <i class="iconsminds-mouse-3 large-icon"></i>
                          <h5 class="mb-3 font-weight-semibold">
                            Right Click Menu
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
            </div>

            <div class="row">

              <a class="btn btn-circle btn-outline-semi-light hero-circle-button scrollTo" href="#features"
                id="homeCircleButton"><i class="simple-icon-arrow-down"></i></a>
            </div>

          </div>

        </div>

        <div class="section">
          <div class="container" id="features">
            <div class="row">
              <div class="col-12 offset-0 col-lg-8 offset-lg-2 text-center">
                <h1>Features At a Glance</h1>
                <p>
                  We tried to create an admin theme that we would like to use ourselves so we listed our priorities. We
                  would like to have a theme that is not over complicated to use, does the job well, contains must have
                  components and looks really nice.
                </p>
              </div>
            </div>

            <div class="row feature-row">
              <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                <div class="d-flex">
                  <div class="feature-icon-container">
                    <div class="icon-background">
                      <i class="fas fa-fw fa-ban"></i>
                    </div>
                  </div>
                  <div class="feature-text-container">
                    <h2>Pleasant Design</h2>
                    <p>
                      As a web developer we enjoy to work on something looks
                      nice. It is not an absolute necessity but it really
                      motivates us that final product will look good for user
                      point of view. <br />
                      <br />
                      So we put a lot of work into colors, icons, composition
                      and design harmony. Themed components and layouts with
                      same design language. <br />
                      <br />
                      We kept user experience principles always at the heart
                      of the design process.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6 offset-lg-1 offset-md-0 position-relative">
                <div class="background-item-1"></div>
                <img alt="feature" class="feature-image-right feature-image-charts position-relative"
                  src="img/landing-page/features/plesant-design.png" />
              </div>
            </div>

            <div class="row feature-row">
              <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
                <img alt="feature" class="feature-image-left feature-image-charts"
                  src="img/landing-page/features/extra-responsive.png" />
              </div>

              <div
                class="col-12 col-md-6 offset-md-0 col-lg-5 offset-lg-1 d-flex align-items-center order-1 order-md-2">
                <div class="d-flex">
                  <div class="feature-icon-container">
                    <div class="icon-background">
                      <i class="fas fa-fw fa-ban"></i>
                    </div>
                  </div>
                  <div class="feature-text-container">
                    <h2>Extra Responsive</h2>
                    <p>
                      Xxs breakpoint is for smaller screens that has a resolution lower than 420px. Xs works between
                      576px and 420px. Xxl breakpoint is for larger screens that has a resolution higher than 1440px. Xl
                      works between 1200px and 1440px.
                      <br>
                      <br>
                      With this approach we were able to create better experiences for smaller and larger screens.

                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row feature-row">
              <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                <div class="d-flex">
                  <div class="feature-icon-container">
                    <div class="icon-background">
                      <i class="fas fa-fw fa-ban"></i>
                    </div>
                  </div>
                  <div class="feature-text-container">
                    <h2>Superfine Charts</h2>
                    <p>
                      Using charts is a good way to visualize data but they
                      often look ugly and break the rhythm of design. <br />
                      <br />
                      We concentrated on a single chart library and tried to
                      create charts that look good with color, opacity,
                      border and shadow. <br />
                      <br />
                      Used certain plugins and created some to make charts
                      even more useful and beautiful.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6 offset-lg-1 offset-md-0 ">
                <img alt="feature" class="feature-image-right feature-image-charts"
                  src="img/landing-page/features/superfine-charts.png" />
              </div>
            </div>


            <div class="row feature-row">
              <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1">
                <img alt="feature" class="feature-image-left feature-image-charts"
                  src="img/landing-page/features/layouts-for-the-job.png" />
              </div>

              <div
                class="col-12 col-md-6 offset-md-0 col-lg-5 offset-lg-1 d-flex align-items-center order-1 order-md-2">
                <div class="d-flex">
                  <div class="feature-icon-container">
                    <div class="icon-background">
                      <i class="fas fa-fw fa-ban"></i>
                    </div>
                  </div>
                  <div class="feature-text-container">
                    <h2>Layouts for the Job</h2>
                    <p>
                      Layouts are the real thing, they need to be accurate and
                      right for the job. They should be functional for both
                      user and developer. <br />
                      <br />
                      We created lots of different layouts for different jobs.
                      <br />
                      <br />
                      Listing pages with view mode changing capabilities,
                      shift select and select all functionality, application
                      layouts with an additional menu, authentication and
                      error layouts which has a different design than the
                      other pages were our main focus. We also created details
                      page with tabs that can hold many components.
                    </p>
                  </div>
                </div>
              </div>
            </div>



            <div class="row feature-row">
              <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                <div class="d-flex">
                  <div class="feature-icon-container">
                    <div class="icon-background">
                      <i class="fas fa-fw fa-ban"></i>
                    </div>
                  </div>
                  <div class="feature-text-container">
                    <h2>Smart Menu</h2>
                    <p>
                      Instead of good old single panel menus with accordion structure that looks over complicated, we
                      created 2 panels and categorized pages accordingly.
                      <br>
                      <br>
                      The default menu auto hides sub panel when resolution is under some breakpoint to open some space.
                      You may also hide menu completely or use only main panel open only.

                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6 offset-lg-1 offset-md-0 ">
                <img alt="feature" class="feature-image-right feature-image-charts"
                  src="img/landing-page/features/smart-menu.png" />
              </div>
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

