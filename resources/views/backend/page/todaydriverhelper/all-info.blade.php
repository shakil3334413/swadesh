@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সর্বমোট গাড়ির   ড্রাইভার এন্ড হেল্পা তালিকা  দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-6 mb-5">
		<a href="{{route('driverhelper.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>আজকের গাড়ির   ড্রাইভার এন্ড হেল্পা  ইনফরমেশন যোগ  করুণ </a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('driverhelper.create')}}" class="btn btn-info btn-lg">আজকের  গাড়ির   ড্রাইভার এন্ড হেল্পা তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>ড্রাইভার  নাম</th>
					<th>হেল্পার  নাম</th>
					<th>গাড়ীর নাম্বার</th>
				</tr>
			</thead>
			<tbody>
				@foreach($alldrihel as $drihel)
				<tr>
					<td>{{ Carbon\Carbon::parse($drihel->created_at)->format('d-M-Y') }}</td>
					<td>{{$drihel->driver_name}}</td>
					<td>{{$drihel->helper_name}}</td>
					<td>{{$drihel->bus_number}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$alldrihel->links()}}
	</div>
</div>
@endsection