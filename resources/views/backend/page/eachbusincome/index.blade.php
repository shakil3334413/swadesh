@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">প্রতিটি গাডির আয়ের তালিকা যোগ করুন </h1>
</div>
<div class="row">
	<div class="col-md-5  mb-5">
		<a href="{{route('eachbusincome.create')}}" class="btn btn-info btn-lg">প্রতিটি গাডির আয়ের তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('eachbusincome.store')}}" method="post" class="needs-validation" novalidate >
			@csrf
			<div class="form-group">
				<label for="number">গাড়ীর  নাম্বার</label>
				<select name="number" id="number" class="form-control">
					@foreach($carnumber as $carnum)
					<option value="{{$carnum->number}}">{{$carnum->number}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="trip_number">ট্রিপ সংখ্যা </label>
				<input type="text" class="form-control {{ $errors->has('trip_number') ? ' is-invalid' : '' }}" name="trip_number" id="trip_number" value="{{old('trip_number')}}" placeholder="ট্রিপ সংখ্যা " required>
				 <span class="invalid-feedback" role="alert">
                    <strong>ট্রিপ সংখ্যা  অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<div class="form-group">
				<label for="driver_salary">ড্রাইভারের বেতন  </label>
				<input type="text" class="form-control {{ $errors->has('driver_salary') ? ' is-invalid' : '' }}" name="driver_salary" id="driver_salary" value="{{old('driver_salary')}}" placeholder="ড্রাইভারের বেতন " required>
				 <span class="invalid-feedback" role="alert">
                    <strong>ড্রাইভারের বেতন  অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<div class="form-group">
				<label for="bus_cost">গাড়ির খরচের টাকা </label>
				<input type="text" class="form-control {{ $errors->has('bus_cost') ? ' is-invalid' : '' }}" name="bus_cost" id="bus_cost" value="{{old('bus_cost')}}" placeholder="গাড়ির খরচের টাকা " required>
				 <span class="invalid-feedback" role="alert">
                    <strong>গাড়ির খরচের টাকা অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<div class="form-group">
				<label for="gpcost">জিপি খরচ এর পরিমাপ লেখুন</label>
				<input type="number" class="form-control" name="gpcost" id="gpcost" placeholder="টাকার পরিমাপ লেখুন">
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection