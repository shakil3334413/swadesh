@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">গাডির খরচ যোগ করুন ।</h1>
</div>
<div class="row">
	<div class="col-md-6  mb-5">
		<a href="{{route('costlist.index')}}" class="btn btn-info btn-lg">গাডির খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-4">
		<form action="{{route('costlist.store')}}" method="post" class="needs-validation" novalidate>
			@csrf
			<div class="form-group">
				<label for="cost_name">গাডির খরচ এর নাম  লেখুন</label>
				<input type="text" class="form-control{{ $errors->has('cost_name') ? ' is-invalid' : '' }}" name="cost_name" id="cost_name" placeholder="খরচ এর নাম  লেখুন" required>
                <span class="invalid-feedback" role="alert">
                    <strong>খরচের নাম  অবশ্যই দিতে হবে </strong>
                </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection