@extends('admin.admin_dashboard')

@section('content')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">FAQ</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_faq') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Back
            </button>
        </a>
      </div>
    </div>
    @include('_message')

    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title mb-3" style="font-size: large;">Add FAQ</h6>
            <form class="forms-sample" action="{{ route('admin.upload_faq') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="description" class="form-label mb-3" style="font-weight: bold;">FAQ</label>
                    <textarea name="faq" cols="10" rows="5" class=" form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label mb-3" style="font-weight: bold;">FAQ Answer</label>
                    <textarea name="faqa" cols="10" rows="5" class=" form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>
    </div>
</div>


</div>

@endsection