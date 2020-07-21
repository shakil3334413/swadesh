@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">মালামাল  থেকে আয় যোগ করুণ </h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('accessories.index')}}" class="btn btn-info btn-lg">আজকে মালামাল  থেকে আয় তালিকা দেখুন</a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('accessories-list')}}" class="btn btn-info btn-lg">সর্বমোট মালামাল  থেকে আয় তালিকা দেখুন</a>
	</div>
</div>
<div class="row mt-5">
	<div class="col-md-5">
		@include('backend.message.success')
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('accessories.store')}}" method="post" class="needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<label for="counter_name">কাউন্টার নাম</label>
				<select name="counter_name" id="counter_name" class="form-control">
					@foreach($counter as $counters)
					<option value="{{$counters->counter_name}}">{{$counters->counter_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="mobile">শিফট</label>
				<select name="shift" id="mobile" class="form-control">
					<option value="সকাল">সকাল</option>
					<option value="বিকাল">বিকাল</option>
				</select>
			</div>
			<div class="form-group">
				<label for="price">মালামালের মূল্য</label>
				<input type="number" class="form-control{{ $errors->has('ticket_price') ? ' is-invalid' : '' }}" placeholder="মালামালের   টিকেটের  মূল্য" name="ticket_price" id="price" required>
				<span class="invalid-feedback" role="alert">
	                <strong>মালামালের মূল্য অবশ্যই দিতে হবে </strong>
	            </span>
			</div>

			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection