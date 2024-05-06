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

                            <h4 class="card-title">Passangers details</h4>
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                                Add passanger
                              </button>
                            </div>


                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="card">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Enter passanger details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <div aria-hidden="true" class="icon icon-box-danger ">
                                          <span class="mdi mdi-close-box icon-item"></span>
                                      </div>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('customers.index') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Passanger name:</label>
                                                <input type="text" id="name" class="form-control c"  name="name" placeholder="eg. Salmin" required>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label for="contacts">Contacts:</label>
                                                <input type="text" id="contacts" class="form-control c"  name="contacts" placeholder="eg. 0728399993" required>
                                            </div>

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
                                                 <td>{{ $customer->name }}</td>
                                                 <td>{{ $customer->contacts }}</td>
                                                 <td>
                                                     <form action="{{ route('customers.destroy',$customer->id) }}" method="POST" class="btn height-auto p-0" type= "button"  onsubmit="return confirm('Delete')">
                                                         @csrf
                                                         @method('DELETE')

                                                                             <button class="badge badge-outline-danger">Delete</button>
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








                </div>

              </div>

            </div>


        </div>
        </div>
    </div>


</x-app-layout>
