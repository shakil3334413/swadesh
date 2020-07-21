@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">আজকের গাড়ির চেকের  ইনফরমেশন যোগ  করুণ </h1>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('todaycheck.create')}}" class="btn btn-info btn-lg">আজকের গাড়ির চেকের তালিকা দেখুন</a>
	</div>
	<div class="col-md-4 mb-5">
		<a href="{{route('all-info')}}" class="btn btn-info btn-lg">সর্বমোট  গাড়ির চেকের তালিকা দেখুন</a>
	</div>
</div>
<div class="row owner-form">
	<div class="col-md-4 mt-5 ml-5">
		<form action="{{route('todaycheck.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="name">চেকার  এর  নাম </label>
				<select name="checker_name" id="name" class="form-control">
					@foreach($checker as $checkers)
					<option value="{{$checkers->name}}">{{$checkers->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="checkpost_name">চেক পোষ্ট নাম</label>
				<select name="checkpost_name" id="checkpost_name" class="form-control ">
					@foreach($checkpost as $chpost)
					<option value="{{$chpost->name}}">{{$chpost->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="bus_number">গাড়ীর নাম্বার</label>
				<select name="bus_number" id="bus_number" class="form-control">
					@foreach($carinfo as $carnum)
					<option value="{{$carnum->number}}">{{$carnum->number}}</option>
					@endforeach
				</select>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection