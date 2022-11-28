<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex justify-content-between">
    <div id="logo">
      <h1><a href="{{ asset('/home') }}">FP KELOMPOK <span>1</span></a></h1>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link"  href="{{ asset('/home') }}">Home</a></li>
        <li><a class="nav-link " href="{{ asset('/about') }}">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#!" data-toggle="dropdown">Our Product 
            <i class="bi bi-caret-down"></i></a>
            <!-- Dropdown list -->
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ asset('device') }}">Device</a></li>
                <li><a class="dropdown-item" href="{{ asset('liquid') }}">Liquid</a></li>
                <li><a class="dropdown-item" href="{{ asset('acc') }}">Accecories</a></li>
                <li><a class="dropdown-item" href="{{ asset('batre') }}">Baterai</a></li>
                <li><a class="dropdown-item" href="{{ asset('coil') }}">Coil</a></li>
            </ul>
        </li>
        
        <li><a class="nav-link scrollto" href="{{ asset('/contact') }}">Contact</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('/login') }}">Login</a></li>        

        {{-- <li class="nav-item dropdown"><a class="nav-link" href="#!" data-toggle="dropdown">Admin
          <i class="bi bi-caret-down"></i></a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Kelola Produk</a></li>
            <li><a class="dropdown-item" href="">Kelola Member</a></li>
            <li><a class="dropdown-item" href="">Log out</a></li>
          </ul>
        </li>  --}}
        
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header>
<!-- End Header -->