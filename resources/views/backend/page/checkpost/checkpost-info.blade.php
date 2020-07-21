@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">চেক পোস্টের ইনফর্মেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('checkpost.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন চেক পোস্ট যোগ করুন </a>
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
					<th>চেক পোস্টের নাম</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($checkpost as $check)
				<tr>
					<td>{{$check->name}}</td>
					<td><a href="{{route('checkpost.edit',$check->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
						<form action="{{route('checkpost.destroy',$check->id)}}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" style="border: none;background: none;" onclick="return deleted();"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="row">
		{{$checkpost->links()}}
	</div>
</div>
@endsection
<script>
	function deleted(){
		$del=confirm("আপনি কি ইনফরমেশনটি মুচে পেলতে চান?");
		if($del != true){
			return false;
		}
	}
</script>
