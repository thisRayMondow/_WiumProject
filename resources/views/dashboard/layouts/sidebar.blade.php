<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="/dashboard" class="nav-link">
        <div class="nav-profile-image">
          <img src="/vendors/assets/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column pt-3">
          <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
          <span class="text-secondary text-small">{{ auth()->user()->is_admin == 0 ? 'User Admin' : 'General Admin'
            }}</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="/home">
        <span class="menu-title">Beranda</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    {{-- @can('is_admin')
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Master Data</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/dashboard/users">Data Users</a></li>
          <li class="nav-item"> <a class="nav-link" href="/dashboard/loket">Data Loket</a></li>
          <li class="nav-item"> <a class="nav-link" href="/dashboard/layanan">Data Layanan</a></li>
          <li class="nav-item"> <a class="nav-link" href="/dashboard/dokter">Data Dokter</a></li>
        </ul>
      </div>
    </li>
    @endcan --}}

    {{-- <li class="nav-item">
      <a class="nav-link" href="/dashboard/antrian">
        <span class="menu-title">Antrian</span>
        <i class="mdi mdi-ticket-account menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/dashboard/plasma-antrian">
        <span class="menu-title">Plasma Antrian</span>
        <i class="mdi mdi-ticket-account menu-icon"></i>
      </a>
    </li> --}}

    @if (auth()->user()->is_admin == true)
    <li class="nav-item">
      <a class="nav-link" href="/home/DEPT">
        <span class="menu-title">Departement</span>
        <i class="mdi mdi-home-city-outline menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/home/ADDUSER">
        <span class="menu-title">Pengguna</span>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
    </li>
    @endif

    <li class="nav-item">
      <a class="nav-link" href="/home/WORKER">
        <span class="menu-title">Pekerja Mission</span>
        <i class="mdi mdi-account-tie menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/home/PEOPLE">
        <span class="menu-title">Anggota Jemaat</span>
        <i class="mdi mdi-account-group menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/home/LogActivity">
        <span class="menu-title">Log Aktifitas</span>
        <i class="mdi mdi-format-list-bulleted-square menu-icon"></i>
      </a>
    </li>

  </ul>
</nav>