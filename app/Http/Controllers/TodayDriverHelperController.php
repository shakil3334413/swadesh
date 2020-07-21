<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\DriverHelper;
use App\Driver;
use App\Helper;
use App\Carinfo;

class TodayDriverHelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver=Driver::all();
        $helper=Helper::all();
        $carinfo=Carinfo::all();
        return view('backend.page.todaydriverhelper.index',compact('driver','helper','carinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentDate = Carbon::now()->toDateString();
        $driver=Driver::all();
        $helper=Helper::all();
        $carinfo=Carinfo::all();
        $driverhelper=DriverHelper::latest()->whereDate('created_at',$currentDate)->get();
        return view('backend.page.todaydriverhelper.info',compact('driverhelper','driver','helper','carinfo'));
    }
    public function info()
    {
        $alldrihel=DriverHelper::latest()->paginate(30);
        return view('backend.page.todaydriverhelper.all-info',compact('alldrihel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validate=Validator::make($request->all(),[
            'driver_name'=>'required',
            'helper_name'=>'required',
            'bus_number'=>'required',

        ]);
        if($Validate->fails()){
            return redirect()->back()->withErrors($Validate)->withinput();
        }

        $driverhelpers=new DriverHelper();
        $driverhelpers->driver_name=$request->driver_name;
        $driverhelpers->helper_name=$request->helper_name;
        $driverhelpers->bus_number=$request->bus_number;
        $driverhelpers->save();
        return redirect()->route('driverhelper.create')->with('success','আপনার ইনপরমেশন সফল ভাবে যুক্ত করা হয়েছে ');
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
        $driver=Driver::all();
        $helper=Helper::all();
        $carinfo=Carinfo::all();
        $driverhelper=DriverHelper::find($id);
        return view('backend.page.todaydriverhelper.edit',compact('driverhelper','driver','helper','carinfo'));
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
        $driverhelpers=DriverHelper::findOrFail($id);
        $driverhelpers->driver_name=$request->driver_name;
        $driverhelpers->helper_name=$request->helper_name;
        $driverhelpers->bus_number=$request->bus_number;
        $driverhelpers->save();
        return redirect()->route('driverhelper.create')->with('success','আপনার ইনপরমেশন সফল ভাবে পরিবর্তন   করা হয়েছে ');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DriverHelper::destroy($id);
        return back();
    }
}
