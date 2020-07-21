<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="swadeshparibahan.com swadeshparibahan.net swadeshparibahan  swadesh Ltd Management System LtdManagementSystem">
  <meta name="keywords" content="swadeshparibahan.com swadeshparibahan.net swadeshparibahan swadesh Ltd Management System LtdManagementSystem">
  <meta name="author" content="swadeshparibahan swadesh">
  <!-- /meta tags -->
  <title>স্বদেশ পরিবহন</title>


  <!-- Site favicon -->
  <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- /site favicon -->

  <!-- Font Icon Styles -->
  <link rel="stylesheet" href="{{asset('backend/assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendors/gaxon-icon/style.css')}}">
  <!-- /font icon Styles -->

  <!-- Perfect Scrollbar stylesheet -->
  <link rel="stylesheet" href="{{asset('backend/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}">
  <!-- /perfect scrollbar stylesheet -->

  <!-- Load Styles -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lite-style-1.min.css')}}">
  <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
</div>
<!-- /loader -->

<!-- Root -->
    <div class="row justify-content-center m-5">
        <div class="col-md-4" style="margin-top: 10%;">
            <div class="dt-page__header">
                <h1 class="dt-page__title">সাইটে  প্রবেশ করতে  লগিন করুন ।  </h1>
            </div>
       <!-- Form -->
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <!-- Form Group -->
                        <div class="form-group">
                             <label for="email" class="text-md-left">{{ __('ইমেইল বা উজার নাম প্রদান করুন') }}</label>
                            <input id="email" type="text" class="form-control{{ $errors->has('name') || $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('name') ?: old('email') }}" required autofocus>
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group"> 
                        <label for="password" class="text-md-left">{{ __('পাসওয়ার্ড প্রদান করুন') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        
                                    </span>
                                @endif

                        <!-- /form group -->
                            <div class="form-group mt-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"{{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('প্রবেশ  করুন ') }}
                            </button>
                        </div>
                        <!-- /form group -->


                    </form>
                    <!-- /form -->
        </div>
    </div>

             
<!-- Optional JavaScript -->
<script src="{{asset('backend/assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/moment/moment.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="{{asset('backend/assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="{{asset('backend/assets/node_modules/masonry-layout/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>

<script src="{{asset('backend/assets/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('backend/assets/js/script.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/charts/dashboard-crypto.js')}}"></script>

</body>
</html>