@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সর্বমোট  লাভের  তালিকা  দেখুন</h1>
    <hr>
</div>
<div class="row">
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আজকের মোট লাভ</h2>
              <span class="d-block text-geekblue">{{$profit}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
    <!-- /card -->
  </div>
  
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ সপ্তায়ে মোট লাভ</h2>
              <span class="d-block text-geekblue">{{$weekprofit }}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ মাসের মোট লাভ</h2>
              <span class="d-block text-geekblue">{{$mprofit}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ বছরের মোট লাভ</h2>
              <span class="d-block text-geekblue">{{$yearprofit }}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">সর্বমোট মোট লাভ</h2>
              <span class="d-block text-geekblue">{{ $tprofit }}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
    <!-- /card -->
  </div>
</div>
@endsection