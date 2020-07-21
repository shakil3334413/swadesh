@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">খরচ এর ইনফর্মেশন দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('costlist.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন খরচ এর নাম  যোগ করুন </a>
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
					<th>গাডির খরচ এর নাম</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($costnames as $costname)
				<tr>
					<td>{{$costname->cost_name}}</td>
					<td><a href="{{route('costlist.edit',$costname->id)}}"><i class="far fa-edit"></a></i></td>
					<td>
						<form action="{{route('costlist.destroy',$costname->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash" style="cursor: pointer;"></i></button>
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
	function deleted()
	{
		 msg=confirm('আপনার ইনফরমেশন মুছে ফেলতে চান !');
		if (msg != true) 
		{
			return false;
		}
	}
</script>