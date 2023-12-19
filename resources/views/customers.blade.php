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
  <link rel="stylesheet" href="/style/customers.css">

</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg flex-md-nowrap shadow">
    <a class="navbar-brand px-3" href="#">Filbert bookings</a>


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
              <a class="nav-link" aria-current="page" href="/dashboard">
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
              <a class="nav-link active" href="/customers">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bookings">
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
        <h1 class="head_dash">Customers status</h1>
         <h2><span class="admin_name name_color">Musso Ndaro</span></h2>
         <p><button class="add_details">Add Customer details +</button></p>
      </div>

      <form class="customers-form hidden">
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" id="firstname" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Second Name:</label>
          <input type="text" id="secondname" name="name" required>
      </div>

        <div class="form-group">
            <label for="contacts">Contacts:</label>
            <input type="text" id="contacts" name="contacts" required>
        </div>


        <div class="form-group form-butt">
            <button class="close_customer">Close</button>
            <button class="add_customer">Add</button>
        </div>
    </form>

      <div class="bus_details_table">

        <div class="table-responsive route_table">
                  <table class="table  ">
                    <thead>
                      <tr>
                        <th class="customerID">ID</th>
                        <th>Name</th>
                        <th>Contacts</th>
                        <th class="allact">Actions</th>
                        </tr>

                    </thead>
                    <tbody>

                      <tr class="customer_container" style="display: none;">
                        <td>CUS-233</td>
                        <td>Bruno mwakipesile</td>
                        <td>0723464234</td>
                        <td class="actions"><div class="act">
                          <div class="acti edit">edit</div>
                           <div class="acti delete">delete</div>
                          </div> </td>
                        </tr>

                      </tbody>
                    </table>
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
  <script src="/js/customers.js"></script>
</body>

</html>
