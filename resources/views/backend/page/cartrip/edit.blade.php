@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">গাডির ট্রিপ লিস্টের তালিকা পরিবর্তন  করুন</h1>
</div>
<div class="row">
	<div class="col-md-5  mb-5">
		<a href="{{route('cartrip.index')}}" class="btn btn-info btn-lg">গাড়ীর ট্রিপ লিস্টের তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('cartrip.update',$cartrip->id)}}" method="post" class="needs-validation" novalidate >
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="number">গাড়ির নাম্বার </label>
				<select name="number" id="number" class="form-control">
					@foreach($carnumber as $carnum)
						<option value="{{$carnum->number}}" {{$carnum->number == $cartrip->number ? 'selected' : ''}}>{{$carnum->number}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="trip_number">গাড়ির ট্রিপ নাম্বার</label>
				<input type="number" class="form-control"  name="trip_number" id="trip_number"  required value="{{$cartrip->trip_number}}">
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection