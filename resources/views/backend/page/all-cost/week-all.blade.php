@extends('backend.layouts.master')
@section('backend-content')
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  ড্রাইভার খরচের  তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>ড্রাইভার নাম</th>
					<th>গাড়ির নাম্বার </th>
					<th>ড্রাইভার বেতন</th>
				</tr>
			</thead>
			<tbody>
				@foreach($driver as $drivers)
					<tr>
						<td>{{ Carbon\Carbon::parse($drivers->created_at)->format('d-M-Y') }}</td>
						<td>{{$drivers->name}}</td>
						<td>{{$drivers->number}}</td>
						<td>{{$drivers->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$driversalary}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
		{{ $driver->links() }}
	</div>
</div>
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  হেল্পার  খরচের  তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>হেল্পার  নাম</th>
					<th>গাড়ির নাম্বার </th>
					<th>হেল্পার  বেতন</th>
				</tr>
			</thead>
			<tbody>
				@foreach($helper as $helpers)
					<tr>
						<td>{{ Carbon\Carbon::parse($helpers->created_at)->format('d-M-Y') }}</td>
						<td>{{$helpers->name}}</td>
						<td>{{$helpers->number}}</td>
						<td>{{$helpers->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$helpersalary}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
		{{ $helper->links() }}
	</div>
</div>
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  চেকার   খরচের  তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>চেকার   নাম</th>
					<th>চেকপোষ্ট নাম </th>
					<th>চেকার  বেতন</th>
				</tr>
			</thead>
			<tbody>
				@foreach($lineman as $linemans)
					<tr>
						<td>{{ Carbon\Carbon::parse($linemans->created_at)->format('d-M-Y') }}</td>
						<td>{{$linemans->name}}</td>
						<td>{{$linemans->checkpost_name}}</td>
						<td>{{$linemans->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$linemansalary}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
		{{ $lineman->links() }}
	</div>
</div>
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  কাউন্টার ম্যান   খরচের  তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>কাউন্টার ম্যান   নাম</th>
					<th>কাউন্টার  নাম </th>
					<th>কাউন্টার ম্যান  বেতন</th>
				</tr>
			</thead>
			<tbody>
				@foreach($counter as $counters)
					<tr>
						<td>{{ Carbon\Carbon::parse($counters->created_at)->format('d-M-Y') }}</td>
						<td>{{$counters->name}}</td>
						<td>{{$counters->counter_name}}</td>
						<td>{{$counters->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$countermansalary}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
		{{ $counter->links() }}
	</div>
</div>
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  কাউন্টার    খরচের  তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>কাউন্টার    নাম</th>
					<th>শিফট</th>
					<th>খরচের নাম</th>
					<th>টাকা</th>
				</tr>
			</thead>
			<tbody>
				@foreach($counterCost as $counterCosts)
					<tr>
						<td>{{ Carbon\Carbon::parse($counterCosts->created_at)->format('d-M-Y') }}</td>
						<td>{{$counterCosts->counter_name}}</td>
						<td>{{$counterCosts->shift}}</td>
						<td>{{$counterCosts->cost_name}}</td>
						<td>{{$counterCosts->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$counterCostAdd}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
		{{ $counterCost->links() }}
	</div>
</div>
<div class="dt-page__header">
    <h1 class="dt-page__title">এই সাপ্তাহের  গাড়ির    খরচের  তালিকা।</h1>
    <hr>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered table-striped text-center">
			<thead class="thead-dark">
				<tr>
					<th>তারিখ</th>
					<th>গাড়ির নাম্বার </th>
					<th>খরচের নাম</th>
					<th>টাকা</th>
				</tr>
			</thead>
			<tbody>
				@foreach($carcost as $carcosts)
					<tr>
						<td>{{ Carbon\Carbon::parse($carcosts->created_at)->format('d-M-Y') }}</td>
						<td>{{$carcosts->number}}</td>
						<td>{{$carcosts->cost_name}}</td>
						<td>{{$carcosts->taka}}&nbsp;টাকা </td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="font-weight-bold">{{$carcostadd}}&nbsp;টাকা </td>
				</tr>
			</tbody>
		</table>
		{{ $carcost->links() }}
	</div>
</div>

@endsection