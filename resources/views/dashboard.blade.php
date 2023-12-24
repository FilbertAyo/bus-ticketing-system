<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>bus booking system</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="/style/all_dash.css">

</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg flex-md-nowrap shadow">
    <a class="navbar-brand px-3" href="/index.html">Filbert bookings</a>


    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="logout" href="{{ url('/') }}">LOGOUT</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item itemdash">
              <a class="nav-link active" aria-current="page" href="/dashboard>
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/buses">
                <span data-feather="file"></span>
               Buses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/routes">
                <span data-feather="shopping-cart"></span>
                Routes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/customers">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/workplace/bookings.html">
                <span data-feather="bar-chart-2"></span>
                Bookings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/seats">
                <span data-feather="layers"></span>
                Seats
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                  <span data-feather="file"></span>
                  Add new admin +
                </a>
              </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="head_dash">Dashboard</h1>
           <h2>Welcome, <span class="admin_name">Musso Ndaro</span></h2>
        </div>

<div class="dash_contents">
        <div class="admin_card">
          <div class="card_name">
            <p>BOOKINGS</p>
          </div>
          <div class="total">
            <p>Total bookings</p><p>10</p>
          </div>
          <div class="view">
            <p>View More &rArr;</p>
          </div>
        </div>

        <div class="admin_card">
          <div class="card_name">
            <p>BUSES</p>
          </div>
          <div class="total">
            <p>Total buses</p><p>9</p>
          </div>
          <div class="view">
            <p>View More &rArr;</p>
          </div>
        </div>

        <div class="admin_card">
          <div class="card_name">
            <p>ROUTES</p>
          </div>
          <div class="total">
            <p>Total routes</p><p>21</p>
          </div>
          <div class="view">
            <p>View More &rArr;</p>
          </div>
        </div>

        <div class="admin_card">
          <div class="card_name">
            <p>SEATS</p>
          </div>
          <div class="total">
            <p>Total seats</p><p>278</p>
          </div>
          <div class="view">
            <p>View More &rArr;</p>
          </div>
        </div>
    </div>

        <div class="dash_contents">

        <div class="admin_card">
          <div class="card_name">
            <p>CUSTOMERS</p>
          </div>
          <div class="total">
            <p>Total customers</p><p>232</p>
          </div>
          <div class="view">
            <p>View More &rArr;</p>
          </div>
        </div>



          <div class="admin_card">
            <div class="card_name">
              <p>ADMINS</p>
            </div>
            <div class="total">
              <p>Total Admin</p><p>3</p>
            </div>
            <div class="view">
              <p>View More &rArr;</p>
            </div>
          </div>


        </div>

         <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="head_dash">Other Admin</h1>
        </div>

        <div class="dash_contents">
        <div class="admin_card other_adm">

          <div class="adm_img">
           <img src="/picture/admin.png" alt="">
          </div>
          <div class="other_name">
            <h3 id="admin_name">Rajabu Omary</h3>
          </div>
          <div class="other">
            <p>Other admin</p>
          </div>
        </div>

        <div class="admin_card other_adm">

          <div class="adm_img">
           <img src="/picture/admin.png" alt="">
          </div>
          <div class="other_name">
            <h3 id="admin_name">Yusra Hemed</h3>
          </div>
          <div class="other">
            <p>Other admin</p>
          </div>
        </div>

      </div>

      </main>

  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
    integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
    crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>
