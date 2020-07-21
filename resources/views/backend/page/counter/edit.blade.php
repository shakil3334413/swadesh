@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">কাউন্টার  ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('counter.index')}}" class="btn btn-info btn-lg">কাউন্টার তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5 mb-5">
		<form action="{{route('counter.update',$counter->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="counter_name">নতুন কাউন্টারের নাম</label>
				<input type="text" class="form-control{{ $errors->has('counter_name') ? ' is-invalid' : '' }}" name="counter_name" id="counter_name" placeholder="কাউন্টার নাম" value="{{$counter->counter_name}}">
				@if ($errors->has('counter_name'))
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