@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকে কাউন্টারম্যানের বেতনের তালিকা দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('countermansalary.create')}}" class="btn btn-info btn-lg">কাউন্টারম্যানের বেতনের তালিকা যোগ করুন </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('countermansalary.index')}}" class="btn btn-info btn-lg"> আজকে কাউন্টারম্যানের বেতনের তালিকা দেখুন</a>
	</div>
</div>
<div class="row mt-5">
	<div class="col-md-5">
	@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ </th>
					<th>কাউন্টারম্যানের নাম</th>
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>টাকা</th>
				</tr>
			</thead>
			<tbody>
				@foreach($countermansalary as $any)
				<tr>
					<td>{{Carbon\Carbon::parse($any->created_at)->format('d-M-Y') }}</td>
					<td>{{$any->name}}</td>
					<td>{{$any->counter_name}}</td>
					<td>{{$any->shift}}</td>
					<td>{{$any->taka}}&nbsp;টাকা</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$counttaka}}&nbsp;টাকা</td>
				</tr>
				
			</tbody>
		</table>
		{{$countermansalary->links()}}
	</div>
</div>
@endsection
