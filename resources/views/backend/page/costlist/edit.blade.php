@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">খরচ এর ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('costlist.index')}}" class="btn btn-info btn-lg">খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5 mb-5">
		<form action="{{route('costlist.update',$costname->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="cost_name">খরচ এর নাম পরিবর্তন করুন</label>
				<input type="text" class="form-control{{ $errors->has('cost_name') ? ' is-invalid' : '' }}" name="cost_name" id="cost_name" value="{{$costname->cost_name}}">
				@if ($errors->has('cost_name'))
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