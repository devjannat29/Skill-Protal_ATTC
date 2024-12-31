<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Asia Technical Traning Center - Skill Protal">
	<meta name="author" content="Asia Technical Traning Center">
	<meta name="keywords" content="Asia Technical Traning Center - Skill Protal">

	<title>Asia Technical Traning Center - Skill Protal</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('public/backend/assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('public/backend/assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('public/backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('public/backend/assets/css/demo1/style.css') }}">
  <!-- End layout styles -->

  <!-- Favicons -->
  <link href="{{ asset('public/upload/logo.png') }}" rel="icon">
  <link href="{{ asset('public/upload/metalogo.png') }}" rel="apple-touch-icon">

{{-- external css --}}


</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <!-- <div class="col-md-4 pe-md-0">
                  <div class="authlogin-side-wrapper">

                  </div>
                </div> -->
                <div class="col-md-12 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2 align-items-center text-center">Asia<span>SkillProtal</span></a>
                    <h5 class="text-muted fw-normal mb-4 align-items-center text-center">Welcome back! Log in to your account.</h5>

                    <form class="forms-sample px-4" action="{{ route('login') }}" method="POST">
                        @csrf
                      <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        <span style="color: red;">{{ $errors->first('name') }}</span>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        <span style="color: red;">{{ $errors->first('email') }}</span>
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="Password" autocomplete="current-password" placeholder="Password">
                        <span style="color: red;">{{ $errors->first('password') }}</span>
                      </div>
                      <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" autocomplete="current-password" placeholder="Password">
                        <span style="color: red;">{{ $errors->first('password_confirmation') }}</span>
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>
                        
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0 px-6">
                          Register
                        </button>
                      </div>
                      <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Already have a account? Sign in</a>
                    </form>

                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('public/backend/assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('public/backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('public/backend/assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>


