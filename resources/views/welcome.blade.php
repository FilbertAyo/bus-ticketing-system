<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

           {{-- added  --}}
           <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">

        {{-- added  --}}
        <link rel="stylesheet" href="/style/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&
        family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300
        ;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&family
        =Victor+Mono:wght@100&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


               <!-- Scripts -->
               @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
       <link rel="stylesheet" href="/style/s.css">
    </head>
    <body class="font-sans antialiased dark:bg-white dark:text-white/50">



                    <header class="content flex_space">


                            <div class="logo">
                              <a href="/workplace/index.html"><h6>Filbert bookings</h6></a>
                            </div>
                            <div class="navlinks">
                                <ul id="menulist">

                @if (Route::has('login'))

                    @auth
                    <li>
                        <a
                            href="{{ url('/dashboard') }}"
                            class="btn btn-primary"
                        >
                            Login
                        </a>
                    </li>
                    @else
                    <li>
                        <a
                            href="{{ url('login') }}"
                            class="btn btn-primary"
                        >
                            Login
                        </a>
                    </li>

                        @if (Route::has('register'))
                        {{-- <li>
                            <a
                                href="{{ route('register') }}"
                                class="adm"
                            >
                                Register
                            </a>
                        </li> --}}
                        @endif
                    @endauth

            @endif
                                </ul>

                            </div>


                    </header>




                            <section class="section1" id="section1">

                                <div class="service">
                                    <h1> <span>BUS  Ticketing System</span> </h1>
                                    {{-- <div class="serv"><button class="login_modal" id="login_modal">ADMISTRATOR LOGIN</button></div> --}}
                                    <div class="">
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
                                                href="{{ url('login') }}"
                                                class="adm"
                                            >
                                                Admistrator Login
                                            </a>


                                        @endauth

                                @endif
                                    </div>
                                    <div class="serv"><p><a href="#bus_details">View bus details</a></p></div>
                                    </div>

                                <!-- admistrator login -->


                                  {{-- <div class="form-box hidden">


    <form method="POST" action="{{ route('login') }}" class="form_login">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

                                  </div>

                                  <div class="overlay hidden"></div>

 --}}


                                    </section>


                                    <section class="section2" id="bus_details">
                                        <div class="sec2header">
                                          <h4>Booking Details</h4>

                                        </div>
                                        <div class="card">
                                          <!--   cards details-->
                                        <div class="details">
                                          <div class="card_icon route_icon">
                                        <img src="/picture/location.png" alt="">
                                          </div>
                                          <div class="num route_number">
                                        <p>14</p>
                                          </div>
                                          <div class="lab routeP">
                                            ROUTES
                                          </div>
                                        </div>

                                        <div class="details">
                                          <div class="card_icon bus_icon">
                                        <img src="/picture/bus.png" alt="">
                                          </div>
                                          <div class="num bus_numbers">
                                        <p>22</p>
                                          </div>
                                          <div class="lab busP">
                                                BUSES
                                          </div>
                                        </div>

                                        <div class="details">
                                          <div class="card_icon rates_icon">
                                        <img src="/picture/ratings.png" alt="">
                                          </div>
                                          <div class="num rates_number">
                                        <p>10+</p>
                                          </div>
                                          <div class="lab rateP">
                                         RATINGS
                                          </div>
                                        </div>

                                        <div class="details">
                                          <div class="card_icon bookings_icon">
                                        <img src="/picture/bookings.png" alt="">
                                          </div>
                                          <div class="num bookings_number">
                                        <p>71</p>
                                          </div>
                                          <div class="lab bookingsP">
                                            BOOKINGS
                                          </div>
                                        </div>

                                        </div>
                                            </section>


                                            <section class="footer" id="contact_footer">


                                                <div class="contact">
                                                <div class="headcont">
                                                  CONTACT US:
                                                </div>
                                                <div class="descrip">
                                                  <p>We are always here to help you with any
                                                  questions or concerns, please feel free to
                                                  contact us at the following email address
                                                  and we will get back to you</p>
                                                  <p>email: <a href="">filbertayo09@gmail.com</a></p>
                                                  <p>contacts : +255 7552 37692</p>
                                                </div>
                                                </div>
                                                <div class="contact_image">
                                                  <img src="/picture/contact.png" alt="">
                                                </div>


                                                    </section>

                                                    <script src="/js/index.js"> </script>
    </body>
</html>
