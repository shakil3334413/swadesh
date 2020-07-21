@extends('backend.layouts.master')
@section('backend-content')

<div class="page-body clearfix">
    <div class="panel panel-default">
        <div class="panel-heading">SendBox</div>
        <hr>
        <div class="panel-body">
            <form class="form-horizontal" id="myForm" method="POST" action="{{url('send-sms')}}" role="form">
                @csrf
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>সেন্ড নাম্বার</label>
                        <select class="form-control js-select2-placeholder" data-placeholder="Please select a sender" name="sender" required="required">
                            <option value="8801847169884">8801847169884</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>মোবাইল  নাম্বার</label>
                        <input type="text" value="{{$phone}}" name="cellNo" class="form-control">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>হিসাব </label>
                        <textarea rows="5" class="form-control no-resize auto-growth" placeholder="Please type your message... And please don't forget the ENTER key press multiple times :)" name="message">গাড়ির নাম্বার :&nbsp;{{$bus}}&nbsp;। আজকে  গাড়ির  ট্রিপ থেকে আয় :&nbsp;{{$eachbusIncome}}&nbsp;টাকা । &nbsp;আজকে গাড়ির খরচ :&nbsp;{{$eachbuscost}}&nbsp;টাকা । &nbsp;আজকে  গাড়ির আয় :{{$todaycarincome}}&nbsp;টাকা । 
                        </textarea>
                    </div>
                </div>
                <div class="col-sm-12 text-left">
                    <button type="submit" class="btn btn-lg btn-rounded btn-raised btn-primary " id="submitBtn"><i class="fa fa-check"></i> পাঠান </button>    
                
                </div>
            </form>
        </div>
    </div>
</div>

@endsection