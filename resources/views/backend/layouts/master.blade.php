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
<!--   <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
 -->  <!-- /site favicon -->

  <!-- Font Icon Styles -->
<!--   <link rel="stylesheet" href="{{asset('backend/assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}"> -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendors/gaxon-icon/style.css')}}">
  <!-- /font icon Styles -->

  <!-- Perfect Scrollbar stylesheet -->
  <link rel="stylesheet" href="{{asset('backend/assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
  <!-- /perfect scrollbar stylesheet -->
  
  <!-- Load Styles -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  {{-- <link rel="stylesheet" href="{{asset('backend/assets/css/lite-style-1.min.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('backend/assets/css/semidark-style-7.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/css/custom.css')}}">
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
<div class="dt-root">

  <!-- Header -->
  @include('backend.inc.header')
  <!-- /header -->

  <!-- Site Main -->
  <main class="dt-main">


    <!-- Sidebar -->
    @include('backend.inc.sidebar')
    <!-- /sidebar -->

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

      <!-- Site Content -->
      <div class="dt-content">

         @yield('backend-content')

      </div>
      <!-- /site content -->

      <!-- Footer -->
      @include('backend.inc.footer')
      <!-- /footer -->

    </div>
    <!-- /site content wrapper -->

    <!-- Theme Chooser -->


  </main>
   @yield('backend-content2')

</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="{{asset('backend/assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/moment/moment.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
{{-- <!-- <script src="{{asset('backend/assets/js/form.js')}}"></script> --> --}}
<!-- Perfect Scrollbar jQuery -->
<script src="{{asset('backend/assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<!-- /perfect scrollbar jQuery -->
<!-- Date-time Pickers -->
<script src="{{asset('backend/assets/node_modules/ammap3/ammap/ammap.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/ammap3/ammap/themes/light.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/ammap3/ammap/maps/js/continentsLow.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/ammap3/ammap/maps/js/worldLow.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/amcharts.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/gauge.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/themes/light.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/serial.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/pie.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/plugins/animate/animate.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/amcharts3/amcharts/plugins/responsive/responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/patternomaly/dist/patternomaly.js')}}"></script>
<!-- /date-time pickers -->

<!-- masonry script -->
<script src="{{asset('backend/assets/node_modules/masonry-layout/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>

<script src="{{asset('backend/assets/node_modules/chart.js/dist/Chart.min.js')}}"></script>
{{-- <script src="{{asset('backend/assets/node_modules/color-convert/index.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/node_modules/color-convert/test/basic.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/node_modules/color-convert/test/speed.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/node_modules/color-name/index.js')}}"></script> --}}
<!-- Custom java script -->
<script src="{{asset('backend/assets/node_modules/gmaps/gmaps.min.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/maps/gmaps.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/charts/dashboard-crypto.js')}}"></script> --}}
<script src="{{asset('backend/assets/js/custom/charts/dashboard-default.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/charts/dashboard-default.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/charts/dashboard-listing.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/js/custom/charts/metrics-charts.js')}}"></script> --}}
<script src="{{asset('backend/assets/js/custom/charts/page-amcharts.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/charts/page-chartjs.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/js/custom/charts/widgets-charts.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/js/custom/code-mirror/code-editor.js')}}"></script> --}}
<script src="{{asset('backend/assets/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/maps/am-maps.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/maps/data-maps.js')}}"></script> --}}
<script src="{{asset('backend/assets/js/custom/maps/gmaps.js')}}"></script>
<script src="{{asset('backend/assets/js/script.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/color-pickers.js')}}"></script> --}}
{{-- <script src="{{ dv }}sset('backend/assets/js/custom/advance-plugins.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/js/custom/data-table.js')}}"></script> --}}
{{-- <script src="{{asset('backend/assets/js/custom/datetime-pickers.js')}}"></script> --}}
<script src="{{asset('backend/assets/js/custom/dropzone.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/editor-summernote.js')}}"></script> --}}
<script src="{{asset('backend/assets/js/custom/notification-alert.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/sortable.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/sweet-alert.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/testimonials.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/widget.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/apps/app.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/apps/mail-app.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/apps/task-manager.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/codemirror/lib/codemirror.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/codemirror/mode/javascript/javascript.js')}}"></script>
{{-- <script src="{{asset('backend/assets/js/custom/code-mirror/code-editor.js')}}"></script> --}}
<script src="{{asset('backend/assets/node_modules/spectrum-colorpicker/spectrum.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/d3/d3.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/topojson/build/topojson.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/datamaps/dist/datamaps.all.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/moment/min/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/moment/min/locales.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
<script src="{{asset('backend/assets/node_modules/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc"></script>
<script src="{{asset('backend/assets/node_modules/gmaps/gmaps.min.js')}}"></script>
<script src="http://tahasinit.com/form.js"></script>
</body>
</html>
