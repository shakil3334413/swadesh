@extends('backend.layouts.master')
@section('backend-content')

<div class="page-body clearfix">
    <div class="panel panel-default">
        <div class="panel-heading"><h3>এস.এম.এস এর জন্য মালিক এর ইনফরমেশন দিন !</h3></div>
        <hr>
        <div class="panel-body">
            <form class="form-horizontal" id="myForm" method="POST" action="{{route('sms.smsstore')}}" role="form">
                @csrf
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="phone_number"> মোবাইল নাম্বার </label>
                        <select name="phone_number" id="phone_number" class="form-control">
                            @foreach($owner as $owners)
                                <option value="{{$owners->phone}}">{{$owners->phone}}&nbsp;->{{$owners->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="bus_number">গাডির নাম্বার </label>
                        <select name="bus_number" id="bus_number" class="form-control">
                            @foreach($ownerBus as $ownerBuses)
                                <option value="{{$ownerBuses->bus_number}}">{{$ownerBuses->bus_number}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <button type="submit" class="btn btn-lg  btn-raised btn-primary" id="submitBtn"><i class="fa fa-check"></i> সেইভ করুন </button>    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection