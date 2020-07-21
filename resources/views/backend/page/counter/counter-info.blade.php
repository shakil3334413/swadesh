@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সকল কাউন্টারের ইনফর্মেশন দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-4 mb-5">
		<a href="{{route('counter.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>নতুন কাউন্টার  যোগ করুন </a>
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
					<th>কাউন্টারের নাম</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($counter as $counters)
				<tr>
					<td>{{$counters->counter_name}}</td>
					<td><a href="{{route('counter.edit',$counters->id)}}"><i class="far fa-edit"></a></i></td>
					<td><form action="{{route('counter.destroy',$counters->id)}}" method="post">
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
</div>
@endsection
<script>
	function deleted(){
		$del=confirm("আপনি কি আপনার ইনফরমেশনটি  মুছে ফেলতে চান ??");
		if($del != true){
			return false;
		}
	}
</script>