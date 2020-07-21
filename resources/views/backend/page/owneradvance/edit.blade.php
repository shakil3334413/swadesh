@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">মালিকের অগ্রীম টাকার   ইনফর্মেশন পরিবর্তন   করুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('owneradvance.index')}}" class="btn btn-info btn-lg">মালিকের অগ্রীম টাকার  তালিকা দেখুন</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('owneradvance.update',$owneradvace->id)}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate >
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="owner_name">মালিকের নাম </label>
				<select name="owner_name" id="owner_name" class="form-control">
					@foreach($owner as $owners)
						<option value="{{$owners->name}}"{{$owners->name==$owneradvace->owner_name?'selected':''}}>{{$owners->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="phone">মালিকের মোবাইল নাম্বার </label>
				<select name="phone" id="phone" class="form-control">
					@foreach($owner as $owners)
						<option value="{{$owners->phone}}"{{$owners->phone==$owneradvace->phone?'selected':''}}>{{$owners->phone}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
					<label for="phone">কাউন্টারের নাম </label>
					<select name="counter" id="phone" class="form-control">
						@foreach($counter as $counters)
							<option value="{{$counters->counter_name}}" {{$counters->counter_name==$owneradvace->counter?'selected':''}}>{{$counters->counter_name}}</option>
						@endforeach
					</select>
			</div>
			<div class="form-group">
				<label for="taka">টাকার পরিমাপ</label>
				<input type="text" class="form-control{{ $errors->has('taka') ? ' is-invalid' : '' }}" name="taka" id="taka" value="{{$owneradvace->taka}}" required>
				<span class="invalid-feedback" role="alert">
                    <strong>টাকার পরিমাপ অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection
