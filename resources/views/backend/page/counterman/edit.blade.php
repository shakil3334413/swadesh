@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">কাউন্টার ম্যান    ইনফর্মেশন পূরণ  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('counterman.create')}}" class="btn btn-info btn-lg">কাউন্টার ম্যান   তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('counterman.update',$counterman->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="name">নাম </label>
				<input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{$counterman->name}}" required>
				
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার নাম অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<div class="form-group">
				<label for="mobile">মোবাইল  নাম্বার</label>
				<input type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="mobile" value="{{$counterman->phone}}" required>
				
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ফোন নাম্বার  অবশ্যই দিতে হবে </strong>
                    </span>

			</div>
			<div class="form-group">
				<label for="national-id">ন্যাশনাল  আইডি  নাম্বার  </label>
				<input type="number" class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" id="national-id" value="{{$counterman->national_id}}">
			</div>
			<div class="form-group">
				<label for="address">ঠিকানা</label>
				<textarea name="address" id="" cols="30" rows="10" class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}"  id="address" required>{{$counterman->address}}</textarea>
			
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ঠিকানা অবশ্যই দিতে হবে </strong>
                    </span>
    
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection