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

          <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 60px;">

            <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="head_dash">Customers status</h1>
             <p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Customer
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

                    <form method="post" action="{{ route('customers.index') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">First Name:</label>
                            <input type="text" id="firstname" class="form-control"  name="fname" placeholder="eg. Salmin" required>
                        </div>
                        <div class="form-group mt-3">
                          <label for="name">Last Name:</label>
                          <input type="text" id="secondname" class="form-control"  name="lname" placeholder="eg. Mdeme" required>
                      </div>

                        <div class="form-group mt-3">
                            <label for="contacts">Contacts:</label>
                            <input type="text" id="contacts" class="form-control"  name="contacts" placeholder="eg. 0728399993" required>
                        </div>

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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contacts</th>
                            <th>Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @if($customers->count()>0)
                   @foreach ($customers as $customer)

                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->fname }} {{ $customer->lname }}</td>
                            <td>{{ $customer->contacts }}</td>
                            <td>
                                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST" class="btn height-auto p-0" type= "button"  onsubmit="return confirm('Delete')">
                                    @csrf
                                    @method('DELETE')

                                                        <button class="badge btn-danger">Delete</button>
                                                    </form>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                              <td class="text-center" colspan="5">Customer not found</td>
                          </tr>
                      @endif
                          </tbody>
                        </table>
                      </div>


                    </main>


</x-app-layout>
