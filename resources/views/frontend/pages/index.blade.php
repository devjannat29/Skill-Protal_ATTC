@extends('master')

@section('content')

<section id="hero" class="hero section dark-background">

      <img src="{{ asset('public/assets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Asia Technical Training Center</h2>
            <p data-aos="fade-up" data-aos-delay="100">Registered Training Organization - Bangladesh Technical Education Board (BTEB) And Testing Center</p>

            <form action="{{ route('home.certificate') }}" method="GET" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              <input type="text" name="search" class="form-control" placeholder="Your  Registration No. OR Mobile Number OR Email">
              <button type="submit" class="btn btn-primary">Search</button>
            </form>

<!--             <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" class="purecounter">232</span>
                  <p>Students</p>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="0" class="purecounter">521</span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="0" class="purecounter">1453</span>
                  <p>Courses</p>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="0" class="purecounter">32</span>
                  <p>Workers</p>
                </div>
              </div>

            </div> -->

          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('public/assets/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
          </div>

        </div>
      </div>

</section>

<!-- Featured Services Section -->
<!-- <section id="featured-services" class="featured-services section">
<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
      <div>
        <h4 class="title">Lorem Ipsum</h4>
        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    

    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
      <div>
        <h4 class="title">Dolor Sitema</h4>
        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
      <div>
        <h4 class="title">Sed ut perspiciatis</h4>
        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>

</div>
</section> -->
<!-- /Featured Services Section -->

<!-- About Section -->
<section id="about" class="about section">

  <div class="container">
  @php
    $about = App\Models\About::find(1);
  @endphp
  <div class="row gy-4">

    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
      @if($about && $about->image != '')
          <img src="{{ asset('public/upload/about/'.$about->image) }}" alt="" class="img-fluid rounded mb-5 mb-lg-0" data-aos="fade-in">
      @else
        <p>No image available</p>
      @endif
    </div>

    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
      <h3>Welcome to ATTC</h3>
        @if($about && $about->about_desc != '')
          <p>{!! $about->about_desc !!}</p>
        @else
          <p>Nothing available</p>
        @endif

    </div>

  </div>

  </div>

</section><!-- /About Section -->


<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

<img src="assets/img/cta-bg.jpg" alt="">

<div class="container">
  <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
      <div class="text-center">
        <h2>Visit Asia Technical Training Center</h2>
        <a class="cta-btn" href="https://asiattcbd.com/">Call To Action</a>
      </div>
    </div>
  </div>
</div>
</section><!-- /Call To Action Section -->


<!-- Faq Section -->
<section id="faq" class="faq section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <span>Frequently Asked Questions</span>
  <h2>Frequently Asked Questions</h2>
</div><!-- End Section Title -->

<div class="container">

  <div class="row justify-content-center">

    <div class="col-lg-10">

      <div class="faq-container">
      @foreach ($faq as $faqs)
        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
          <i class="faq-icon bi bi-question-circle"></i>
          <h3>{{ $faqs->faq }}</h3>
          <div class="faq-content">
            <p>{{ $faqs->faqa }}</p>
          </div>
          <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->
      @endforeach
      </div>

    </div>

  </div>

</div>

</section><!-- /Faq Section -->

@endsection