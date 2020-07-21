@extends('backend.layouts.master')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">সপ্তাহের মোট আয়ের তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-5">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>কাউন্টার নাম</th>
					<th>শিফট</th>
					<th>টিকেট থেকে</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tickets as $ticket)
					<tr>
						<td>{{ Carbon\Carbon::parse($ticket->created_at)->format('d-M-Y') }}</td>
						<td>{{$ticket->counter_name}}</td>
						<td>{{$ticket->shift}}</td>
						<td>{{$ticket->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$tickettaka}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-7">
		<table id="example" class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>কাউন্টার নাম</th>
					<th>শিফট</th>
					<th>মালামাল থেকে</th>
					<th>সপ্তাহের মোট আয়</th>
				</tr>
			</thead>
			<tbody>
				@foreach($acce as $acces)
					<tr>
						<td>{{ Carbon\Carbon::parse($acces->created_at)->format('d-M-Y') }}</td>
						<td>{{$acces->counter_name}}</td>
						<td>{{$acces->shift}}</td>
						<td>{{$acces->ticket_price}}</td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$accessories}}&nbsp;টাকা </td>
					<td class="font-weight-bold">{{$totalearn}}&nbsp;টাকা</td>
				</tr>
			</tbody>
		</table>
		{{$tickets->links()}}
	</div>
</div>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
	} );
</script> --}}

