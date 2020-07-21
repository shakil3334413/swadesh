@extends('backend.layouts.master')
@section('backend-content')
<div class="container-fluid">
	<p class="h1">এই বছরের  কাউন্টার থেকে আয়  এবং খরচ দেখুন</p><hr>
</div>
<div class="row">
	<div class="col-md-3">
	    <!-- Card -->
	    <div class="dt-card dt-card__full-height bg-warning">
	        <!-- Card Body -->
	        <div class="dt-card__body text-center  py-6 px-4">
	          <!-- Media -->
	          <div class="media flex-column align-items-center">
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$mesodayearn}}&nbsp; টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$mesodaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$mesoprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h6 class="card-title text-geekblue">কাউন্টারঃ মেঘনা </h6>
				<p class="j6 text-geekblue">শিফটঃ সকাল</p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$mebidayearn}}&nbsp; টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$mebidaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$mebiprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	             <h6 class="card-title text-geekblue">কাউন্টারঃ মেঘনা </h6>
				<p class="j6 text-geekblue">শিফটঃ বিকাল</p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$sosodayearn}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$sosodaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$sosoprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h5 class="card-title text-geekblue">কাউন্টারঃ সোনারগাঁ </h5>
				<p class="h4 text-geekblue">শিফটঃ সকাল  </p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$sobidayearn}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$sobidaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$sobiprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h5 class="card-title text-geekblue">কাউন্টারঃ সোনারগাঁ </h5>
				<p class="h4 text-geekblue">শিফটঃ বিকাল </p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$mosodayearn}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$mosodaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$mosoprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h5 class="card-title text-geekblue">কাউন্টারঃ মদনপুর </h5>
				<p class="h4 text-geekblue">শিফটঃ সকাল  </p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$mobidayearn}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$mobidaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$mobiprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h5 class="card-title text-geekblue">কাউন্টারঃমদনপুর </h5>
				<p class="h4 text-geekblue">শিফটঃ বিকাল </p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$stbidayearn}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$stbidaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$stbiprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h5 class="card-title text-geekblue">কাউন্টারঃ স্টেডিয়াম </h5>
				<p class="h4 text-geekblue">শিফটঃ সকাল </p>
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
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">আয়ঃ {{$stbidayearn}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">খরচঃ {{$stbidaycost}}&nbsp;টাকা</h2>
	          	<h2 class="display-3 font-weight-semibold mb-2 init-counter text-geekblue">লাভঃ    {{$stbiprofit}}&nbsp;টাকা</h2>
	          	<hr>
	            <!-- Media Body <-->
	            <div class="media-body">
	              <h5 class="card-title text-geekblue">কাউন্টারঃ স্টেডিয়াম </h5>
				<p class="h4 text-geekblue">শিফটঃ বিকাল </p>
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