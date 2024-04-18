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
              <a class="nav-link" href="{{ route('buses.index') }}">
                <span data-feather="file"></span>
               Buses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('routes.index') }}">
                <span data-feather="shopping-cart"></span>
                Routes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('customers.index') }}">
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

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 60px;">

        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="head_dash">Route details</h1>
           <p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Route
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

                <form method="post" action="{{ route('routes.store') }}">
                    @csrf
                    <div class="form-group">
                      <label for="city">From:</label>
                      <input type="text" id="fcity" class="form-control" name="from_city" placeholder="eg. Kigoma" required>
                    </div>

                  <div class="form-group mt-3">
                    <label for="city">To:</label>
                    <input type="text" id="tcity" class="form-control" name="to_city" placeholder="eg. Kahama" required>
                </div>

                  <div class="form-group mt-3">
                      <label for="busNumber">Bus Number:</label>
                   <select name="bus_number_id" id="bus_number_id" class="form-control">
                    @foreach($busNumber as $busNumber)
                    <option value="{{ $busNumber->id }}"> {{ $busNumber->bus_number }}</option>
                    @endforeach
                   </select>
                  </div>

                  <div class="form-group mt-3">
                      <label for="departureDate">Departure Date:</label>
                      <input type="date" id="departureDate" class="form-control" name="departure_date" required>
                  </div>

                  <div class="form-group mt-3">
                      <label for="departureTime">Departure Time:</label>
                      <input type="time" id="departureTime" class="form-control" name="departure_time" required>
                  </div>

                  <div class="form-group mt-3 flex justify-end">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>

                </form>
            </div>

          </div>
        </div>
      </div>

        <div class="site-blocks-table">


            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
            </div>
              @endif

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>From_city</th>
                  <th>To_city</th>
                  <th>Bus_No</th>
                  <th>Depart_date</th>
                  <th>Depart_time</th>
                  <th class="allact">Actions</th>

                </tr>
              </thead>
              <tbody>

                {{-- @foreach($busNumber as $busNumber)
                <td>
                 {{ $busNumber->bus_number_id }}
             </td>
                 @endforeach --}}

                @if($routes->count()>0)
                @foreach ($routes as $route)

                <tr class="route_container">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $route->from_city }}</td>
                  <td>{{ $route->to_city }}</td>
                  <td> //here</td>
                  <td>{{ $route->departure_date }}</td>
                  <td>{{ $route->departure_time }}</td>
                  <td>
                    <form action="{{ route('routes.destroy',$route->id) }}" method="POST" class="btn height-auto p-0" type= "button"  onsubmit="return confirm('Delete')">
                        @csrf
                        @method('DELETE')

                                            <button class="badge btn-danger">Delete</button>
                                        </form>

                  </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td class="text-center" colspan="5">Route not found</td>
                </tr>
            @endif


                      </tbody>
                    </table>
                  </div>




                </main>

                <script src="/js/routes.js"></script>
</x-app-layout>
