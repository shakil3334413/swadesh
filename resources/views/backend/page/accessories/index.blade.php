@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকে   কাউন্টার  থেকে টিকিট  বিক্রি তালিকা  দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('accessories.create')}}" class="btn btn-info btn-lg">আজকে  মালামাল টিকিট  বিক্রি যোগ করুণ  </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('accessories-list')}}" class="btn btn-info btn-lg">সর্বমোট  আজকে মালামাল  থেকে আয় তালিকা দেখুন</a>
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
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>মালামালের মূল্য</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($accessoriesearn as $accessoriesearns)
				<tr>
					<td>{{ Carbon\Carbon::parse($accessoriesearns->created_at)->format('d-M-Y') }}</td>
					<td>{{$accessoriesearns->counter_name}}</td>
					<td>{{$accessoriesearns->shift}}</td>
					<td>{{$accessoriesearns->ticket_price}}</td>
					<td><a href="{{route('accessories.edit',$accessoriesearns->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
						<form action="{{route('accessories.destroy',$accessoriesearns->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" style="background: none;border: none;"><i class="fas fa-trash" onclick="return deleted();"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$counttaka}}&nbsp;টাকা</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	{{ $accessoriesearn->links() }}
</div>
@endsection

<script>
	function deleted(){
<<<<<<< HEAD
		$delete=confirm("আপনি কি আপনার  ডাটা মুছে ফেলতে চান ");
=======
		$delete=confirm("আপনি কি আপনার ইনফরমেশন মুচে পেলবেন?");
>>>>>>> 5a0e889de2dd71c90561617cbd57cd5a9a0438a7
		if($delete != true){
			return false;
		}
	}
</script>