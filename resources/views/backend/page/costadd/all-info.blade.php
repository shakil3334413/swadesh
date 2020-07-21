@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">খরচ এর ইনফর্মেশন দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('costadd.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন খরচ   যোগ করুন </a>
	</div>
	<div class="col-md-3  mb-5">
		<a href="{{route('costadd.index')}}" class="btn btn-info btn-lg">খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ </th>
					<th>গাড়ির নাম্বার</th>
					<th>খরচ এর নাম</th>
					<th>টাকার পরিমাপ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($costadd as $costadds)
				<tr>
					<td>{{ Carbon\Carbon::parse($costadds->created_at)->format('d-M-Y g:i:s A') }}</td>
					<td>{{$costadds->number}}</td>
					<td>{{$costadds->cost_name}}</td>
					<td>{{$costadds->taka}}&nbsp;টাকা </td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td>{{$counttaka}}&nbsp;টাকা</td>
				</tr>
			</tbody>
		</table>
		{{$costadd->links()}}
	</div>
</div>
@endsection
