<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="swadeshparibahan.com swadeshparibahan.net swadeshparibahan  swadesh Ltd Management System LtdManagementSystem">
  <meta name="keywords" content="swadeshparibahan.com swadeshparibahan.net swadeshparibahan swadesh Ltd Management System LtdManagementSystem">
  <meta name="author" content="swadeshparibahan swadesh">
  <!-- /meta tags -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.css')}}">
  <title>স্বদেশ পরিবহন</title>
    <style> 
    
    @media print {
  /* style sheet for print goes here */
  .noprint {
    visibility: hidden;
  }
  .table tr{
      border: 1px solid #000;
  }
}
    </style>
</head>
<body>
    <div class="container">
       <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h4>এই সাপ্তাহের  কউন্টারম্যান  এর বেতন এর লিস্ট </h4>
                <h6>স্বদেশ পরিবহন</h6>
            </div>
            <div class="col-md-12 text-right">
                <p>Print at:&nbsp;{{ Carbon\Carbon::parse($currentDatetime)->format('d-M-Y g:i:s A') }}</p>
                <button onclick="myFunction()" class="btn btn-success noprint">Print</button>
            </div>
            <div class="col-md-12 mt-5">
                <table class="table table-bordered text-center">
                    <thead>
                      <tr>
                          <th scope="col">ক্রমিক  নং</th>
                        <th scope="col">তারিখ </th>
                        <th scope="col">কউন্টারম্যান নাম</th>
                        <th scope="col">কাউন্টার নাম</th>
                        <th scope="col">শিফট</th>
                        <th scope="col">বেতন</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $count=0;
                        @endphp
                 @foreach ($countermansalary as $countermansalarys)
                      <tr>
                          <th scope="row">{{ $count+=1 }}</th>
                        <td>{{ Carbon\Carbon::parse($countermansalarys->created_at)->format('d-M-Y') }}</td>
                        <td>{{$countermansalarys->name}}</td>
                        <td>{{$countermansalarys->counter_name}}</td>
                        <th>{{$countermansalarys->shift}}</th>
                        <td>{{$countermansalarys->taka}}&nbsp;টাকা</td>
                      </tr>
                @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{$counttaka}}&nbsp;টাকা</td>
                    </tr>
                    </tbody>
                  </table>
            </div>
       </div>
    </div>
</body>
<script>
    function myFunction() {
      window.print();
    }
</script>
</html>