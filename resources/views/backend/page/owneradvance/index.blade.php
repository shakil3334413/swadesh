@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">মালিকের অগ্রীম টাকার  ইনফর্মেশন তালিকা  দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('owneradvance.create')}}" class="btn btn-info btn-lg">মালিকের অগ্রীম টাকা যোগ করুন </a>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@include('backend.message.success')
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>মালিকের নাম</th>
					<th>মালিকের মোবাইল  নাম্বার</th>
					<th>কাউন্টারের নাম</th>
					<th>টাকা</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($owneradvace as $owneradvaces)
				<tr>
					<td>{{$owneradvaces->owner_name}}</td>
					<td>{{$owneradvaces->phone}}</td>
					<td>{{$owneradvaces->counter}}</td>
					<td>{{$owneradvaces->taka}}</td>
					<td><a href="{{route('owneradvance.edit',$owneradvaces->id)}}"><i class="far fa-edit"></i></a></td>
					<form action="{{route('owneradvance.destroy',$owneradvaces->id)}}" method="post">	
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
		{{$owneradvace->links()}}
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
