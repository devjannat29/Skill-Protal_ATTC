@extends('admin.admin_dashboard')

@section('content')

<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">About Us</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.add_faq') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Add FAQ
            </button>
        </a>
      </div>
    </div>
    @include('_message')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Certificate</h6>
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                            <th width="100">FAQ</th>
                            <th width="100">FAQ Answer</th>
                            <th width="100">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($faq as $faqs)
                        <tr>	
                        <td>{{ $faqs->faq }}</td>	
                        <td>{{ $faqs->faqa }}</td>									
                        <td>
                          <a href="{{ route('admin.delete_faq',$faqs->id) }}" onclick="showSwal('passing-parameter-execute-cancel')"><i style="color: red" data-feather="x-circle"></i></a>
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

@endsection