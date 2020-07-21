@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">গাডির ট্রিপ লিস্টের তালিকা যুক্ত করুন</h1>
</div>
<div class="row">
	<div class="col-md-5  mb-5">
		<a href="{{route('cartrip.index')}}" class="btn btn-info btn-lg">আজকের গাড়ীর ট্রিপ লিস্টের তালিকা দেখুন</a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('cartripall')}}" class="btn btn-info btn-lg"><span class="mr-2"></span>সর্বমোট গাডির ট্রিপ লিস্টের তালিকা দেখুন 
 		</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('cartrip.store')}}" method="post" class="needs-validation" novalidate >
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
				<label for="trip_number">গাড়ির ট্রিপ নাম্বার</label>
				<input type="number" class="form-control {{ $errors->has('number') ? ' is-invalid' : '' }}" name="trip_number" id="trip_number" value="{{old('number')}}" required>
				 <span class="invalid-feedback" role="alert">
                    <strong>গাড়ির ট্রিপ নাম্বার অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection