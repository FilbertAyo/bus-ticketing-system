<x-app-layout>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="flex justify-center" style="font-size: 25px;">MAINO</div>
        <div class="position-sticky pt-3">
        <img src="/picture/baccc.jpeg" alt="">

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

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 60px;">
        <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="head_dash">Bookings</h1>

         <p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Booking
              </button>
         </p>
      </div>





    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Bus Number</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">



      <form class="route-bus" method="post" action="{{ url('/bookings') }}">
        @csrf
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" id="name" name="fullName"  class="form-control" required>
        </div>

        <div class="form-group mt-3">
          <label for="number"> Contact:</label>
          <input type="text" id="contact" name="contact"  class="form-control" required>
      </div>



      <div class="form-group mt-3">
        <label for="source"> Source:</label>
        <input type="text" id="source" name="source"  class="form-control" required>
    </div>

    <div class="form-group mt-3">
      <label for="sedtination"> Destination:</label>
      <input type="text" id="destination" name="destination"  class="form-control" required>
  </div>

  <div class="form-group mt-3">
    <label for="busNumber">Bus Number:</label>
    <input type="text" id="busNumber" name="busNumber"  class="form-control" required>
</div>

    <div class="form-group mt-3 flex gap-4" >
      <label for="date"> Departure:</label>
      <input type="date" id="departureDate" class="form-control"  name="date" required>
      <input type="time" id="departureTime" class="form-control" name="time" required>
  </div>

  <div class="flex justify-end mt-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example">
        Book Seat
      </button>
  </div>
<!-- seat bus  -->


  <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Bus Number</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


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


            <div class="form-group mt-3">
                <label for="seaatNumber"> Seat Number:</label>
                <input type="text" id="seatNumber" name="seatNumber"  class="form-control" required>
            </div>

            <div class="form-group mt-3">
              <label for="amount"> Total Amount:</label>
              <input type="text" id="amount" name="amount"  class="form-control" required>
            </div>

            <div class="mt-3 flex justify-end">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>

            </div>


        </div>

      </div>
    </div>
  </div>


    </form>

            </div>
          </div>
        </div>
      </div>




      <div class="site-blocks-table">

          <table class="table table-bordered">
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
                <th>Actions</th>

              </tr>
            </thead>
            <tbody>

                  <tr>
                    <td>RTS456</td>
                    <td>Moses Bunango</td>
                    <td>074593434</td>
                    <td>JHG876</td>
                    <td>DAR-MBEYA</td>
                    <td>23</td>
                    <td>45000</td>
                    <td>20/3/2342</td>
                    <td ></td>
                    <td>  </td>
                    </tr>


                      </tbody>
                    </table>
                  </div>

                </main>



</x-app-layout>
