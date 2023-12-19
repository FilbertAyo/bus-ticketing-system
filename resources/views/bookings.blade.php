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
  <link rel="stylesheet" href="/style/bookings.css">

</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg flex-md-nowrap shadow" >
    <a class="navbar-brand px-3" href="#">Filbert bookings</a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="logout" href="{{ url('/') }}" >LOGOUT</a>
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
              <a class="nav-link" href="/customers">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/bookings">
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
        <h1 class="head_dash">Bookings</h1>
         <h2><span class="admin_name name_color">Musso Ndaro</span></h2>
         <p><button class="add_details">Add booking details +</button></p>
      </div>

      <div class="form_container hidden">
      <form class="route-bus">
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="number"> Contact:</label>
          <input type="text" id="contact" name="contact" required>
      </div>



      <div class="form-group">
        <label for="source"> Source:</label>
        <input type="text" id="source" name="source" required>
    </div>

    <div class="form-group">
      <label for="sedtination"> Destination:</label>
      <input type="text" id="destination" name="destination" required>
  </div>

  <div class="form-group">
    <label for="busNumber">Bus Number:</label>

    <div class="seats">
      <input type="text" id="busNumber" name="busNumber" required>
      <button class="view_seats">View seats</button>
    </div>

</div>
    <!-- <div class="form-group">
      <label for="date"> Departure:</label>
      <input type="date" id="departureDate" name="date" required>
      <input type="time" id="departureTime" name="time" required>
  </div> -->

<!-- seat bus  -->

<div class="bus hidden">
  <!-- Rows -->
  <div class="row">
    <!-- Seats -->
    <div class="seat empty"></div>
    <div class="seat empty"></div>
    <div class="seat empty"></div>
    <div class="seat empty"></div>
    <div class="driver">D</div>
</div>
  <div class="row">
      <!-- Seats -->
      <div class="seat">2</div>
      <div class="seat">3</div>
      <div class="seat empty"></div>
      <div class="seat">4</div>
      <div class="seat">5</div>

  </div>
  <div class="row">
      <!-- Seats -->
      <div class="seat">6</div>
      <div class="seat">7</div>
      <div class="seat empty"></div>
      <div class="seat">8</div>
      <div class="seat">9</div>

  </div>
  <div class="row">
    <!-- Seats -->
    <div class="seat">10</div>
    <div class="seat">11</div>
    <div class="seat empty"></div>
    <div class="seat">12</div>
    <div class="seat">13</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">14</div>
  <div class="seat">15</div>
  <div class="seat empty"></div>
  <div class="seat">16</div>
  <div class="seat">17</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">18</div>
  <div class="seat">19</div>
  <div class="seat empty"></div>
  <div class="seat">20</div>
  <div class="seat">21</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">22</div>
  <div class="seat">23</div>
  <div class="seat empty"></div>
  <div class="seat">24</div>
  <div class="seat">25</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">26</div>
  <div class="seat">27</div>
  <div class="seat empty"></div>
  <div class="seat">28</div>
  <div class="seat">29</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">30</div>
  <div class="seat">31</div>
  <div class="seat empty"></div>
  <div class="seat">32</div>
  <div class="seat">33</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">34</div>
  <div class="seat">35</div>
  <div class="seat empty"></div>
  <div class="seat">36</div>
  <div class="seat">37</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">38</div>
  <div class="seat">39</div>
  <div class="seat empty"></div>
  <div class="seat">40</div>
  <div class="seat">41</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">42</div>
  <div class="seat">43</div>
  <div class="seat empty"></div>
  <div class="seat">44</div>
  <div class="seat">45</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">46</div>
  <div class="seat">47</div>
  <div class="seat empty"></div>
  <div class="seat">48</div>
  <div class="seat">49</div>

</div>
<div class="row">
  <!-- Seats -->
  <div class="seat">50</div>
  <div class="seat">51</div>
  <div class="seat">52</div>
  <div class="seat">53</div>
  <div class="seat">54</div>

</div>

</div>


  <div class="form-group">
    <label for="seaatNumber"> Seat Number:</label>
    <input type="text" id="seatNumber" name="seatNumber" required>
</div>

<div class="form-group">
  <label for="amount"> Total Amount:</label>
  <input type="text" id="amount" name="amount" required>
</div>

        <div class="form-group form-butt">
            <button class="close_route">Close</button>
            <button class="add_route">BOOK</button>
        </div>
    </form>

  </div>

      <div class="bus_details_table">



        <div class="table-responsive route_table">
          <table class="table  ">
            <thead>
              <tr>
                <th>PNR</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Bus</th>
                <th>Route</th>
                <th>Seat</th>
                <th>Amount</th>
                <th>Departure</th>
                <th>Booked</th>
                <th class="allact">Actions</th>

              </tr>
            </thead>
            <tbody>

                  <tr class="book_container" style="display: none ;">
                    <td>RTS456</td>
                    <td>Moses Bunango</td>
                    <td>074593434</td>
                    <td>JHG876</td>
                    <td>DAR-MBEYA</td>
                    <td>23</td>
                    <td>45000</td>
                    <td>20/3/2342</td>
                    <td id="bookTime"></td>
                    <td class="actions"><div class="act">
                      <div class="acti edit">edit</div>
                       <div class="acti delete">delete</div>
                      </div></td>
                    </tr>


                      </tbody>
                    </table>
                  </div>

                </main>

                <div class="overlay hidden"></div>


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
  <script src="/js/bookings.js"></script>
</body>

</html>
