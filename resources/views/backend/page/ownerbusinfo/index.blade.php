@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">মালিকের গাড়ীর  ইনফরমেশন যোগ  করুণ </h1>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('ownerbus.index')}}" class="btn btn-info btn-lg">মালিকের গাড়ীর তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('ownerbus.store')}}" method="post" class="form needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<label for="name">মালিকের  নাম </label>
				<select name="owner_name" id="name" class="form-control {{ $errors->has('owner_name') ? ' is-invalid' : '' }}">
					@foreach($owners as $owner)
						<option value="{{$owner->id}}">{{$owner->name}}</option>
					@endforeach
				</select>
				@if ($errors->has('owner_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>মালিকের নাম  অবশ্যই দিতে হবে </strong>
                    </span>
                @endif
			</div>
			<div class="form-group">
				<label for="bus_number">গাড়ীর নাম্বার</label>
				<select name="bus_number" id="bus_number" class="form-control {{ $errors->has('bus_number') ? ' is-invalid' : '' }}">
					@foreach($buses as $bus)
						<option value="{{$bus->number}}">{{$bus->number}}</option>
					@endforeach
					@if ($errors->has('owner_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>বাস নাম্বার  অবশ্যই দিতে হবে </strong>
                    </span>
                	@endif
				</select>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection