@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">কাউন্টারম্যানের বেতন বাবদ খরচ যোগ করুণ </h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('countermansalary.index')}}" class="btn btn-info btn-lg">আজকে কাউন্টারম্যানের বেতনের তালিকা দেখুন</a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('all-info')}}" class="btn btn-info btn-lg">সর্বমোট কাউন্টারম্যানের বেতনের তালিকা দেখুন</a>
	</div>
</div>

<div class="row mt-5">
	<div class="col-md-5">
		@include('backend.message.success')
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('countermansalary.store')}}" method="post" class="needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<label for="cou_man_name">কাউন্টারম্যানের নাম</label>
				<select name="name" id="cou_man_name" class="form-control">
					@foreach($counterman as $couman)
					<option value="{{$couman->name}}">{{$couman->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="counter_name">কাউন্টার নাম</label>
				<select name="counter_name" id="counter_name" class="form-control">
					@foreach($counter as $counters)
					<option value="{{$counters->counter_name}}">{{$counters->counter_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="shift">শিফট </label>
				<select name="shift" id="shift" class="form-control">
					<option value="সকাল">সকাল</option>
					<option value="বিকাল">বিকাল</option>
				</select>
			</div>
			<div class="form-group">
				<label for="taka">বেতন</label>
				<input type="number" class="form-control" placeholder="বেতন" name="taka" id="taka" required>
				<span class="invalid-feedback" role="alert">
	                <strong>বেতন অবশ্যই দিতে হবে </strong>
	            </span>
        	</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection