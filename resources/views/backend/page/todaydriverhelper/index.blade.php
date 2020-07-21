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
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			@if(session()->has('success'))
				<div class="alert alert-success">
			        <li>{{session('success')}}</li>
			    </div>
			@endif
		<form action="" method="post">
			@csrf
			<div class="form-group">
				<label for="name">ড্রাইভার  নাম </label>
				<select name="driver_name" id="name" class="form-control {{ $errors->has('driver_name') ? ' is-invalid' : '' }}">
					@foreach($driver as $drivers)
					<option value="{{$drivers->name}}">{{$drivers->name}}</option>
					@endforeach
				</select>
				@if ($errors->has('driver_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>কাউন্টার  নাম অবশ্যই দিতে হবে </strong>
                    </span>
                @endif
			</div>
			<div class="form-group">
				<label for="helper_name">হেল্পার  নাম </label>
				<select name="helper_name" id="helper_name" class="form-control{{ $errors->has('helper_name') ? ' is-invalid' : '' }}">
					@foreach($helper as $helpers)
					<option value="{{$helpers->name}}">{{$helpers->name}}</option>
					@endforeach
				</select>
				@if ($errors->has('helper_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>কাউন্টার  নাম অবশ্যই দিতে হবে </strong>
                    </span>
                @endif
			</div>
			<div class="form-group">
				<label for="bus_number">গাড়ীর নাম্বার</label>
				<select name="bus_number" id="bus_number" class="form-control {{ $errors->has('bus_number') ? ' is-invalid' : '' }}">
					@foreach($carinfo as $carinfos)
					<option value="{{$carinfos->number}}">{{$carinfos->number}}</option>
					@endforeach
				</select>
				@if ($errors->has('bus_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>কাউন্টার  নাম অবশ্যই দিতে হবে </strong>
                    </span>
                @endif
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection