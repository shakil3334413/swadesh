<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Driversalary;
use App\Carinfo;
use App\Driver;
use Carbon\Carbon;
class DriverSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate= Carbon::now()->toDateString();
        $counttaka=Driversalary::whereDate('created_at',$currentDate)->sum('taka');
        $driversalary=Driversalary::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(25);
        return view('backend.page.allsalary.driversalary.index',compact('driversalary','counttaka'));
    }

    public function all_info()
    {
        $driversalary= Driversalary::all();
        $counttaka=Driversalary::sum('taka');
        return view('backend.page.allsalary.driversalary.all-info',compact('driversalary','counttaka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driversalary=Driversalary::all();
        $carinfo=Carinfo::all();
        $driver=Driver::all();
        return view('backend.page.allsalary.driversalary.create',compact('driversalary','carinfo','driver'));
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
            'taka' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $driversalary = new Driversalary();
        $driversalary->name=$request->name; 
        $driversalary->number=$request->number; 
        $driversalary->taka=$request->taka; 
        $driversalary->save();
        return redirect()->route('driversalary.index')->with('success','ড্রাইভারের বেতন সফলভাবে যুক্ত করা হয়েছে !'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carinfo=Carinfo::all();
        $driver=Driver::all();
        $driversalary = Driversalary::find($id);
        return view('backend.page.allsalary.driversalary.edit',compact('driversalary','driver','carinfo'));
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
            'taka' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $driversalary = Driversalary::find($id);
        $driversalary->name=$request->name; 
        $driversalary->number=$request->number; 
        $driversalary->taka=$request->taka; 
        $driversalary->save();
        return redirect()->route('driversalary.index')->with('success','ড্রাইভারের বেতন সফলভাবে যুক্ত করা হয়েছে !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Driversalary::destroy($id);
        return back();
    }
}
