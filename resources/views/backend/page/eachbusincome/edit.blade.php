@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">প্রতিটি গাডির আয়ের তালিকা পরিবর্তন করুন  </h1>
</div>
<div class="row">
	<div class="col-md-5  mb-5">
		<a href="{{route('eachbusincome.create')}}" class="btn btn-info btn-lg">প্রতিটি গাডির আয় তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('eachbusincome.update',$eachbusincome->id)}}" method="post" class="needs-validation" novalidate >
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="number">গাড়ীর  নাম্বার</label>
				<select name="number" id="number" class="form-control">
					@foreach($carnumber as $carnum)
					<option value="{{$carnum->number}}" {{ $carnum->number ==  $eachbusincome->number ? 'selected' : ''}}>{{$carnum->number}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="trip_number">ট্রিপ সংখ্যা </label>
				<input type="text" class="form-control" name="trip_number" id="trip_number" value="{{$eachbusincome->trip_number}}" required>
			</div>
			<div class="form-group">
				<label for="driver_salary">ড্রাইভারের বেতন  </label>
				<input type="text" class="form-control" name="driver_salary" id="driver_salary" value="{{$eachbusincome->driver_salary}}" placeholder="ড্রাইভারের বেতন " required>
			</div>
			<div class="form-group">
				<label for="bus_cost">গাড়ির খরচের টাকা </label>
				<input type="text" class="form-control" name="bus_cost" id="bus_cost" value="{{$eachbusincome->bus_cost}}" placeholder="গাড়ির খরচের টাকা " required>
			</div>
			<div class="form-group">
				<label for="gpcost">জিপি খরচ এর পরিমাপ লেখুন</label>
				<input type="number" class="form-control" name="gpcost" id="gpcost" placeholder="" value="{{$eachbusincome->gpcost}}">
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection