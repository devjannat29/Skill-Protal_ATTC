@extends('admin.admin_dashboard')

@section('content')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Certificate</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <a href="{{ route('admin.view_certificate') }}">
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
            <h6 class="card-title mb-3" style="font-size: large;">Update Certificate</h6>
            <form class="forms-sample" action="{{ route('admin.update_certificate',$data->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Student Name" value="{{ $data->name }}">
                    <span style="color: red;">{{ $errors->first('name') }}</span>
                </div>
                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Father Name" value="{{ $data->father_name }}">
                    <span style="color: red;">{{ $errors->first('father_name') }}</span>
                </div>
                <div class="mb-3">
                    <label for="mother_name" class="form-label">Mother Name</label>
                    <input type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Mother Name" value="{{ $data->mother_name }}">
                    <span style="color: red;">{{ $errors->first('mother_name') }}</span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Student Contact Number</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" value="{{ $data->phone }}">
                    <span style="color: red;">{{ $errors->first('phone') }}</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Student Email <span style="color: red;">*</span></label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ $data->email }}">
                    <span style="color: red;">{{ $errors->first('email') }}</span>
                </div>
                <div class="mb-3">
                    <label for="trade_name" class="form-label">Trade</label>
                    <input type="text" name="trade_name" id="trade_name" class="form-control" placeholder="Trade" value="{{ $data->trade_name }}">
                    <span style="color: red;">{{ $errors->first('trade_name') }}</span>
                </div>
                <div class="mb-3">
                    <label for="batch_no" class="form-label">Batch No</label>
                    <input type="text" name="batch_no" id="batch_no" class="form-control" value="{{ $data->batch_no }}">
                    <span style="color: red;">{{ $errors->first('batch_no') }}</span>
                </div>
                <div class="mb-3">
                    <label for="registration_no" class="form-label">Registration No</label>
                    <input type="text" name="registration_no" id="registration_no" class="form-control" value="{{ $data->registration_no }}">
                    <span style="color: red;">{{ $errors->first('registration_no') }}</span>
                </div>
                <div class="mb-3">
                    <label for="passport_no" class="form-label">Passport No</label>
                    <input type="text" name="passport_no" id="passport_no" class="form-control" value="{{ $data->passport_no }}">
                    <span style="color: red;">{{ $errors->first('passport_no') }}</span>
                </div>
                <div class="mb-3">
                    <label for="certificate_no" class="form-label">Certificate No <span style="color: red;">**Not Changeable**</span></label>
                    <p type="text" name="certificate_no" id="certificate_no" class="form-control" value="{{ $data->certificate_no }}">{{ $data->certificate_no }}</p>
                    <p class="mt-4">{!! DNS2D::getBarcodeHTML("$data->certificate_no", 'QRCODE') !!}</p>
                </div>
                <button type="submit" class="btn btn-primary me-2 px-6 mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>


</div>

@endsection