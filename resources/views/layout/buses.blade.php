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
                  <a class="nav-link active" href="/buses">
                    <span data-feather="file"></span>
                   Buses
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('routes.index') }}">
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
              <h1 class="head_dash">Bus details</h1>

               <p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Bus
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
                        <form method="post" action="{{ route('buses.store') }}">
                            @csrf

                      <input type="text" placeholder="Bus number" class="form-control" name="bus_number">

                      <div class="mt-3 flex justify-end">
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
                              <th>Bus Number</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>

                            @if($buses->count()>0)
                            @foreach ($buses as $bus)

                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $bus->bus_number }}</td>
                              <td>

                                <form action="{{ route('buses.destroy',$bus->id) }}" method="POST" class="" type= "button"  onsubmit="return confirm('Delete')">
                                    @csrf
                                    @method('DELETE')

                                                        <button class="badge btn-danger">Delete</button>
                                                    </form>

                               </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                              <td class="text-center" colspan="5">Bus not found</td>
                          </tr>
                      @endif

                          </tbody>
                        </table>


              </div>

        </main>



</x-app-layout>
