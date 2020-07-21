@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">আপনার ইনফরমেশন পরিবর্তন করুন </h1>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('ownerbus.index')}}" class="btn btn-info btn-lg">মালিকের গাড়ীর তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('ownerbus.update',$ownerbus->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="name">মালিকের  নাম </label>
				<select name="owner_name" id="name" class="form-control">
					@foreach($owners as $owner)
						<option value="{{$owner->id}}" {{$owner->name == $ownerbus->owner->name? 'selected' : '' }} >{{$owner->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="bus_number">গাড়ীর নাম্বার</label>
				<select name="bus_number" id="bus_number" class="form-control">
					
					@foreach($buses as $bus)
						<option value="{{$bus->number}}" {{$bus->number == $ownerbus->bus_number? 'selected' : '' }} >{{$bus->number}}</option>
					@endforeach
				</select>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>

@endsection