<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Owner;
use App\Counter;
use App\Driver;
use App\Helper;
use App\Checkpost;
use App\Carinfo;
use App\Countermansalary;
use App\Driversalary;
use App\Helpersalary;
use App\Linemansalary;
use App\Gpcost;
use App\CounterCostAdd;
use App\Costadd;
use App\Accessories;
use App\Ticketearn;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $total=array();
       $total['owner']=Owner::count();
       $total['counter']=Counter::count();
       $total['driver']=Driver::count();
       $total['helper']=Helper::count();
       $total['checkpost']=Checkpost::count();
       $total['carinfo']=Carinfo::count();
       $currentDate = Carbon::now()->toDateString();
       $start = Carbon::setWeekStartsAt(Carbon::SATURDAY);
       $end = Carbon::setWeekEndsAt(Carbon::FRIDAY);
       $todaytickettaka=Ticketearn::whereDate('created_at',$currentDate)->sum('taka');
       $todayaccessories=Accessories::whereDate('created_at',$currentDate)->sum('ticket_price');
       $todaytotalearn=$todaytickettaka+$todayaccessories;
       $tcountermansalary=Countermansalary::whereDate('created_at',$currentDate)->sum('taka');
       $tdriversalary=Driversalary::whereDate('created_at',$currentDate)->sum('taka');
       $thelpersalary=Helpersalary::whereDate('created_at',$currentDate)->sum('taka');
       $tlinemansalary=Linemansalary::whereDate('created_at',$currentDate)->sum('taka');
       $tgpcost=Gpcost::whereDate('created_at',$currentDate)->sum('taka');
       $tcounterCostAdd=CounterCostAdd::whereDate('created_at',$currentDate)->sum('taka');
       $tcarcostadd=Costadd::whereDate('created_at',$currentDate)->sum('taka'); 
       $todaytotal=$tcountermansalary+$tdriversalary+$thelpersalary+$tlinemansalary+$tcounterCostAdd+$tgpcost+$tcarcostadd;
       $weektickettaka=Ticketearn::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
       $weekaccessories=Accessories::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('ticket_price');

       $weektotalearn=$weektickettaka+$weekaccessories;

        $weekcountermansalary=Countermansalary::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weekdriversalary=Driversalary::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weekhelpersalary=Helpersalary::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weeklinemansalary=Linemansalary::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weekgpcost=Gpcost::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weekcounterCostAdd=CounterCostAdd::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weekcarcostadd=Costadd::whereBetween('created_at', [Carbon::now()->startOfWeek($start)->format('Y-m-d H:i'),Carbon::now()->endOfWeek($end)->format('Y-m-d H:i')])
                ->sum('taka');
        $weektotalcost=$weekcountermansalary+$weekdriversalary+$weekhelpersalary+$weeklinemansalary+$weekgpcost+$weekcounterCostAdd+$weekcarcostadd;

        $monthtickettaka=Ticketearn::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $monthaccessories=Accessories::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('ticket_price');
        $monthtotalearn=$monthtickettaka+$monthaccessories;
        $mcountermansalary=Countermansalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mdriversalary=Driversalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mhelpersalary=Helpersalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mlinemansalary=Linemansalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mgpcost=Gpcost::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mcounterCostAdd=CounterCostAdd::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mcarcostadd=Costadd::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->whereMonth('created_at', Carbon::now()->month)
          ->sum('taka');
        $mtotalcost=$mcountermansalary+$mdriversalary+$mhelpersalary+$mlinemansalary+$mgpcost+$mcounterCostAdd+$mcarcostadd;
        $ycountermansalary=Countermansalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $ydriversalary=Driversalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $yhelpersalary=Helpersalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $ylinemansalary=Linemansalary::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $ygpcost=Gpcost::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $ycounterCostAdd=CounterCostAdd::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $ycarcostadd=Costadd::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $ytotal=$ycountermansalary+$ydriversalary+$yhelpersalary+$ylinemansalary+$ygpcost+$ycounterCostAdd+$ycarcostadd;

        $ytickettaka=Ticketearn::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('taka');
        $yaccessories=Accessories::latest()
          ->whereYear('created_at', Carbon::now()->year)
          ->sum('ticket_price');
        $ytotalearn=$ytickettaka+$yaccessories;
        $taccessories=Accessories::latest()
          ->sum('ticket_price');
        $ttickettaka=Ticketearn::latest()
          ->sum('taka');
        $ttotalearn=$taccessories+$ttickettaka;

        $tcountermansalary=Countermansalary::latest()
          ->sum('taka');
        $tdriversalary=Driversalary::latest()
          ->sum('taka');
        $thelpersalary=Helpersalary::latest()
          ->sum('taka');
        $tlinemansalary=Linemansalary::latest()
          ->sum('taka');
        $tgpcost=Gpcost::latest()
          ->sum('taka');
        $tcounterCostAdd=CounterCostAdd::latest()
          ->sum('taka');
        $tcarcostadd=Costadd::latest()
          ->sum('taka');
        $ttotal=$tcountermansalary+$tcarcostadd+$tdriversalary+$thelpersalary+$tlinemansalary+$tgpcost+$tcounterCostAdd;


        return view('backend.page.home',compact('total','todaytotalearn','todaytotal','weektotalearn','weektotalcost','monthtotalearn','mtotalcost','ytotal','ytotalearn','ttotalearn','ttotal'));
    }
    
}
