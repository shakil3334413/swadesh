@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সর্বমোট জিপি খরচ এর ইনফর্মেশন দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('gpcost.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন জিপি খরচ   যোগ করুন </a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('gpcost.index')}}" class="btn btn-info btn-lg"> আজকের  জিপি খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ </th>
					<th>গাড়ির নাম্বার</th>
					<th>টাকার পরিমাপ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($gpcost as $gpcosts)
				<tr>
					<td>{{Carbon\Carbon::parse($gpcosts->created_at)->format('d-M-Y') }}</td>
					<td>{{$gpcosts->number}}</td>
					<td>{{$gpcosts->taka}}&nbsp;টাকা </td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td>{{$counttaka}}&nbsp;টাকা</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		{{$gpcost->links()}}
	</div>
</div>
@endsection
