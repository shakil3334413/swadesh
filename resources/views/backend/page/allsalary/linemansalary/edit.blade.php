@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">চেকারের বেতন বাবদ খরচ যোগ করুণ </h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('linemansalary.index')}}" class="btn btn-info btn-lg">আজকে চেকারের বেতনের তালিকা দেখুন</a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('all-info')}}" class="btn btn-info btn-lg">সর্বমোট চেকারের বেতনের তালিকা দেখুন</a>
	</div>
</div>

<div class="row mt-5">
	<div class="col-md-5">
		@include('backend.message.success')
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('linemansalary.update',$linemansalary->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="cou_man_name">চেকারের নাম</label>
				<select name="name" id="cou_man_name" class="form-control">
					@foreach($checker as $chkr)
					<option value="{{$chkr->name}}" {{ $chkr->name == $linemansalary->name ? 'selected' : '' }} >{{$chkr->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="counter_name">কাউন্টার নাম</label>
				<select name="counter_name" id="counter_name" class="form-control">
					@foreach($counter as $counters)
					<option value="{{$counters->counter_name}}" {{ $counters->counter_name == $linemansalary->counter_name ? 'selected' : '' }} >{{$counters->counter_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="shift">শিফট </label>
				<select name="shift" id="shift" class="form-control">
					<option value="সকাল">সকাল</option>
					<option value="বিকাল">বিকাল</option>
				</select>
				<div class="mt-3">
					<span  style="color: green;">সিলেক্ট  করা আছে :&nbsp;{{$linemansalary->shift}}</span>
				</div>
			</div>
			<div class="form-group">
				<label for="taka">বেতন</label>
				<input type="number" class="form-control" placeholder="বেতন" name="taka" id="taka" required value="{{$linemansalary->taka}}">
				<span class="invalid-feedback" role="alert">
	                <strong>বেতন অবশ্যই দিতে হবে </strong>
	            </span>
        	</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection