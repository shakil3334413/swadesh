@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
	<h1 class="dt-page__title">কাউন্টারম্যানের কাছে পাঠানো মেসেজের তালিকা  দেখুন <span><a href="{{route('countermanmsg')}}" class="btn btn-info btn-lg float-right">কাউন্টারম্যানের কাছে মেসেজ পাঠান </a></span></h1>
</div>
<hr>
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
					<th>কাউন্টারম্যানের মোবাইল নাম্বার</th>
					<th>বার্তা বা মেসেজ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($countermanmsg as $item)
				<tr>
					<td>{{$item->phone}}</td>
					<td>{{$item->message}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$countermanmsg->links()}}
	</div>
</div>
@endsection

