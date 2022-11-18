<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/')}}#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}#services">Services</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}#appointment">Appointment</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if(Route::has('login'))

      @auth
      <a href="{{ url('my_appointment' )}}" class="appointment-btn scrollto">My Appointment</a>
      <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"class="appointment-btn scrollto">
            {{ Auth::user()->name}}| {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      @else
      <a href="{{route('login')}}" class="appointment-btn scrollto">Login</a>
      <a href="{{route('register')}}" class="appointment-btn scrollto">Register</a>
      @endauth
      @endif
    </div>
  </header>