@extends('backend.layouts.master')
@section('backend-content')
@push('css')
@endpush
<div class="dt-page__header">
    <h1 class="dt-page__title">মালিক  ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('owner.create')}}" class="btn btn-info btn-lg">মালিকের তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('owner.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<label for="name">নাম </label>
				<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="নাম" value="{{ old('name') }}" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার নাম অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<div class="form-group">
				<label for="phone">মোবাইল  নাম্বার</label>
				<input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="phone" placeholder="মোবাইল  নাম্বার " value="{{ old('phone') }}" required>
				
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার মোবাইল  নাম্বার অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<div class="form-group">
				<label for="bank-number">ব্যাংক  নাম্বার(অপশনাল )</label>
				<input type="text" class="form-control" name="bank_number" id="bank-numbe" placeholder="ব্যাংক  নাম্বার(অপশনাল )" value="{{ old('bank_number') }}">
			</div>
			<div class="form-group">
				<label for="national-id">ন্যাশনাল  আইডি  নাম্বার  </label>
				<input type="text" class="form-control" name="national_id" id="national-id" placeholder="ন্যাশনাল  আইডি  নাম্বার " value="{{ old('national_id') }}">
			</div>
			<div class="form-group">
				<label for="address">ঠিকানা</label>
				<textarea name="address" id="" cols="20" rows="7" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  id="address" placeholder="ঠিকানা" required>{{ old('address') }}</textarea>
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ঠিকানা  অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<div class="form-group">
				<label for="image">ছবি আপলোড করুন</label>
				<input type="file" name="image" id="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{ old('image') }}">
				@if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ছবি  অবশ্যই দিতে হবে </strong>
                    </span>
                @endif
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection
