@extends('backend.layouts.master')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সকল  গাড়ীর   ইনফর্মেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-3 mb-5">
		<a href="{{route('bus.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন গাড়ী  যোগ করুন </a>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@include('backend.message.success')
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table id="example" class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>গাড়ীর মডেল (অপশনাল ) </th>
					<th>গাড়ীর  নাম্বার</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
			 @foreach($buses as $bus)
				<tr>
					<td>{{$bus->model}}</td>
					<td>{{$bus->number}}</td>
					<td><a href="{{route('bus.edit',$bus->id)}}"><i class="far fa-edit"></i></a></td>
					<form action="{{route('bus.destroy',$bus->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<td><button type="submit" onclick="return deleted();" style="border: none; background: none;"><i class="fas fa-trash" style="cursor: pointer;"></i></button></td>
					</form>
				</tr>
			@endforeach
			</tbody>
		</table>
		{{$buses->links()}}
	</div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
	function deleted(){
		$del=confirm("আপনি কি আপনার ইনফরমেশন মুচে পেলবেন?");
		if($del != true){
			return false;
		}
	}
	$(document).ready(function() {
    $('#example').DataTable();
	} );
</script>
