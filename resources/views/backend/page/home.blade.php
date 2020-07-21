@extends('backend.layouts.master')
@section('backend-content')
<div class="row home-page">
  
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('today')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আজকের মোট আয়</h2>
              <span class="d-block text-geekblue">{{$todaytotalearn}}&nbsp; টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div></a>
    <!-- /card -->
  </div>

    <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('week')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ সপ্তায়ে  মোট আয়</h2>
              <span class="d-block text-geekblue">{{$weektotalearn}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div></a>
    <!-- /card -->
  </div>

  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('month')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ মাসের মোট আয়</h2>
              <span class="d-block text-geekblue">{{$monthtotalearn}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('year')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ বছরের  মোট আয়</h2>
              <span class="d-block text-geekblue">{{$ytotalearn}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('total')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">সর্বমোট  মোট আয়</h2>
              <span class="d-block text-geekblue">{{$ttotalearn}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
   </a>
    <!-- /card -->
  </div>

  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('today1')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আজকের মোট খরচ </h2>
              <span class="d-block text-geekblue">{{$todaytotal}}&nbsp; টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('week1')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ সপ্তায়ে  মোট খরচ</h2>
              <span class="d-block text-geekblue">{{$weektotalcost}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('month1')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ মাসের মোট খরচ</h2>
              <span class="d-block text-geekblue">{{$mtotalcost}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('year1')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">এ বছরের  মোট খরচ</h2>
              <span class="d-block text-geekblue">{{$ytotal}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <a href="{{route('total1')}}">
    <div class="dt-card dt-card__full-height bg-warning">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
          <!-- Media -->
          <div class="media flex-column align-items-center">
            <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-money-bill-wave fa-2x"></i></span>
            <!-- Media Body <-->
            <div class="media-body">
              <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">সর্বমোট  মোট খরচ</h2>
              <span class="d-block text-geekblue">{{$ttotal}}&nbsp;টাকা</span>
            </div>
            <!-- /media body -->
          </div>
        <!-- /media -->
        </div>
      <!-- /card body -->
    </div>
  </a>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
      <a href="{{route('owner.create')}}">
          <!-- Card Body -->
          <div class="dt-card__body text-center py-6 px-4">
            <!-- Media -->
            <div class="media flex-column align-items-center">
              <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-user fa-2x"></i></i></span>
              <!-- Media Body <-->
              <div class="media-body">
                <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">গাড়ির মালিক সংখ্যা </h2>
                <span class="d-block text-geekblue">{{($total['owner'])? $total['owner']:0}} জন</span>
              </div>
              <!-- /media body -->
            </div>
          <!-- /media -->
          </div>
        <!-- /card body -->
      </a>
    </div>
    <!-- /card -->
  </div>

 
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
      <a href="{{route('driver.create')}}">
          <!-- Card Body -->
          <div class="dt-card__body text-center py-6 px-4">
            <!-- Media -->
            <div class="media flex-column align-items-center">
              <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-users fa-2x"></i></span>
              <!-- Media Body <-->
              <div class="media-body">
                <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">ড্রাইভার  সংখ্যা</h2>
                <span class="d-block text-geekblue">{{($total['driver'])? $total['driver']:0}} জন</span>
              </div>
              <!-- /media body -->
            </div>
          <!-- /media -->
          </div>
        <!-- /card body -->
      </a>
    </div>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <!-- Card -->
    <div class="dt-card dt-card__full-height bg-warning">
      <a href="{{route('helper.create')}}">
          <!-- Card Body -->
          <div class="dt-card__body text-center py-6 px-4">
            <!-- Media -->
            <div class="media flex-column align-items-center">
              <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-users fa-2x"></i></span>
              <!-- Media Body <-->
              <div class="media-body">
                <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">হেল্পার  সংখ্যা</h2>
                <span class="d-block text-geekblue">{{($total['helper'])? $total['helper']:0}}  জন</span>
              </div>
              <!-- /media body -->
            </div>
          <!-- /media -->
          </div>
        <!-- /card body -->
      </a>
    </div>
    <!-- /card -->
  </div>
  <div class="col-md-3">
    <a href="{{route('counter.index')}}">
      <!-- Card -->
      <div class="dt-card dt-card__full-height bg-warning">
          <!-- Card Body -->
          <div class="dt-card__body text-center py-6 px-4">
            <!-- Media -->
            <div class="media flex-column align-items-center">
              <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-home fa-2x"></i></i></span>
              <!-- Media Body <-->
              <div class="media-body">
                <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">কাউন্টার  সংখ্যা</h2>
                <span class="d-block text-geekblue">{{($total['counter'])? $total['counter']:0}} টি</span>
              </div>
              <!-- /media body -->
            </div>
          <!-- /media -->
          </div>
        <!-- /card body -->
      </div>
      <!-- /card -->
    </a>
  </div>
  <div class="col-md-3">
    <a href="{{route('bus.index')}}">
      <!-- Card -->
      <div class="dt-card dt-card__full-height bg-warning">
          <!-- Card Body -->
          <div class="dt-card__body text-center py-6 px-4">
            <!-- Media -->
            <div class="media flex-column align-items-center">
              <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-bus fa-2x"></i></span>
              <!-- Media Body <-->
              <div class="media-body">
                <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">গাডির  সংখ্যা </h2>
                <span class="d-block text-geekblue">{{($total['carinfo'])? $total['carinfo']:0}} টি </span>
              </div>
              <!-- /media body -->
            </div>
          <!-- /media -->
          </div>
        <!-- /card body -->
      </div>
      <!-- /card -->
    </a>
  </div>  
<div class="col-md-3">
    <!-- Card -->
    <a href="{{route('checkpost.index')}}">
      <div class="dt-card dt-card__full-height bg-warning">
          <!-- Card Body -->
          <div class="dt-card__body text-center py-6 px-4">
            <!-- Media -->
            <div class="media flex-column align-items-center">
              <span class="dt-avatar__outline size-80 border-geekblue mb-6"><i class="fas fa-user-check fa-2x"></i></span>
              <!-- Media Body <-->
              <div class="media-body">
                <h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">চেক  পোস্ট   সংখ্যা </h2>
                <span class="d-block text-geekblue">{{($total['checkpost'])? $total['checkpost']:0}} টি</span>
              </div>
              <!-- /media body -->
            </div>
          <!-- /media -->
          </div>
        <!-- /card body -->
      </div>
      <!-- /card -->
    </a>
  </div>  

</div>

@endsection