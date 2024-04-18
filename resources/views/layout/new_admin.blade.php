<x-app-layout>


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
                <a class="nav-link active" href="/admin">
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
          <h1 class="head_dash">Admin</h1>
          <p><button class="add_details">New Admin +</button></p>
        </div>

        <div class="admin_form hidden">
            {{-- <form method="post" action="{{url('/add_user')}}">
            @csrf
              <label for="firstName">First Name:</label>
              <input class="inp" type="text" id="firstName" name="firstName" required>

              <label for="lastName">Last Name:</label>
              <input class="inp" type="text" id="lastName" name="lastName" required>

              <label for="email">Email:</label>
              <input class="inp" type="email" id="email" name="email" required>

              <label for="phoneNumber">Phone Number:</label>
              <input class="inp" type="tel" id="phoneNumber" name="phoneNumber" required>

              <label for="password">Password:</label>
              <input class="inp" type="password" id="password" name="password" required>

              <button type="submit"  >Add</button>
          </form> --}}
          </div>
        </div>

        <div class="dash_contents">

            {{-- @foreach ($user as $user)
          <div class="admin_card other_adm">
            <div class="adm_img">
             <img src="/picture/admin.png" alt="">
            </div>
            <div class="other_name">
              <h3 id="admin_name">{{ $user->first_name }} {{ $user->last_name }}</h3>
            </div>
            <div class="other">
              <p id="admin_contact">{{ $user->phone_number }}</p>
            </div>
          </div>
          @endforeach --}}
        </div>

      </main>

</x-app-layout>
