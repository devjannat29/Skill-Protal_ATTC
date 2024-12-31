<!DOCTYPE html>
<html lang="en">
@include('frontend.partials.head')

<body class="index-page">

    <!-- Navbar Start -->
    @include('frontend.partials.navbar')
    <!-- Navbar End -->



  <main class="main">

    @yield('content')
    

  </main>

    <!-- Footer Start -->
    @include('frontend.partials.footer')
    <!-- Footer End -->


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('frontend.partials.scripts')


</body>

</html>