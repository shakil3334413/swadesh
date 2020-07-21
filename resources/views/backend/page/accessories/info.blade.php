@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সসর্বমোট   কাউন্টার  থেকে মালামাল টিকিট  বিক্রি তালিকা  দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('accessories.create')}}" class="btn btn-info btn-lg">আজকে  মালামাল টিকিট  বিক্রি যোগ করুণ  </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('accessories.index')}}" class="btn btn-info btn-lg">সসর্বমোট  আজকে মালামাল  থেকে আয় তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-6 mt-5">
		@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ </th>
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>মালামালের   মূল্য</th>
				</tr>
			</thead>
			<tbody>
				@foreach($accessories as $accessorie)
				<tr>
					<td>{{ Carbon\Carbon::parse($accessorie->created_at)->format('d-M-Y') }}</td>
					<td>{{$accessorie->counter_name}}</td>
					<td>{{$accessorie->shift}}</td>
					<td>{{$accessorie->ticket_price}}</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$counttaka}}&nbsp;টাকা</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	{{ $accessories->links() }}
</div>
@endsection
