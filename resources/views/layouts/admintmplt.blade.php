<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Restoran Kito</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="{{ asset('Awal/assets/img/icon.jpg') }}"
      href="{{ asset('Awal/assets/img/icon.jpg') }}"
      type="image/x-icon"
    />
    <script src="{{ asset('restoadmn/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('restoadmn/assets/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('restoadmn/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('restoadmn/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('restoadmn/assets/css/kaiadmin.min.css')}}" />

   
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo" style="display: inline-block; height: 40px;">
              <img
                src="{{ asset('restoadmn/assets/img/logo.jpg') }}"
                alt="navbar brand"
                class="navbar-brand"
                style="max-height: 80px; width: auto; float: right; margin-left: 50px;"

              />
            </a>
            
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
              <ul class="nav nav-secondary">
                  <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                      <a href="{{ url('/') }}">
                          <i class="fas fa-home"></i>
                          <p>Beranda</p>
                      </a>
                  </li>
                
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Data Restoran</h4>
              </li>
              <ul class="nav">
                <!-- Menu Informasi Guru -->
                <li class="nav-item {{ request()->is('Pelanggan*') ? 'active' : '' }}">
                  <a data-bs-toggle="collapse" href="#informasiPelanggan">
                      <i class="fas fa-users"></i>
                      <p>Informasi Pelanggan</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse {{ request()->is('Pelanggan*') ? 'show' : '' }}" id="informasiPelanggan">
                      <ul class="nav nav-collapse">
                          <li class="{{ request()->is('Pelanggan') ? 'active' : '' }}">
                            <a href="{{ url('Pelanggan') }}">
                                  <span class="sub-item">Data Pelanggan</span>
                              </a>
                          </li>
                          <li class="{{ request()->is('Pelanggan/create') ? 'active' : '' }}">
                            <a href="{{ url('Pelanggan/create') }}">
                                <span class="sub-item">Tambah Pelanggan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('Pelanggan/laporan/cetak') ? 'active' : '' }}">
                          <a href="{{ url('Pelanggan/laporan/cetak') }}">
                              <span class="sub-item">Laporan Data Pelanggan</span>
                          </a>
                      </li>
                      </ul>
                  </div>
              </li>
              
              <li class="nav-item {{ request()->is('Waiter*') ? 'active' : '' }}">
                  <a data-bs-toggle="collapse" href="#informasiWaiter">
                      <i class="fas fa-user-tie"></i>
                      <p>Informasi Waiter</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse {{ request()->is('Waiter*') ? 'show' : '' }}" id="informasiWaiter">
                      <ul class="nav nav-collapse">
                        <li class="{{ request()->is('Waiter') ? 'active' : '' }}">
                          <a href="{{ url('Waiter') }}">
                                <span class="sub-item">Data Waiter</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('Waiter/create') ? 'active' : '' }}">
                          <a href="{{ url('Waiter/create') }}">
                              <span class="sub-item">Tambah Waiter</span>
                          </a>
                      </li>
                      <li class="{{ request()->is('Waiter/laporan/cetak') ? 'active' : '' }}">
                        <a href="{{ url('Waiter/laporan/cetak') }}">
                            <span class="sub-item">Laporan Data Waiter</span>
                        </a>
                    </li>
                      </ul>
                  </div>
              </li>
              
              <li class="nav-item {{ request()->is('Makanan*') ? 'active' : '' }}">
                  <a data-bs-toggle="collapse" href="#informasiMakanan">
                      <i class="fas fa-utensils"></i>
                      <p>Informasi Menu</p>
                      <span class="caret"></span>
                  </a>
                  <div class="collapse {{ request()->is('Makan*') ? 'show' : '' }}" id="informasiMakanan">
                      <ul class="nav nav-collapse">
                        <li class="{{ request()->is('Makan') ? 'active' : '' }}">
                          <a href="{{ url('Makan') }}">
                                <span class="sub-item">Data Makanan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('Minum') ? 'active' : '' }}">
                          <a href="{{ url('Minum') }}">
                                <span class="sub-item">Data Minuman</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('Makan/create') ? 'active' : '' }}">
                          <a href="{{ url('Makan/create') }}">
                              <span class="sub-item">Tambah Makanan</span>
                          </a>
                      </li>
                      <li class="{{ request()->is('Minum/create') ? 'active' : '' }}">
                        <a href="{{ url('Minum/create') }}">
                            <span class="sub-item">Tambah Minuman</span>
                        </a>
                    </li>
                          <li class="{{ request()->is('Makan/laporan') ? 'active' : '' }}">
                            <a href="{{ url('Makan/laporan/cetak') }}">
                                  <span class="sub-item">Laporan Makanan</span>
                              </a>
                          </li>
                          <li class="{{ request()->is('Minum/laporan') ? 'active' : '' }}">
                            <a href="{{ url('Minum/laporan/cetak') }}">
                                  <span class="sub-item">Laporan Minuman</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item {{ request()->is('Transaksi*') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#informasiTransaksi">
                    <i class="fas fa-money-bill"></i>
                    <p>Informasi Transaksi</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->is('Transaksi*') ? 'show' : '' }}" id="informasiTransaksi">
                    <ul class="nav nav-collapse">
                        <li class="{{ request()->is('Transaksi') ? 'active' : '' }}">
                          <a href="{{ url('Transaksi') }}">
                                <span class="sub-item">Data Transaksi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('Transaksi/create') ? 'active' : '' }}">
                          <a href="{{ url('Transaksi/create') }}">
                                <span class="sub-item">Tambah Transaksi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('Transaksi/laporan') ? 'active' : '' }}">
                          <a href="{{ url('Transaksi/laporan/cetak') }}">
                                <span class="sub-item">Laporan Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
              
         

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid"
            >
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
               
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="{{ asset('Awal/assets/img/prf.png') }}"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="{{ asset('Awal/assets/img/prf.png') }}"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                            <a
                              href="{{ url('Profile') }}"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">My Profile</a>
          
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          @if(Session::has('pesan'))
          <div class="alert alert-success alert-dismissible fade show"role="alert">
              {{ Session::get('pesan') }}
          </div>
              
          @endif
          @yield('isinya')
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
             
                   
    <!--   Core JS Files   -->
    <script src="{{ asset('restoadmn/assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('restoadmn/assets/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('restoadmn/assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('restoadmn/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('restoadmn/assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('restoadmn/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('restoadmn/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{ asset('restoadmn/assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('restoadmn/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('restoadmn/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{ asset('restoadmn/assets/js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('restoadmn/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('restoadmn/assets/js/kaiadmin.min.js') }}"></script>

    
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
