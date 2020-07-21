@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকে কাউন্টারম্যানের বেতনের তালিকা দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('countermansalary.create')}}" class="btn btn-info btn-lg">কাউন্টারম্যানের বেতনের তালিকা যোগ করুন  </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('csall-info')}}" class="btn btn-info btn-lg">সর্বমোট কাউন্টারম্যানের বেতনের তালিকা দেখুন</a>
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
					<th>কাউন্টারম্যানের নাম</th>
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>টাকা</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($countermansalary as $coumansalary)
				<tr>
					<td>{{Carbon\Carbon::parse($coumansalary->created_at)->format('d-M-Y') }}</td>
					<td>{{$coumansalary->name}}</td>
					<td>{{$coumansalary->counter_name}}</td>
					<td>{{$coumansalary->shift}}</td>
					<td>{{$coumansalary->taka}}&nbsp;টাকা</td>
					<td><a href="{{route('countermansalary.edit',$coumansalary->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
						<form action="{{route('countermansalary.destroy',$coumansalary->id)}}" method="post">
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
					<td class="font-weight-bold">=&nbsp;{{$counttaka}}&nbsp;টাকা</td>
					<td></td>
					<td></td>
				</tr>
				
			</tbody>
		</table>
	</div>
	{{ $countermansalary->links() }}
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