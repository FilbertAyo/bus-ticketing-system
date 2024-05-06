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

                            <h4 class="card-title">Booking details</h4>
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                                Book
                              </button>
                            </div>

                            {{-- modal  --}}

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="card">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Bus detail</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <div aria-hidden="true" class="icon icon-box-danger ">
                                          <span class="mdi mdi-close-box icon-item"></span>
                                      </div>
                                      </button>
                                    </div>
                                    <div class="modal-body">

                                        <form class="route-bus" method="post" action="{{ route('booking.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name"> Name:</label>
                                                <input type="text" id="customer_name" name="fullName"  class="form-control c" required>
                                            </div>

                                            <div class="form-group mt-3">
                                              <label for="number"> Contact:</label>
                                              <input type="text" id="contact" name="contact"  class="form-control c">
                                          </div>



                                          <div class="form-group mt-3">
                                            <label for="source"> Source:</label>
                                            <input type="text" id="source" name="source"  class="form-control c" required>
                                        </div>

                                        <div class="form-group mt-3">
                                          <label for="sedtination"> Destination:</label>
                                          <input type="text" id="destination" name="destination"  class="form-control c" required>
                                      </div>

                                      <div class="form-group mt-3">
                                        <label for="busNumber">Bus Number:</label>
                                        <input type="text" id="busNumber" name="busNumber"  class="form-control c" required>
                                    </div>

                                        <div class="form-group mt-3" >
                                          <label for="date"> Departure:</label>

                                          <div class="flex gap-4">
                                            <input type="date" id="departureDate" class="form-control c"  name="departureDate" required>
                                          <input type="time" id="departureTime" class="form-control c" name="departureTime" required>
                                          </div>

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
                                                    <input type="text" id="seatNumber" name="seat"  class="form-control c" required>
                                                </div>

                                                <div class="form-group mt-3">
                                                  <label for="amount"> Total Amount:</label>
                                                  <input type="text" id="amount" name="amount"  class="form-control c" required>
                                                </div>

                                                <div class="mt-3 flex justify-end">
                                                    <button type="submit" class="btn btn-primary">Add</button>
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
                              </div>



                            <div class="table-responsive">


                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
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
                                            @if($bookings->count()>0)
                                            @foreach($bookings as $booking)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $booking->fullName }}</td>
                                            <td>{{ $booking->contact }}</td>
                                            <td>{{ $booking->busNumber }}</td>
                                            <td>{{ $booking->source }}-{{ $booking->destination }}</td>
                                            <td>{{ $booking->seat }}</td>
                                            <td>{{ $booking->amount }}</td>
                                            <td>{{ $booking->departureDate }}:{{ $booking->departureTime }}</td>
                                            <td >{{ $booking->created_at }}</td>
                                            <td>

                                                <form action="{{ route('booking.destroy',$booking->id) }}" method="POST" class="btn height-auto p-0" type= "button"  onsubmit="return confirm('Delete')">
                                                    @csrf
                                                    @method('DELETE')

                                                                        <button class="badge badge-outline-danger">Delete</button>
                                                                    </form>
                                                                    <span class="badge badge-outline-success">Receipt</span>
                                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                              <td class="text-center" colspan="10">Bookings not found</td>
                                          </tr>
                                      @endif

                                              </tbody>
                                            </table>
                                          </div>


                    </div>

                </div>
              </div>

        </div>
    </div>
    </div>


    <style>






.row {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 5px 0;
}

.seat {
    width: 50px;
    height: 50px;
    border: 1px solid gray;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    cursor: pointer;
}
.driver {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    background-color: red;
    color: white;
}

.empty {
    visibility: hidden;
}

.seat.occupied {
    background-color: #ff0000; /* Red */
    color: #fff;
}




.seats{
    display: flex;
    gap: 40px;
}



    </style>

    <script>

document.getElementById('customer_name').addEventListener('blur',function(){
    var customerName = this.value;
    fetch('/customer'+ customerName)
    .then(response=>response.json())
    .then(data=>{
        document.getElementById('contact').value = data.contact;
    });
});

    </script>


</x-app-layout>
