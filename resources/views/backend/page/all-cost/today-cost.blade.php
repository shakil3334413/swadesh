@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকের  মোট খরচের তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>আজকের ড্রাইভার খরচ</th>
					<th>আজকের কাউন্টার ম্যান খরচ</th>
					<th>আজকের হেল্পার খরচ </th>
					<th>আজকের চেকার খরচ</th>
					<th>আজকের  কাউন্টার  খরচ </th>
					<th>আজকের গাড়ির খরচ</th>
					<th>আজকের  সর্বমোট খরচ</th>
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
		<a href="{{route('today-all')}}" class="btn btn-info">আজকের ড্রাইভার খরচের তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('today-all')}}" class="btn btn-info">আজকের কাউন্টার ম্যান তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('today-all')}}" class="btn btn-info">আজকের হেল্পার খরচের তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('today-all')}}" class="btn btn-info">আজকের চেকার খরচের তালিকা দেখুন </a>
	</div>
		<div class="col-md-3  m-4">
		<a href="{{route('today-all')}}" class="btn btn-info">আজকের কাউন্টার খরচের তালিকা দেখুন </a>
	</div>

		<div class="col-md-3  m-4">
		<a href="{{route('today-all')}}" class="btn btn-info">আজকের গাড়ির খরচের তালিকা দেখুন </a>
	</div>
</div>
@endsection