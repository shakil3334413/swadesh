@extends('backend.layouts.master')
@section('backend-content')

<div class="dt-page__header">
    <h1 class="dt-page__title">জিপি খরচ এর  ইনফরমেশন পরিবর্তন করুন </h1>
</div>
<div class="row">
	<div class="col-md-3  mb-5">
		<a href="{{route('gpcost.index')}}" class="btn btn-info btn-lg">খরচ এর তালিকা দেখুন</a>
	</div>
	<div class="col-md-5  mb-5">
		<a href="{{route('gpcost-all')}}" class="btn btn-info btn-lg">সর্বমোট  খরচ এর তালিকা দেখুন</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-5 ml-5 mb-5">
		<form action="{{route('gpcost.update',$gpcosts->id)}}" method="post" class="needs-validation" novalidate>
			@csrf
			@method('put')
			<div class="form-group">
				<label for="number">গাড়ির নাম্বার </label>
				<select name="number" id="number" class="form-control">
					@foreach($carnumber as $carnum)
						<option value="{{$carnum->number}}"{{$carnum->number==$gpcosts->number?'selected':''}}>{{$carnum->number}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="taka">টাকার পরিমাপ</label>
				<input type="number" class="form-control{{ $errors->has('taka') ? ' is-invalid' : '' }}" name="taka" id="taka" value="{{$gpcosts->taka}}" required >
                    <span class="invalid-feedback" role="alert">
                        <strong>খরচের নাম  অবশ্যই দিতে হবে </strong>
                    </span>
			</div>
			<input type="submit" value="সেইভ করুন" class="btn btn-info">
		</form>
	</div>
</div>
@endsection