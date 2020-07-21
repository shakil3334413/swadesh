@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">কাউন্টার খরচ যোগ করুন ।</h1>
</div>
<div class="row">
	<div class="col-md-6  mb-5">
		<a href="{{route('countercostlist.index')}}" class="btn btn-info btn-lg">কাউন্টার খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-4">
		<form action="{{route('countercostlist.update',$countercost->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('put')
			<div class="form-group">
				<label for="counter_cost">কাউন্টার  খরচ এর নাম  লেখুন</label>
				<input type="text" class="form-control{{ $errors->has('cost_name') ? ' is-invalid' : '' }}" name="counter_cost" id="counter_cost" value="{{$countercost->counter_cost}}" required>
                <span class="invalid-feedback" role="alert">
                    <strong>কাউন্টার খরচের নাম  অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection