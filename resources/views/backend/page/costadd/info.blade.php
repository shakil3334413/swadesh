@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">খরচ এর ইনফর্মেশন দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('costadd.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন খরচ   যোগ করুন </a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('costadd-all-info')}}" class="btn btn-info btn-lg">সর্বমোট  খরচ এর তালিকা দেখুন</a>
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
					<th>তারিখ </th>
					<th>গাড়ির নাম্বার</th>
					<th>খরচ এর নাম</th>
					<th>টাকার পরিমাপ</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($costadd as $costadds)
				<tr>
					<td>{{ Carbon\Carbon::parse($costadds->created_at)->format('d-M-Y') }}</td>
					<td>{{$costadds->number}}</td>
					<td>{{$costadds->cost_name}}</td>
					<td>{{$costadds->taka}}&nbsp;টাকা </td>
					<td><a href="{{route('costadd.edit',$costadds->id)}}"><i class="far fa-edit"></a></i></td>
					<td>
						<form action="{{route('costadd.destroy',$costadds->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash" style="cursor: pointer;"></i></button>
						</form>
						
					</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>{{$counttaka}}&nbsp;টাকা</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		{{$costadd->links()}}
	</div>
</div>
@endsection
<script>
	function deleted()
	{
		 msg=confirm('are you sure deleted this!');
		if (msg != true) 
		{
			return false;
		}
	}
</script>