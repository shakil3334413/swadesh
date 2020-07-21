@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">আপনার ইনফর্মেশন পরিবর্তন  করুন</h1>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('helper.create')}}" class="btn btn-info btn-lg">হেল্পার  তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('helper.update',$helper->id)}}" method="POST" class="needs-validation" novalidate>
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="name">নাম </label>
				<input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{$helper->name}}" required>
                <span class="invalid-feedback" role="alert">
                    <strong>আপনার নাম অবশ্যই দিতে হবে </strong>
                </span>

			</div>
			<div class="form-group">
				<label for="mobile">মোবাইল  নাম্বার</label>
				<input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="mobile" value="{{$helper->phone}}" required>
				
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ফোন নাম্বার  অবশ্যই দিতে হবে </strong>
                    </span>

			</div>
			<div class="form-group">
				<label for="national-id">ন্যাশনাল  আইডি  নাম্বার  </label>
				<input type="text" class="form-control {{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" id="national-id" value="{{$helper->national_id}}">
			</div>
			<div class="form-group">
				<label for="address">ঠিকানা</label>
				<textarea name="address" id="" cols="10" rows="7" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  id="address" value="" required>{{$helper->address}}</textarea>
			</div>
			
                    <span class="invalid-feedback" role="alert">
                        <strong>আপনার ঠিকানা অবশ্যই দিতে হবে </strong>
                    </span>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection