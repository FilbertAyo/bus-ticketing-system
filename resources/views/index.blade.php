<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus booking system</title>
    <link rel="stylesheet" href="/style/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&
    family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300
    ;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&family
    =Victor+Mono:wght@100&display=swap" rel="stylesheet">

</head>


<body>

    <header>

        <div class="content flex_space">
            <div class="logo">
              <a href="/workplace/index.html"><h6>Filbert bookings</h6></a>
            </div>
            <div class="navlinks">
                <ul id="menulist">
<li><a class="active" href="/workplace/index.html">Home</a></li>
<li><a href="#bus_details">Bus details</a></li>
<li><a href="#contact_footer">Contacts</a></li>
<li class="btn"><button class="login_modal" id="login_modal">LOGIN</button></li>
                </ul>
                <span  onclick="menutoggle()"> &timesb;</span>
            </div>

        </div>
    </header>

    <section class="section1" id="section1">

<div class="service">
    <h1> <span>BUS</span>  Ticketing System</h1>
    <div class="serv"><button class="login_modal" id="login_modal">ADMISTRATOR LOGIN</button></div>
    <div class="serv"><p><a href="#bus_details">View bus details</a></p></div>
    </div>

<!-- admistrator login -->
<div class="login_sec">

  <div class="form-box hidden">
      <div class="form-value">
          <form action="" class="form_login">
              <h1>Login</h1>
              <div class="inputbox">
                  <ion-icon name="mail-outline"></ion-icon>
                  <input type="name" required>
                  <label for="">Email</label>
              </div>
              <div class="inputbox">
                  <ion-icon name="lock-closed-outline"></ion-icon>
                  <input type="password" required>
                  <label for="">Password</label>
              </div>
              <div class="forget">
                  <label for=""><input type="checkbox">Remember me <a class="forget_pass" href="#">Forget Password?</a> </label>

              </div>
              {{-- <button class="btn_login">Login</button> --}}
              <a href="{{ url('/dashboard') }}" class="btn_login">Login</a>
              <div class="register">
                  <p>Don't have an account? <a href="#">ContantHOD</a></p>
              </div>
          </form>
      </div>
  </div>

  <div class="overlay hidden"></div>

</div>

<!-- forget modal  -->
<div class="login_code loginSelect hidden">

  <div class="select-box">
      <div class="form-value">
          <form action="" class="form_login select_form">
              <h1 style="font-size: 30px; color: gray;">Passoword recovery</h1>
              <div class="options">
                 Select the method below
              </div>

              <div class="option">
              <input type="radio" id="emailoption" name="choice">
              <label for="emailoption">Email</label>
              </div>

              <div class="option">
                <input type="radio" id="phoneoption" name="choice">
                <label for="phoneoption">Phone number</label>
              </div>

              <button class="btn_login select">select</button>

          </form>
      </div>
  </div>

</div>

<!-- select modal  -->
<div class="login_code email-sel hidden">

  <div class="select-box">
      <div class="form-value">
          <form action="" class="form_login select_form">
              <h1 style="font-size: 30px; color: gray;">Passoword recovery</h1>
              <div class="options">
                 Enter your Email.
              </div>

              <div class="opti">
              <input type="Email" placeholder="  eg; yours@gmail.com" required>
              </div>


              <button class="btn_login code">Get_code</button>

          </form>
      </div>
  </div>

</div>

{{-- code modal --}}
<div class="login_code hidden sub_code">

    <div class="select-box">
        <div class="form-value">
            <form action="" class="form_login select_form">
                <h1 style="font-size: 30px; color: gray;">Passoword recovery</h1>
                <div class="options">
                   Enter the code.
                </div>

                <div class="opti">
                <input type="number" placeholder="  xxx-xxx" required>
                </div>


                <button class="btn_login s_code">submit</button>

            </form>
        </div>
    </div>

  </div>

    </section>
    <!--    section2-->
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

    <!-- footer section  -->
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
