<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ route('home.index') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('public/upload/logo-2.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home.index') }}" class="active">Home<br></a></li>
          <li><a href="{{ route('login') }}" class="active">Login<br></a></li>
          <li><a href="https://asiattcbd.com/" class="active">Visit To ATTC<br></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('home.certificate') }}">Get Certificate</a>

    </div>
</header>