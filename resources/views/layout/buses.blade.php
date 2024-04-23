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

                            <h4 class="card-title">Bus List</h4>
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                                Add Bus
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
                                      <form method="post" action="{{ route('buses.store') }}">
                                          @csrf
                                          <label for="exampleInputUsername1">Bus Number</label>
                                    <input type="text" placeholder="eg: 324DZU" class="form-control c" name="bus_number" style="text-transform: uppercase;" required>

                                    <div class="mt-3 flex justify-end">
                                      <button type="submit" class="btn btn-primary">Add</button>
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
                                            <th>
                                              No.
                                            </th>
                                            <th> Bus number</th>
                                            <th> Actions </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if($buses->count()>0)
                                        @foreach ($buses as $bus)

                                        <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td>TZ {{ $bus->bus_number }}</td>
                                          <td>
                                            {{-- <div class="badge badge-outline-info">Details</div>
                                            <div class="badge badge-outline-success">Edit</div> --}}
                                            <form action="{{ route('buses.destroy',$bus->id) }}" method="POST" class="" type= "button"  onsubmit="return confirm('Delete')">
                                                @csrf
                                                @method('DELETE')

                                                                    <button class="badge badge-outline-danger">Delete</button>
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


                      </div>
                 </div>
                </div>
            </div>




        </div>
    </div>

</x-app-layout>
