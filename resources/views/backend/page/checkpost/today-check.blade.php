@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">চেক পোস্ট ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('checkpost-info')}}" class="btn btn-info btn-lg">চেক পোস্টের তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="" method="post">
			<div class="form-group">
				<label for="name">চেক পোস্টের নাম</label>
				<select name="name" id="name" class="form-control">
					<option value="">সিলেক্ট চেক পোস্ট</option>
					<option value="">চেক পোস্ট-1</option>
					<option value="">চেক পোস্ট-2</option>
					<option value="">চেক পোস্ট-3</option>
				</select>
			</div>
			<div class="form-group">
				<label for="car_number">গাডির নাম্বার </label>
				<input type="text" name="car_number" placeholder="গাডির নাম্বার" class="form-control" id="car_number">
			</div>
			<div class="form-group">
				<label for="checker_name">চেকারের নাম</label>
				<select name="checker_name" id="checker_name" class="form-control">
					<option value="">নাম সিলেক্ট করুন</option>
					<option value="">চেকার-1</option>
					<option value="">চেকার-2</option>
					<option value="">চেকার-3</option>
				</select>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-primary">
		</form>
	</div>
</div>
@endsection