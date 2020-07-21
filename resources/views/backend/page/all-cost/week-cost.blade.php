@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  মোট খরচের তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>এই সাপ্তাহের ড্রাইভার খরচ</th>
					<th>এই সাপ্তাহের কাউন্টার ম্যান খরচ</th>
					<th>এই সাপ্তাহের হেল্পার খরচ </th>
					<th>এই সাপ্তাহের চেকার খরচ</th>
					<th>এই সাপ্তাহের  কাউন্টার  খরচ </th>
					<th>এই সাপ্তাহের গাড়ির খরচ</th>
					<th>এই সাপ্তাহের   সর্বমোট খরচ</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td>{{$driversalary}}&nbsp;টাকা </td>
						<td>{{$countermansalary}}&nbsp;টাকা </td>
						<td>{{$helpersalary}}&nbsp;টাকা </td>
						<td>{{$linemansalary}}&nbsp;টাকা </td>
						<td>{{$counterCostAdd}}&nbsp;টাকা </td>
						<td>{{$carcostadd}}&nbsp;টাকা </td>
						<td>{{$total}}&nbsp;টাকা </td>
					</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-3 m-4">
		<a href="{{route('week-all')}}" class="btn btn-info">এই সাপ্তাহের ড্রাইভার খরচের তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('week-all')}}" class="btn btn-info">এই সাপ্তাহের কাউন্টার ম্যান তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('week-all')}}" class="btn btn-info">এই সাপ্তাহের হেল্পার খরচের তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('week-all')}}" class="btn btn-info">এই সাপ্তাহের চেকার খরচের তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('week-all')}}" class="btn btn-info">এই সাপ্তাহের কাউন্টার খরচের তালিকা দেখুন </a>
	</div>

		<div class="col-md-3  m-4">
		<a href="{{route('week-all')}}" class="btn btn-info">এই সাপ্তাহের গাড়ির খরচের তালিকা দেখুন </a>
	</div>
</div>
@endsection