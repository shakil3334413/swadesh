@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকে হেল্পারের  বেতনের তালিকা দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('helpersalary.create')}}" class="btn btn-info btn-lg">হেল্পারের  বেতনের তালিকা যোগ করুন  </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('hsall-info')}}" class="btn btn-info btn-lg">সর্বমোট হেল্পারের  বেতনের তালিকা দেখুন</a>
	</div>
</div>
<div class="row mt-5">
	<div class="col-md-5">
	@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ </th>
					<th>হেল্পারের নাম</th>
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>টাকা</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($helpersalary as $helpsalary)
				<tr>
					<td>{{Carbon\Carbon::parse($helpsalary->created_at)->format('d-M-Y') }}</td>
					<td>{{$helpsalary->name}}</td>
					<td>{{$helpsalary->counter_name}}</td>
					<td>{{$helpsalary->shift}}</td>
					<td>{{$helpsalary->taka}}&nbsp;টাকা</td>
					<td><a href="{{route('helpersalary.edit',$helpsalary->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
						<form action="{{route('helpersalary.destroy',$helpsalary->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" style="border: none; background: none;" onclick="return deleted();"><i class="fas fa-trash"></i></button>
						</form>
					</td>	
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">=&nbsp;&nbsp;{{$counttaka}}&nbsp;টাকা</td>
					<td></td>
					<td></td>
				</tr>
				
			</tbody>
		</table>
	</div>
	{{ $helpersalary->links() }}
</div>
@endsection
<script>
	function deleted(){

		$delete=confirm("আপনি কি আপনার ইনফরমেশন মুচে পেলবেন?");

		if($delete != true){
			return false;
		}
	}
</script>