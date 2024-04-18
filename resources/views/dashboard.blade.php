<x-app-layout>

    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="flex justify-center" style="font-size: 25px;">MAINO</div>
            <div class="position-sticky pt-3">
            <img src="/picture/baccc.jpeg" alt="">

              <ul class="nav flex-column">
                <li class="nav-item itemdash">
                  <a class="nav-link active" aria-current="page" href="/dashboard>
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
                  <a class="nav-link" href="/workplace/bookings.html">
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

          <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 " style="margin-top: 80px;">
            <div
              class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="head_dash">Dashboard</h1>
            </div>

    <div class="dash_contents flex column">
        <div class="col-bg-3 col-md-3 admin_card">
              <div class="card_name">
                <p>BOOKINGS</p>
              </div>
              <div class="total">
                <p>Total bookings</p><p>10</p>
              </div>
              <div class="view">
                <p> More &rArr;</p>
              </div>
            </div>

            <div class="col-bg-3 col-md-3 admin_card">
              <div class="card_name">
                <p>BUSES</p>
              </div>
              <div class="total">
                <p>Total buses</p><p>9</p>
              </div>
              <div class="view">
                <p> More &rArr;</p>
              </div>
            </div>

            <div class="col-bg-3 col-md-3 admin_card">
              <div class="card_name">
                <p>ROUTES</p>
              </div>
              <div class="total">
                <p>Total routes</p><p>21</p>
              </div>
              <div class="view">
                <p> More &rArr;</p>
              </div>
            </div>

            <div class="col-bg-3 col-md-3 admin_card">
              <div class="card_name">
                <p>SEATS</p>
              </div>
              <div class="total">
                <p>Total seats</p><p>278</p>
              </div>
              <div class="view">
                <p> More &rArr;</p>
              </div>
            </div>
        </div>

            <div class="dash_contents flex">

                <div class="col-bg-3 col-md-3 admin_card">
              <div class="card_name">
                <p>CUSTOMERS</p>
              </div>
              <div class="total">
                <p>Total customers</p><p>232</p>
              </div>
              <div class="view">
                <p> More &rArr;</p>
              </div>
            </div>



            <div class="col-bg-3 col-md-3 admin_card">
                <div class="card_name">
                  <p>ADMINS</p>
                </div>
                <div class="total">
                  <p>Total Admin</p><p>3</p>
                </div>
                <div class="view">
                  <p>More &rArr;</p>
                </div>
              </div>


            </div>

             <div
              class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="head_dash">Other Admin</h1>
            </div>

            <div class="dash_contents">
                <div class="col-bg-3 col-md-3 other_adm">

              <div class="adm_img">
               <img src="/picture/admin.png" alt="">
              </div>
              <div class="other_name">
                <h3 id="admin_name">Rajabu Omary</h3>
              </div>
              <div class="other">
                <p>Other admin</p>
              </div>
            </div>

          </div>

          </main>

</x-app-layout>
