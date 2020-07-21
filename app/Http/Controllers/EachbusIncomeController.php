<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\EachbusIncome;
use App\Carinfo;
use App\Ticketearn;
use App\Accessories;
use Carbon\Carbon;
use App\CarTrip;
class EachbusIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carnumber=Carinfo::all();
        return view('backend.page.eachbusincome.index',compact('carnumber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentDate= Carbon::now()->toDateString();
        $eachbusincome=EachbusIncome::latest()
            ->whereDate('created_at',$currentDate)
            ->paginate(20);   
        $carnumber=Carinfo::all();
        return view('backend.page.eachbusincome.todayeachbus',compact('eachbusincome','carnumber'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'trip_number' => 'required',
            'driver_salary' => 'required',
            'bus_cost' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $currentDate= Carbon::now()->toDateString();
        $ticketeat=Ticketearn::whereDate('created_at',$currentDate)->sum('taka');
        $assocess=Accessories::whereDate('created_at',$currentDate)->sum('ticket_price');
        $totaltaka=$ticketeat+$assocess;
        $trip=CarTrip::whereDate('created_at',$currentDate)->sum('trip_number');
        if($trip>0){
        $carperincome=$totaltaka/$trip;
        $eachbusincome = new EachbusIncome();
        $eachbusincome->number=$request->number; 
        $eachbusincome->trip_number=$request->trip_number;  
        $eachbusincome->driver_salary=$request->driver_salary;  
        $eachbusincome->bus_cost=$request->bus_cost;
        $eachbusincome->gpcost=$request->gpcost;

        $eachbusincome->each_income=$carperincome;
        $cartotalincome=$carperincome*$request->trip_number;
        $eachbusincome->total_income=$cartotalincome;
        $totalcost=$request->driver_salary+$request->bus_cost+$request->gpcost;
        $eachbusincome->todaycarincome=$cartotalincome-$totalcost;
        $eachbusincome->total_cost=$totalcost;
        $eachbusincome->save();
        return redirect()->route('eachbusincome.create')->with('success','প্রতিটি গাডির আয় তালিকা সফলভাবে যুক্ত করা হয়েছে !');
        }else{
           return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eachbusincome=EachbusIncome::find($id);
        $carnumber=Carinfo::all();
        return view('backend.page.eachbusincome.edit',compact('eachbusincome','carnumber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'trip_number' => 'required',
            'driver_salary' => 'required',
            'bus_cost' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $currentDate= Carbon::now()->toDateString();
        $ticketeat=Ticketearn::whereDate('created_at',$currentDate)->sum('taka');
        $assocess=Accessories::whereDate('created_at',$currentDate)->sum('ticket_price');
        $totaltaka=$ticketeat+$assocess;
        $trip=CarTrip::whereDate('created_at',$currentDate)->sum('trip_number');
        $carperincome=$totaltaka/$trip;
        $eachbusincome = EachbusIncome::find($id);
        $eachbusincome->number=$request->number; 
        $eachbusincome->trip_number=$request->trip_number;  
        $eachbusincome->driver_salary=$request->driver_salary;  
        $eachbusincome->bus_cost=$request->bus_cost;
        $eachbusincome->gpcost=$request->gpcost;
        $eachbusincome->each_income=$carperincome;
        $cartotalincome=$carperincome*$request->trip_number;
        $eachbusincome->total_income=$cartotalincome;
        $totalcost=$request->driver_salary+$request->bus_cost+$request->gpcost;
        $eachbusincome->todaycarincome=$cartotalincome-$totalcost;
        $eachbusincome->total_cost=$totalcost;
        $eachbusincome->save();
        return redirect()->route('eachbusincome.create')->with('success','প্রতিটি গাডির আয় তালিকা সফলভাবে যুক্ত করা হয়েছে !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EachbusIncome::destroy($id);
        return back();
    }


    // All eachbusincome 

    public function Weekeach()
    {
        $start = Carbon::setWeekStartsAt(Carbon::SATURDAY);
        $end = Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $eachbusincome=EachbusIncome::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])->paginate(20);       
        return view('backend.page.eachbusincome.weekeachbus',compact('eachbusincome'));
    }
    public function Montheach()
    {
        $eachbusincome=EachbusIncome::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->paginate(20);
        return view('backend.page.eachbusincome.montheachbus',compact('eachbusincome'));
    }
    public function Yeareach()
    {
        $eachbusincome=EachbusIncome::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->paginate(30);
        return view('backend.page.eachbusincome.yeareachbus',compact('eachbusincome'));
    }
    public function Totaleach()
    {
        $eachbusincome=EachbusIncome::latest()->paginate(40);
        return view('backend.page.eachbusincome.totaleachbus',compact('eachbusincome'));
    }


}
