@extends('master')

@section('content')
  	<!-- Plugin css for this page -->
     <!-- core:css -->
	  <link rel="stylesheet" href="{{ asset('public/assets/vendor/core/core.css') }}">
	  <link rel="stylesheet" href="{{ asset('public/assets/vendor/datatables.net-bs5/dataTables.bootstrap5.css') }}">
	  <!-- End plugin css for this page -->
<style>
  .bg-secondary{
    background-color: #00394f;
  }
</style>
<section id="hero" class="hero section dark-background">
      <img src="{{ asset('public/assets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between bg-secondary bg-opacity-75 py-4 rounded-4 mt-2">
          <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h3 class="text-white pb-2">Certificate</h3>
            <form action="{{ route('home.certificate') }}" method="GET" class="form-search d-flex align-items-stretch mb-3 px-4" data-aos="fade-up" data-aos-delay="200">
              <input type="text" name="search" class="form-control rounded-start" placeholder="Your  Registration No. OR Mobile Number OR Email ">
              <button type="submit" class="btn btn-primary rounded-end">Search Certificate</button>
            </form>
          </div>
        </div>

        <div class="row py-5">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th width="100">Name</th>
                            <th width="100">Contact Number</th>
                            <th width="100">Trade</th>
                            <th width="100">Batch No</th>
                            <th width="100">Registration No</th>
                            <th width="100">Certificate No</th>
                            <th width="100">Issue Date</th>
                            <th width="100">Certificate View/Download</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($data as $doc)
                        <tr>
                        <td>
                          <a href="{{route('admin.certificate',$doc->id)}}">{{ $doc->name }}</a>
                        </td>									
                        <td>{{ $doc->phone }}</td>
                        <td>{{ $doc->trade_name }}</td>
                        <td>{{ $doc->batch_no }}</td>	
                        <td>{{ $doc->registration_no }}</td>	
                        <td>{{ $doc->certificate_no }}</td>		
                        <td>{{ $doc->created_at->format('d-m-Y') }}</td>								
                        <td class="text-center">
                          <a href="{{route('admin.certificate',$doc->id)}}" class="px-2"><i style="color: green" class="fa-solid fa-eye"></i></a>
                          <a href="{{route('print_certificate',$doc->id)}}" class="px-2"><i style="color: red" class="fa-solid fa-download"></i></a>
                        </td>
                        </tr>
                        
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
      </div>
</section>
<!-- Plugin js for this page -->
 <!-- core:js -->
<script src="{{ asset('public/assets/vendor/core/core.js') }}"></script>

<script src="{{ asset('public/assets/vendor/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/assets/vendor/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('public/assets/js/data-table.js') }}"></script>
<!-- End plugin js for this page -->
@endsection