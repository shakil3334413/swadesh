@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">ড্রাইভার  ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('driver.create')}}" class="btn btn-info btn-lg">ড্রাইভার  তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('driver.store')}}" method="POST" class="needs-validation" novalidate>
         	@csrf
			<div class="form-group">
				<label for="name">নাম </label>
				<input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="নাম" value="{{old('name')}}" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার নাম অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<div class="form-group">
				<label for="mobile">মোবাইল  নাম্বার</label>
				<input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="mobile" placeholder="মোবাইল  নাম্বার " value="{{old('phone')}}" required>
				
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ফোন নাম্বার  অবশ্যই দিতে হবে </strong>
                    </span>
     
			</div>
			<div class="form-group">
				<label for="driving-liceing">ড্রাইভিং লাইচেন্সেন </label>
				<input type="text" class="form-control {{ $errors->has('driving_liceing') ? ' is-invalid' : '' }}" name="driving_liceing" id="driving-liceing" placeholder="ব্যাংক  নাম্বার(অপশনাল )" value="{{old('driving_liceing')}}" required>
				
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ড্রাইভিং লাইচেন্সেন অবশ্যই দিতে হবে </strong>
                    </span>

			</div>
			<div class="form-group">
				<label for="national-id">ন্যাশনাল  আইডি  নাম্বার  </label>
				<input type="text" class="form-control {{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" id="national-id" placeholder="ন্যাশনাল  আইডি  নাম্বার " value="{{old('national_id')}}">
			</div>
			<div class="form-group">
				<label for="address">ঠিকানা</label>
				<textarea name="address" id="" cols="30" rows="7" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  id="address" placeholder="ঠিকানা" required>{{old('address')}}</textarea>
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ঠিকানা অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection