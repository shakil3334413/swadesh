@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">কাউন্টারম্যানের বেতন বাবদ খরচ পরিবর্তন  করুণ </h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('driversalary.index')}}" class="btn btn-info btn-lg">আজকে ড্রাইভারের বেতনের তালিকা দেখুন</a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('all-info')}}" class="btn btn-info btn-lg">সর্বমোট ড্রাইভারের বেতনের তালিকা দেখুন</a>
	</div>
</div>

<div class="row mt-5">
	<div class="col-md-5">
		@include('backend.message.success')
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('driversalary.update',$driversalary->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="driver_name">ড্রাইভারের নাম</label>
				<select name="name" id="driver_name" class="form-control">
					@foreach($driver as $drivers)
					<option value="{{$drivers->name}}" {{$drivers->name == $driversalary->name ? 'selected' : ''}}>{{$drivers->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="car_number">গাডির নাম্বার</label>
				<select name="number" id="car_number" class="form-control">
					@foreach($carinfo as $carinfos)
					<option value="{{$carinfos->number}}" {{$carinfos->number == $driversalary->number ? 'selected' : ''}}>{{$carinfos->number}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="taka">বেতন</label>
				<input type="number" class="form-control" placeholder="বেতন" name="taka" id="taka" required value="{{$driversalary->taka}}">
				<span class="invalid-feedback" role="alert">
	                <strong>বেতন অবশ্যই দিতে হবে </strong>
	            </span>
        	</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection