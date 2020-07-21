@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকের গাড়ির চেকের  ইনফরমেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('todaycheck.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>আজকের গাড়ির চেকের  ইনফরমেশন যোগ  করুণ </a>
	</div>
	<div class="col-md-4 mb-5">
		<a href="{{route('all-info')}}" class="btn btn-info btn-lg">সর্বমোট   গাড়ির চেকের তালিকা দেখুন</a>
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
					<th>চেকার  এর  নাম</th>
					<th>চেক পোষ্ট নাম</th>
					<th>গাড়ীর নাম্বার</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($todaycheck as $todayck)
				<tr>
					<td>{{ Carbon\Carbon::parse($todayck->created_at)->format('d-M-Y') }}</td>
					<td>{{$todayck->checker_name}}</td>
					<td>{{$todayck->checkpost_name}}</td>
					<td>{{$todayck->bus_number}}</td>
					<td><a href="{{route('todaycheck.edit',$todayck->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
							<form action="{{route('todaycheck.destroy',$todayck->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" style="border: none; background: none;" onclick="return deleteconfirm();"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$todaycheck->links()}}
	</div>
</div>
@endsection
<script>
function deleteconfirm(){
deletated=confirm("আপনার ইনপরমেশনটি মুছে ফেলতে চান ??");
	if(deletated != true)
		{
			return false;
		}
	}
</script>