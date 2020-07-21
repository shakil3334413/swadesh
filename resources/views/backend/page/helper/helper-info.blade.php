@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সকল  হেল্পার এর  ইনফর্মেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('helper.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন  হেল্পার   যোগ করুন </a>
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
					<th>ন্যাশনাল  আইডি  নাম্বার </th>
					<th>ঠিকানা</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($helpers as $helper)
				<tr>
					<td>{{$helper->name}}</td>
					<td>{{$helper->phone}}</td>
					<td>{{$helper->national_id}}</td>
					<td>{{$helper->address}}</td>
					<td><a href="{{route('helper.edit',$helper->id)}}"><i class="far fa-edit"></i></a></td>
					<form action="{{route('helper.destroy',$helper->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<td><button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash" style="cursor: pointer;"></i></button></td>
					</form>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$helpers->links()}}
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