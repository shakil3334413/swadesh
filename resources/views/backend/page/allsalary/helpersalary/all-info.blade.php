@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সর্বমোট হেল্পারের বেতনের তালিকা দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('helpersalary.create')}}" class="btn btn-info btn-lg">হেল্পারের বেতনের তালিকা যোগ করুন </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('helpersalary.index')}}" class="btn btn-info btn-lg"> আজকে হেল্পারের বেতনের তালিকা দেখুন</a>
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
					<th>হেল্পারের নাম</th>
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>টাকা</th>
				</tr>
			</thead>
			<tbody>
				@foreach($helpersalary as $helpsalary)
				<tr>
					<td>{{Carbon\Carbon::parse($helpsalary->created_at)->format('d-M-Y') }}</td>
					<td>{{$helpsalary->name}}</td>
					<td>{{$helpsalary->counter_name}}</td>
					<td>{{$helpsalary->shift}}</td>
					<td>{{$helpsalary->taka}}&nbsp;টাকা</td>
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
		{{$helpersalary->links()}}
	</div>
</div>
@endsection
