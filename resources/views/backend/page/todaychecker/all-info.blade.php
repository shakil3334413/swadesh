@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সর্বমোট গাড়ির চেকের  ইনফরমেশন দেখুন</h1>
</div>
<div class="row">
	<div class="col-md-5 mb-5">
		<a href="{{route('todaycheck.index')}}" class="btn btn-info btn-lg"><span class="mr-2"><i class="fas fa-user-plus text-white"></i></span>আজকের গাড়ির চেকের  ইনফরমেশন যোগ  করুণ </a>
	</div>
	<div class="col-md-4 mb-5">
		<a href="{{route('todaycheck.create')}}" class="btn btn-info btn-lg">আজকের  গাড়ির চেকের তালিকা দেখুন</a>
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
				</tr>
			</thead>
			<tbody>	
				@foreach($allcheck as $allchk)
				<tr>
					<td>{{ Carbon\Carbon::parse($allchk->created_at)->format('d-M-Y') }}</td>
					<td>{{$allchk->checker_name}}</td>
					<td>{{$allchk->checkpost_name}}</td>
					<td>{{$allchk->bus_number}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$allcheck->links()}}
	</div>

</div>
@endsection