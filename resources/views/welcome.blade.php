<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bus Bookings</title>

           {{-- added  --}}
           <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">


        {{-- added  --}}

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&
        family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300
        ;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&family
        =Victor+Mono:wght@100&display=swap" rel="stylesheet">

        <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
          integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
          crossorigin="anonymous"></script>

      {{-- other --}}
      <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="assets/images/favicon.png" />


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


               <!-- Scripts -->
               @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
       <link rel="stylesheet" href="/style/s.css">

       {{-- welcome --}}
       <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdeliver.net/npm/qrcode-generator/umd/qrcode.min.js"></script>
       <!-- Additional CSS Files -->
       <link rel="stylesheet" href="asst/css/fontawesome.css">
       {{-- <link rel="stylesheet" href="asst/css/templatemo-scholar.css"> --}}
       <link rel="stylesheet" href="asst/css/owl.css">
       <link rel="stylesheet" href="asst/css/animate.css">
       <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

       <style>
        .intro{
            margin-top: 20%;
        }
       .intro h2{
        color: white;
        font-size: 50px;
       }
       .intro ul li{
        color: white;
        font-size: 25px;
       }


       </style>

    </head>
    <body>


        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">

              <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <div class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    Transport

                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-lg-block">

                    @if (Route::has('login'))

                    @auth

                        <a
                            href="{{ url('/dashboard') }}"
                            class="nav-link btn btn-primary create-new-button" id="createbuttonDropdown" aria-expanded="false"
                        >
                           Admistrator Login
                        </a>

                    @else

                        <a
                            href="{{ url('/login') }}"
                            class="nav-link btn btn-primary create-new-button" id="createbuttonDropdown" aria-expanded="false"
                        >
                            Admistrator Login
                        </a>


                    @endauth
            @endif
                </a>

                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

                @if (Route::has('login'))

                @auth

                    <a
                        href="{{ url('/dashboard') }}"
                        class=""
                    >
                       Login
                    </a>

                @else

                    <a
                        href="{{ url('/login') }}"
                        class=""
                    >
                        Login
                    </a>


                @endauth
        @endif
              </button>
            </div>
          </nav>


        <div class="main-panel">
            <div class="content-wrapper">


                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">

                            <div class="intro">
                                <ul>
                              <h2>Safe and Fast Transport</h2>
                            </ul>
                           <ul>
                            <li><span class="mdi mdi-check"></span>Fast and Safe travel</li>
                            <li><span class="mdi mdi-check"></span>Luxury comfort</li>
                           </ul>

<ul>
                           @if (Route::has('login'))

                           @auth
                               <a
                                   href="{{ url('/dashboard') }}"
                                   class="btn btn-primary"
                               >
                                  Admistrator Login
                               </a>

                           @else

                               <a
                                   href="{{ url('/login') }}"
                                   class="btn btn-primary "
                               >
                                   Admistrator Login
                               </a>


                           @endauth
                   @endif
                </ul>

                            </div>




                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <img src="asst/images/23.png" alt="">
                    </div>
                </div>

            </div>
          </div>







                      <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
                      integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
                      crossorigin="anonymous"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
                      integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
                      crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
                      integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
                      crossorigin="anonymous"></script>

                      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                      <!-- endinject -->
                      <!-- Plugin js for this page -->
                      <script src="assets/vendors/chart.js/Chart.min.js"></script>
                      <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
                      <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
                      <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                      <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
                      <!-- End plugin js for this page -->
                      <!-- inject:js -->
                      <script src="assets/js/off-canvas.js"></script>
                      <script src="assets/js/hoverable-collapse.js"></script>
                      <script src="assets/js/misc.js"></script>
                      <script src="assets/js/settings.js"></script>
                      <script src="assets/js/todolist.js"></script>
                      <!-- endinject -->
                      <!-- Custom js for this page -->
                      <script src="assets/js/dashboard.js"></script>
                      <!-- End custom js for this page -->
    </body>
</html>
