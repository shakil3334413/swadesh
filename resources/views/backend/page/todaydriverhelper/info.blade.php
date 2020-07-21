@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকের গাড়ির ড্রাইভার এন্ড হেল্পার  তালিকা  দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-6 mb-5">
		<a href="{{route('driverhelper.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>আজকের  গাড়ির  ড্রাইভার এন্ড হেল্পার   ইনফরমেশন যোগ  করুণ </a>
	</div>
	<div class="col-md-6 mb-5">
		<a href="{{route('all-driverhelper')}}" class="btn btn-info btn-lg">সর্বমোট  গাড়ির  ড্রাইভার এন্ড হেল্পার    তালিকা দেখুন</a>
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
					<th>ড্রাইভার  নাম</th>
					<th>হেল্পার  নাম</th>
					<th>গাড়ীর নাম্বার</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($driverhelper as $drihel)
				<tr>
					<td>{{ Carbon\Carbon::parse($drihel->created_at)->format('d-M-Y') }}</td>
					<td>{{$drihel->driver_name}}</td>
					<td>{{$drihel->helper_name}}</td>
					<td>{{$drihel->bus_number}}</td>
					<td><a href="{{route('driverhelper.edit',$drihel->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
							<form action="{{route('driverhelper.destroy',$drihel->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" style="border: none; background: none;" onclick="return deleteconfirm();"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
<script>
function deleteconfirm(){
deletated=confirm("আপনার ইনপরমেশনটি মুছে ফেলতে চান ??");
	if(deletated != true)
		{
			return false;
		}
	}
</script>