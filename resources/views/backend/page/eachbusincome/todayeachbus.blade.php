@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকের প্রতিটি গাডির আয়ের  তালিকা দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5  mb-5">
		<a href="{{route('eachbusincome.index')}}" class="btn btn-info btn-lg">আজকের প্রতিটি গাডির আইয়ের তালিকা যুক্ত করুন  </a>
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
					<th>তারিখ</th>
					<th>গাডির নাম্বার </th>
					<th>ট্রিপ নাম্বার </th>
					<th>ড্রাইভারের বেতন </th>
					<th>গাড়ির খরচ</th>
					<th>জিপি খরচ</th>
					<th>প্রতিটি ট্রিপের আয়</th>
					<th>মোট  টাকা</th>
					<th>মোট খরচ </th>
					<th>গাডির মোট  আয়</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
			 @foreach($eachbusincome as $eachbus)
				<tr>
					<td>{{Carbon\Carbon::parse($eachbus->created_at)->format('d-M-Y') }}</td>
					<td>{{$eachbus->number}}</td>
					<td>{{$eachbus->trip_number}}</td>
					<td>{{$eachbus->driver_salary}}</td>
					<td>{{$eachbus->bus_cost}}</td>
					<td>{{$eachbus->gpcost}}</td>
					<td>{{$eachbus->each_income}}</td>
					<td>{{$eachbus->total_income}}</td>
					<td>{{$eachbus->total_cost}}</td>
					<td>{{$eachbus->todaycarincome}}</td>
					<td><a href="{{route('eachbusincome.edit',$eachbus->id)}}"><i class="far fa-edit"></i></a></td>
					<form action="{{route('eachbusincome.destroy',$eachbus->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<td><button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash" style="cursor: pointer;"></i></button></td>
					</form>
				</tr>
			@endforeach
			</tbody>
		</table>
		{{$eachbusincome->links()}}
	</div>
</div>
@endsection
<script>
	function deleted(){
		$del=confirm("আপনি কি আপনার ইনফরমেশন মুচে পেলবেন?");
		if($del != true){
			return false;
		}
	}
</script>
