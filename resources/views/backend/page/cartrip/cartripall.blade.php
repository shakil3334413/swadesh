
@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">গাডির ট্রিপ লিস্টের তালিকা দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('cartrip.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>গাডির ট্রিপ লিস্টের তালিকা যুক্ত করুন 
 		</a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('cartrip.index')}}" class="btn btn-info btn-lg">আজকের গাড়ীর ট্রিপ লিস্টের তালিকা দেখুন</a>
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
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
			 @foreach($cartrip as $cartrips)
				<tr>
					<td>{{Carbon\Carbon::parse($cartrips->created_at)->format('d-M-Y') }}</td>
					<td>{{$cartrips->number}}</td>
					<td>{{$cartrips->trip_number}}</td>
					<td><a href="{{route('cartrip.edit',$cartrips->id)}}"><i class="far fa-edit"></i></a></td>
					<form action="{{route('cartrip.destroy',$cartrips->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<td><button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash" style="cursor: pointer;"></i></button></td>
					</form>
				</tr>
			@endforeach
				<tr>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$counttrip}}&nbsp;টি</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		{{$cartrip->links()}}
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
