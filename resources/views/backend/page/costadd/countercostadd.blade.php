@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">কাউন্টার  খরচ এর ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-5  mb-5">
		<a href="{{route('countercostadd.index')}}" class="btn btn-info btn-lg">কাউন্টার  খরচ এর তালিকা দেখুন</a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('countercostadd-all')}}" class="btn btn-info btn-lg">সর্বমোট কাউন্টার  খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5 mb-5">
		<form action="{{route('countercostadd.store')}}" method="post" class="needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<label for="counter_name">কাউন্টার নাম</label>
				<select name="counter_name" id="number" class="form-control">
					@foreach($counter as $countername)
						<option value="{{$countername->counter_name}}">{{$countername->counter_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">শিফট </label>
				<select name="shift" id="shift" class="form-control">
					<option value="সকাল">সকাল</option>
					<option value="বিকাল">বিকাল</option>
				</select>
			</div>
			<div class="form-group">
				<label for="cost_name">খরচ এর তালিকা </label>
				<select name="cost_name" id="cost_name" class="form-control">
					@foreach($coutercostlistss as $coutercostlist)
						<option value="{{$coutercostlist->counter_cost}}">{{$coutercostlist->counter_cost}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="taka">টাকার পরিমাপ লেখুন</label>
				<input type="number" class="form-control{{ $errors->has('taka') ? ' is-invalid' : '' }}" name="taka" id="taka" placeholder="টাকার পরিমাপ লেখুন" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>টাকার পরিমাপ  অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection