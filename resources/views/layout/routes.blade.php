<x-app-layout>


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

                            <h4 class="card-title">Route details</h4>
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                                Add route
                              </button>
                            </div>

       {{-- modal  --}}

       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content card">
            {{-- <div class="card"> --}}
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add new route</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <div aria-hidden="true" class="icon icon-box-danger ">
                  <span class="mdi mdi-close-box icon-item"></span>
              </div>
              </button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('routes.store') }}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="city">From:</label>
                      <input type="text" id="fcity" class="form-control c" name="from_city" placeholder="eg. Kigoma" required>
                    </div>

                  <div class="form-group mt-3">
                    <label for="city">To:</label>
                    <input type="text" id="tcity" class="form-control c" name="to_city" placeholder="eg. Kahama" required>
                </div>

                  <div class="form-group mt-3">
                      <label for="busNumber">Bus Number:</label>
                   <select name="busNo" class="form-control">
                    @foreach($busNumber as $busNumber)
                    <option value="{{ $busNumber->id }}"> {{ $busNumber->bus_number }}</option>
                    @endforeach
                   </select>
                  </div>

                  <div class="form-group mt-3">
                      <label for="departureDate">Departure Date:</label>
                      <input type="date" id="departureDate" class="form-control c" name="departure_date" required>
                  </div>

                  <div class="form-group mt-3">
                      <label for="departureTime">Departure Time:</label>
                      <input type="time" id="departureTime" class="form-control c" name="departure_time" required>
                  </div>

                  <div class="form-group mt-3">
                    <label for="city">Amount</label>
                    <input type="text" id="amount" class="form-control c" name="amount" placeholder="" required>
                </div>

                  <div class="form-group mt-3 flex justify-end">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>

                </form>

            </form>

            </div>

          </div>
        {{-- </div> --}}
      </div>
      </div>



      <div class="table-responsive">


        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>From_city</th>
                    <th>To_city</th>
                    <th>Bus_No</th>
                    <th>Depart_date</th>
                    <th>Depart_time</th>
                    <th>Amount</th>
                    <th>Actions</th>

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
                  <td>{{ $route->bus_number }}</td>
                  <td>{{ $route->departure_date }}</td>
                  <td>{{ $route->departure_time }}</td>
                  <td>{{ $route->amount }}</td>
                  <td>
                    <form action="{{ route('routes.destroy',$route->id) }}" method="POST" class="btn height-auto p-0" type= "button"  onsubmit="return confirm('Delete')">
                        @csrf
                        @method('DELETE')

                                            <button class="badge badge-outline-danger">Delete</button>
                                        </form>

                  </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td class="text-center" colspan="9">Route not found</td>
                </tr>
            @endif


                      </tbody>
                    </table>
                  </div>








    </div>
</div>



</x-app-layout>
