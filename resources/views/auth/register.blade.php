
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
    <link rel="stylesheet" href="{{asset('backend/assets/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
  <!-- /perfect scrollbar stylesheet -->
   <link rel="stylesheet" href="{{asset('backend/assets/css/dark-style-1.min.css')}}">
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
<div class="dt-root">

    <!-- Login Container -->
    <div class="dt-login--container dt-app-login--container">

        <!-- Login Content -->
        <div class="dt-login__content-wrapper">

            <!-- Login Content Section -->
            <div class="dt-login__content">
                <!-- Login Content Inner -->
                <div class="dt-login__content-inner">
                    <!-- Form -->
                <span style="float:;"><a href="{{ route('home') }}" class="btn btn-outline-success">হোম  পেইজ এ যান</a></span>
                <br><br>
                   <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="align-items-center">
                        @csrf
                        <h1>আপনার অ্যাকাউন্ট তৈরি করুন !</h1>
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="" for="username">ইউজার নাম প্রদান করুন</label>
                             <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus id="username" placeholder="ইউজার নাম">
                              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <label for="email">ইমেইল  প্রদান করুন</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required id="email" placeholder="ইমেইল">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <label  for="password">পাসওয়ার্ড প্রদান করুন</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password" placeholder="পাসওয়ার্ড">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- /form group -->
                        <!-- Form Group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-warning">
                                    {{ __('রেজিস্ট্রার করুণ') }}
                            </button
                        </div>
                        <!-- /form group -->

                    </form>
                    <!-- /form -->

                </div>
                <!-- /login content inner -->

            </div>
            <!-- /login content section -->

        </div>
        <!-- /login content -->

    </div>
    <!-- /login container -->
  
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<!-- Optional JavaScript -->
<script src="{{asset('backend/assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/moment/moment.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="{{asset('backend/assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/masonry-layout/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>
<script src="{{asset('backend/assets/js/script.js')}}"></script>

</body>
</html>
