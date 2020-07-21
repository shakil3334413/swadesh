@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">গাড়ী ইনফর্মেশন পরিবর্তন    করুন</h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('bus.create')}}" class="btn btn-info btn-lg">গাড়ীর তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('bus.update',$bus->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="model">গাড়ীর মডেল (অপশনাল ) </label>
				<input type="text" class="form-control" name="model" id="model" value="{{$bus->model}}">
			</div>
			<div class="form-group">
				<label for="number">গাড়ীর  নাম্বার</label>
				<input type="text" class="form-control {{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" id="number"value="{{$bus->number}}" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>গাড়ির নাম্বার  অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection