@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">খরচ এর ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('costadd.index')}}" class="btn btn-info btn-lg">খরচ এর তালিকা দেখুন</a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('costadd-all-info')}}" class="btn btn-info btn-lg">সর্বমোট  খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5 mb-5">
		<form action="{{route('costadd.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="number">গাড়ির নাম্বার </label>
				<select name="number" id="number" class="form-control">
					@foreach($carnumber as $carnum)
						<option value="{{$carnum->number}}">{{$carnum->number}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="taka">খরচ এর তালিকা </label>
				<select name="cost_name" id="cost_name" class="form-control">
					@foreach($costlist as $costlists)
						<option value="{{$costlists->cost_name}}">{{$costlists->cost_name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="taka">টাকার পরিমাপ লেখুন</label>
				<input type="number" class="form-control{{ $errors->has('taka') ? ' is-invalid' : '' }}" name="taka" id="taka" placeholder="টাকার পরিমাপ লেখুন">
				@if ($errors->has('taka'))
                    <span class="invalid-feedback" role="alert">
                        <strong>খরচের নাম  অবশ্যই দিতে হবে </strong>
                    </span>
                @endif
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection