@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">টিকেট  থেকে আয় যোগ করুণ </h1>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('ticketearn.index')}}" class="btn btn-info btn-lg">আজকে টিকেট  থেকে আয় তালিকা দেখুন</a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('all-ticket-list')}}" class="btn btn-info btn-lg">সর্বমোট  আজকে টিকেট  থেকে আয় তালিকা দেখুন</a>
	</div>
</div>

<div class="row mt-5">
	<div class="col-md-5">
		@include('backend.message.success')
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('ticketearn.store')}}" method="post" class="needs-validation" novalidate>
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
				<label for="ticket_number">টিকেট সংখ্যা </label>
				<input type="number" class="form-control{{ $errors->has('ticket_number') ? ' is-invalid' : '' }}" placeholder="টিকেট সংখ্যা " name="ticket_number" id="ticket_number" required>
				<span class="invalid-feedback" role="alert">
                    <strong>টিকেট সংখ্যা অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<div class="form-group">
				<label for="price">টিকেটের  মূল্য</label>
				<input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="টিকেটের  মূল্য" name="price" id="price" required>
				<span class="invalid-feedback" role="alert">
	                <strong>টিকেটের  মূল্য অবশ্যই দিতে হবে </strong>
	            </span>
        	</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection