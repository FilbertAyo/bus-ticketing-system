

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Bus bookings</title>

        {{-- added  --}}
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
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

            <!-- Page Content -->
            <div class="container-scroller">


                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                      <a class="sidebar-brand brand-logo" href="index.html">TRANSPORT</a>
                      <a class="sidebar-brand brand-logo-mini" href="index.html">T</a>
                    </div>
                    <ul class="nav">
                      <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                      </li>
                      <li class="nav-item menu-items">
                        <a class="nav-link" href="{{ url('/admin') }}">
                          <span class="menu-icon">
                            <i class="mdi mdi-contacts"></i>
                          </span>
                          <span class="menu-title">Admin</span>
                        </a>
                      </li>

                    </ul>
                  </nav>


                  <div class="container-fluid page-body-wrapper">






                    <nav x-data="{ open: false }" class="navbar p-0 fixed-top d-flex flex-row">

                        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                        </div>

                        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">

                            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                                <span class="mdi mdi-menu"></span>
                            </button>

                            <ul class="navbar-nav w-100">
                                <li class="nav-item w-100">
                                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                        <input type="text" class="form-control" placeholder="Search products">
                                    </form>
                                </li>
                            </ul>


                                <!-- Settings Dropdown -->
                                <div class="navbar-nav navbar-nav-right">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ms-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>

                        </div>
                                <!-- Hamburger -->
                                <div class="-me-2 flex items-center sm:hidden">
                                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>


                        <!-- Responsive Navigation Menu -->
                        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                            <div class="pt-2 pb-3 space-y-1">
                                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-responsive-nav-link>
                            </div>

                            <!-- Responsive Settings Options -->
                            <div class="pt-4 pb-1 border-t border-gray-200">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="mt-3 space-y-1">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-responsive-nav-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </nav>





             {{-- page content  --}}






             <div class="main-panel">
                <div class="content-wrapper">

                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    </div>
                      @endif

                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">

                                    <div
                                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  pb-2 mb-3 border-bottom">

                                    <h4 class="card-title">Registered admin</h4>
                                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                                        Add new admin
                                      </button>
                                    </div>

                                </div>

                            </div>



                            <div class="row">

                                @foreach ($user as $user)

                            <div class="col-md-6 col-xl-4 grid-margin stretch-card mt-3" >
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Admin details</h4>

                                        <div class="d-flex py-4">
                                            <div class="preview-list w-100">
                                                <div class="preview-item p-0">
                                                    <div class="preview-thumbnail">
                                                        <img src="assets/images/faces/face12.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="preview-item-content d-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                                <h6 class="preview-subject">{{ $user->name }}</h6>
                                                                <p class="text-muted text-small">{{ $user->created_at }}</p>
                                                            </div>
                                                            <p class="text-muted">Email: {{ $user->email }}</p>
                                                            <p class="text-muted">Phone number: {{ $user->phone_number }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted">progress </p>
                                        <div class="progress progress-md portfolio-progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>





                        </div>








                </div>
            </div>

                  </div>





                     {{-- @foreach ($user as $u)
                  <div class="admin_card other_adm">
                    <div class="adm_img">
                     <img src="/picture/admin.png" alt="">
                    </div>
                    <div class="other_name">
                      <h3 id="admin_name">{{ $u->name }} </h3>
                    </div>
                    <div class="other">
                      <p id="admin_contact">{{ $u->email }}</p>
                    </div>
                  </div>
                  @endforeach --}}



        </div>






        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="card">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Admin details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <div aria-hidden="true" class="icon icon-box-danger ">
                      <span class="mdi mdi-close-box icon-item"></span>
                  </div>
                  </button>
                </div>
                <div class="modal-body">



                    <form method="POST" action="{{ route('reg.store') }}"  >
                        @csrf

                        <!-- Name -->
                        <div>
                            <label for="name">Admin name</label>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <label for="email">Email</label>
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                          <label for="contact">Phone number</label>
                          <input type="text" name="phone_number" class="form-control">
                      </div>

                        <!-- Password -->
                        <div class="mt-4" style="display: none;">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            value="12345678"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4" style="display: none;">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            value="12345678"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>



                            <div class="mt-3 flex justify-end">
                                <button type="submit" class="btn btn-primary">Register</button>
                              </div>

                    </form>



                </div>

              </div>
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


