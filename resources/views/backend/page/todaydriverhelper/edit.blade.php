@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">আজকের গাড়ির  ড্রাইভার এন্ড হেল্পার    ইনফরমেশন যোগ  করুণ </h1>
</div>
<div class="row">
	<div class="col-md-6 mb-5">
		<a href="{{route('driverhelper.create')}}" class="btn btn-info btn-lg">আজকের গাড়ির গাড়ি ড্রাইভার এন্ড হেল্পার   তালিকা দেখুন</a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('all-driverhelper')}}" class="btn btn-info btn-lg">সর্বমোট  গাড়ির গাড়ি ড্রাইভার এন্ড হেল্পার   তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('driverhelper.update',$driverhelper->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="name">ড্রাইভার  নাম </label>
				<select name="driver_name" id="name" class="form-control">}
					@foreach($driver as $drivers)
						 <option value="{{$drivers->name}}" {{ $drivers->name == $driverhelper->driver_name ? 'selected' : '' }}>{{$drivers->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="helper_name">হেল্পার  নাম </label>
				<select name="helper_name" id="helper_name" class="form-control">
					@foreach($helper as $helpers)
					 <option value="{{$helpers->name}}" {{ $helpers->name == $driverhelper->helper_name ? 'selected' : '' }}>{{$helpers->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="bus_number">গাড়ীর নাম্বার</label>
				<select name="bus_number" id="bus_number" class="form-control">
					@foreach($carinfo as $carinfos)
					
					<option value="{{$carinfos->number}}" {{ $carinfos->number == $driverhelper->bus_number? 'selected' : '' }}>{{$carinfos->number}}</option>
					@endforeach
				</select>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection