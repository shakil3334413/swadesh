@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title text-center">এই মাসের প্রতিটি গাডির আয়ের তালিকা দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-6">
		@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>গাডির নাম্বার </th>
					<th>ট্রিপ নাম্বার </th>
					<th>ড্রাইভারের বেতন </th>
					<th>গাড়ির খরচ</th>
					<th>জিপি খরচ</th>
					<th>প্রতিটি ট্রিপের আয়</th>
					<th>মোট টাকা</th>
					<th>মোট খরচ </th>
					<th>গাডির টোটাল আয়</th>
				</tr>
			</thead>
			<tbody>
				@foreach($eachbusincome as $eachcou)
			 	<tr>
				 	<td>{{Carbon\Carbon::parse($eachcou->created_at)->format('d-M-Y') }}</td>
				 	<td>{{$eachcou->number}}</td>
					<td>{{$eachcou->trip_number}}</td>
					<td>{{$eachcou->driver_salary}}</td>
					<td>{{$eachcou->bus_cost}}</td>
					<td>{{$eachcou->gpcost}}</td>
					<td>{{$eachcou->each_income}}</td>
					<td>{{$eachcou->total_income}}</td>
					<td>{{$eachcou->total_cost}}</td>
					<td>{{$eachcou->todaycarincome}}</td>
			 	</tr>
			 	@endforeach
			</tbody>
		</table>
		{{$eachbusincome->links()}}
	</div>
</div>
@endsection
<script>
	function deleted(){
		$del=confirm("আপনি কি আপনার ইনফরমেশন মুচে পেলবেন?");
		if($del != true){
			return false;
		}
	}
</script>
