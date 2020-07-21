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
    <div class="container-fluid">
       <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h4>এই মাসের ব্যয়ের রিপোর্ট</h4>
                <h6>স্বদেশ পরিবহন</h6>
            </div>
            <div class="col-md-12 text-right">
                <p>Print at:&nbsp;{{ Carbon\Carbon::parse($currentDatetime)->format('d-M-Y g:i:s A') }}</p>
                <button onclick="myFunction()" class="btn btn-success noprint">Print</button>
            </div>
            <div class="col-md-12 mt-5 mb-5">
                <table class="table table-bordered text-center">
                    <thead>
                      <tr>
                        <th scope="col">তারিখ </th>
                        <th scope="col">কউন্টারম্যান  নাম</th>
                        <th scope="col">কউন্টারম্যান বেতন</th>
                        <th scope="col">ড্রাইভার নাম</th>
                        <th scope="col">ড্রাইভার বেতন </th>
                        <th scope="col">হেল্পার নাম</th>
                        <th scope="col">হেল্পার বেতন</th>
                        <th scope="col">লাইনম্যান  নাম</th>
                        <th scope="col">লাইনম্যান বেতন</th>
                        <th scope="col">কউন্টার  খরচ নাম</th>
                        <th scope="col">টাকা</th>
                        <th scope="col">গাড়ির  খরচ</th>
                        <th scope="col">টাকা</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($counter as $counters)
                      <tr>
                        <td scope="row">{{ Carbon\Carbon::parse($counters->created_at)->format('d-M-Y g:i:s A') }}</td>  
                        <td>{{ $counters->name}}</td>
                        <td>{{ $counters->taka}}&nbsp;টাকা</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    @endforeach
                    @foreach ($driver as $drivers)
                      <tr>
                        <td scope="row">{{ Carbon\Carbon::parse($drivers->created_at)->format('d-M-Y g:i:s A') }}</td>  
                        <td></td>
                        <td></td>
                        <td>{{ $drivers->name}}</td>
                        <td>{{ $drivers->taka}}&nbsp;টাকা</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    @endforeach
                    @foreach ($helper as $helpers)
                    <tr>
                      <td scope="row">{{ Carbon\Carbon::parse($helpers->created_at)->format('d-M-Y g:i:s A') }}</td>  
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>{{ $helpers->name}}</td>
                      <td>{{ $helpers->taka}}&nbsp;টাকা</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  @endforeach
                  @foreach ($lineman as $linemans)
                  <tr>
                    <td scope="row">{{ Carbon\Carbon::parse($linemans->created_at)->format('d-M-Y g:i:s A') }}</td>  
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $linemans->name}}</td>
                    <td>{{ $linemans->taka}}&nbsp;টাকা</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                @endforeach
                @foreach ($counterCost as $counterCosts)
                  <tr>
                    <td scope="row">{{ Carbon\Carbon::parse($counterCosts->created_at)->format('d-M-Y g:i:s A') }}</td>  
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $counterCosts->cost_name}}</td>
                    <td>{{ $counterCosts->taka}}&nbsp;টাকা</td>
                    <td></td>
                    <td></td>
                  </tr>
                @endforeach
                @foreach ($carcost as $carcosts)
                  <tr>
                    <td scope="row">{{ Carbon\Carbon::parse($carcosts->created_at)->format('d-M-Y g:i:s A') }}</td>  
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $carcosts->cost_name}}</td>
                    <td>{{ $carcosts->taka}}&nbsp;টাকা</td>
                  </tr>
                @endforeach
                    </tbody>
                    <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>{{ $countermansalary}}&nbsp;টাকা</td>
                                <td></td>
                                <td>{{ $driversalary}}&nbsp;টাকা</td>
                                <td></td>
                                <td>{{ $helpersalary}}&nbsp;টাকা</td>
                                <td></td>
                                <td>{{ $linemansalary}}&nbsp;টাকা</td>
                                <td></td>
                                <td>{{ $counterCostAdd}}&nbsp;টাকা</td>
                                <td></td>
                                <td>{{ $carcostadd}}&nbsp;টাকা</td>
                            </tr>
                    </tfoot>
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