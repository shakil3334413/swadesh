@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সকল  ড্রাইভার এর  ইনফর্মেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('driver.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন  ড্রাইভার  যোগ করুন </a>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@include('backend.message.success')
	</div>
</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped text-center">
		<thead class="thead-dark">
			<tr>
				<th>নাম</th>
				<th>মোবাইল  নাম্বার</th>
				<th>ড্রাইভিং লাইচেন্সেন </th>
				<th>ন্যাশনাল  আইডি  নাম্বার </th>
				<th>ঠিকানা</th>
				<th>এডিট</th>
				<th>ডিলিট</th>
			</tr>
		</thead>
		<tbody>
			@foreach($drivers as $driver)
			<tr>
				<td>{{$driver->name}}</td>
				<td>{{$driver->phone}}</td>
				<td>{{$driver->driving_liceing}}</td>
				<td>{{$driver->national_id}}</td>
				<td>{{$driver->address}}</td>
				
				<td><a href="{{route('driver.edit',$driver->id)}}"><i class="far fa-edit"></i></a></td>
				<form action="{{route('driver.destroy',$driver->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<td><button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash"></i></button></td>
				</form>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
@endsection
<script>
	function deleted()
	{
		var msg=confirm('আপনি কি ইনফরমেশনটি মুচে পেলতে চান?');
		if (msg!=true) 
		{
			return false;
		}
	}
</script>