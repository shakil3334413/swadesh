@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সকল  মালিক এর  গাড়ীর   ইনফর্মেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('ownerbus.create')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>মালিকের গাড়ীর  ইনফরমেশন যোগ  করুণ </a>
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
					<th>মালিকের  নাম</th>
					<th>মালিকের  মোবাইল  নাম্বার</th>
					<th>গাড়ীর নাম্বার</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>  
			</thead>
			<tbody>
				@foreach($buses as $ownerbusr)
				<tr>
					<td>{{$ownerbusr->owner->name}}</td>
					<td>{{$ownerbusr->owner->phone}}</td>
					<td>{{$ownerbusr->bus_number}}</td>
					<td><a href="{{route('ownerbus.edit',$ownerbusr->id)}}"><i class="far fa-edit"></i></a></td>
					<td><form action="{{route('ownerbus.destroy',$ownerbusr->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" style="border: none; background: none;" onclick="return deleteconfirm();" id="demo"><i class="fas fa-trash"></i></button>
					</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$buses->links()}}
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