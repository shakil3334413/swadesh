@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সকল  মালিক এর  ইনফর্মেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('owner.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন  মালিক যোগ করুন </a>
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
					<th>নাম</th>
					<th>মোবাইল  নাম্বার</th>
					<th>ব্যাংক  নাম্বার(অপশনাল )</th>
					<th>ন্যাশনাল  আইডি  নাম্বার </th>
					<th>ঠিকানা</th>
					<th>আপনার ছবি দিন</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($owner as $owners)
				<tr>
					<td>{{$owners->name}}</td>
					<td>{{$owners->phone}}</td>
					<td>{{$owners->bank_number}}</td>
					<td>{{$owners->national_id}}</td>
					<td>{{$owners->address}}</td>
					<td><img src="{{asset('owners/'.$owners->image)}}" class="img-thumbnail" style="width: 100px;height: 100px;"></img></td>
					<td><a href="{{route('owner.edit',$owners->id)}}"><i class="far fa-edit"></i></a></td>
					<form action="{{route('owner.destroy',$owners->id)}}" method="post">	
					@csrf
					@method('DELETE')
					<td>
						<button type="submit" onclick="return deleted();" style="background: none;border: none">
							<i class="fas fa-trash" style="cursor: pointer;"></i>
						</button>
					</td>
					</form>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
	<div class="col-md-12">
		{{$owner->links()}}
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