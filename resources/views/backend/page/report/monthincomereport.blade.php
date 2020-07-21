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
                <h4>এই মাসের আয়ের রিপোর্ট </h4>
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
                        <th scope="col">কাউন্টার নাম</th>
                        <th scope="col">শিফট</th>
                        <th scope="col">টিকেট থেকে</th>
                        <th scope="col">কাউন্টার নাম</th>
                        <th scope="col">শিফট</th>
                        <th scope="col">মালামাল থেকে</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tickets as $ticket)
                      <tr>
                        <td scope="row">{{ Carbon\Carbon::parse($ticket->created_at)->format('d-M-Y g:i:s A') }}</td>  
                        <td>{{ $ticket->counter_name }}</td>
                        <td>{{ $ticket->shift }}</td>
                        <td>{{ $ticket->taka }}&nbsp;টাকা</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    @endforeach
                    @foreach ($acce as $acces)
                    <tr>
                        <td>{{ Carbon\Carbon::parse($acces->created_at)->format('d-M-Y g:i:s A') }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ $acces->counter_name }}</td>
                        <td>{{ $acces->shift }}</td>
                        <td>{{ $acces->ticket_price }}&nbsp;টাকা</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ $tickettaka }}&nbsp;টাকা</td>
                        <td></td>
                        <td></td>
                        <td>{{ $accessories }}&nbsp;টাকা</td>
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