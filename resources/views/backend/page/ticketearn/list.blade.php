@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">আজকে   কাউন্টার  থেকে টিকিট  বিক্রি তালিকা  দেখুন</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('ticketearn.create')}}" class="btn btn-info btn-lg">আজকে   কাউন্টার  থেকে টিকিট  বিক্রি যোগ করুণ  </a>
	</div>
	<div class="col-md-5 mb-5">
		<a href="{{route('all-ticket-list')}}" class="btn btn-info btn-lg">সর্বমোট  গাড়ির টিকেট সংখ্যা তালিকা দেখুন</a>
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
					<th>কাউন্টারের নাম</th>
					<th>শিফট</th>
					<th>টিকেট সংখ্যা </th>
					<th>টিকেটের  মূল্য</th>
					<th>টাকা</th>
					<th>এডিট</th>
					<th>ডিলিট</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ticketearn as $ticketearns)
				<tr>
					<td>{{ Carbon\Carbon::parse($ticketearns->created_at)->format('d-M-Y') }}</td>
					<td>{{$ticketearns->counter_name}}</td>
					<td>{{$ticketearns->shift}}</td>
					<td>{{$ticketearns->ticket_number}}</td>
					<td>{{$ticketearns->price}}</td>
					<td>{{$ticketearns->taka}}&nbsp;টাকা</td>
					<td><a href="{{route('ticketearn.edit',$ticketearns->id)}}"><i class="far fa-edit"></i></a></td>
					<td>
						<form action="{{route('ticketearn.destroy',$ticketearns->id)}}" method="post">
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
					<td>আজকে  টিকিট  বিক্রয় সংখ্যা :&nbsp;{{$ticket_number}}&nbsp;টি</td>
					<td></td>
					<td class="font-weight-bold">{{$counttaka}}&nbsp;টাকা</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	{{ $ticketearn->links() }}
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