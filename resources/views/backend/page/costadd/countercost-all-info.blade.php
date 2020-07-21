@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">খরচ এর ইনফর্মেশন দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('countercostadd.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন খরচ   যোগ করুন </a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('countercostadd.index')}}" class="btn btn-info btn-lg">আজকে  খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ </th>
					<th>কাউন্টার নাম</th>
					<th>শিফট</th>
					<th>খরচ এর তালিকা</th>
					<th>টাকার পরিমাপ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($coutercostlists as $costlist)
				<tr>
					<td>{{ Carbon\Carbon::parse($costlist->created_at)->format('d-M-Y') }}</td>
					<td>{{$costlist->counter_name}}</td>
					<td>{{$costlist->shift}}</td>
					<td>{{$costlist->cost_name}}</td>
					<td>{{$costlist->taka}}&nbsp;টাকা </td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>{{$counttaka}}&nbsp;টাকা</td>
				</tr>
			</tbody>
		</table>
		{{$coutercostlists->links()}}
	</div>
</div>
@endsection