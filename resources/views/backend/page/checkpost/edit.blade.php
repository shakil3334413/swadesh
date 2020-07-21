@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">আপনার  ইনফর্মেশন পরিবর্তন   করুন</h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('checkpost.index')}}" class="btn btn-info btn-lg">চেক পোস্টের তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('checkpost.update',$checkpost->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="name">চেক পোস্টের নাম</label>
				<input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="চেক পোস্টের নাম" value="{{$checkpost->name}}" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>চেক পোস্টের নাম অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection