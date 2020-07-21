<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Carinfo;
use Illuminate\Http\Request;
use App\CarTrip;
use Carbon\Carbon;
class CarTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $counttrip=CarTrip::whereDate('created_at',$currentDate)->sum('trip_number');
        $cartrip=CarTrip::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(20);
        return view('backend.page.cartrip.index',compact('cartrip','counttrip'));
    }

    public function info()
    {
        $counttrip=CarTrip::sum('trip_number');
        $cartrip=CarTrip::latest()->paginate(25);
        return view('backend.page.cartrip.cartripall',compact('cartrip','counttrip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carnumber= Carinfo::all();
        $cartrip= CarTrip::all();
        return view('backend.page.cartrip.create',compact('cartrip','carnumber'));
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
            'trip_number' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $cartrip = new CarTrip();
        $cartrip->number=$request->number; 
        $cartrip->trip_number=$request->trip_number; 
        $cartrip->save();
        return redirect()->route('cartrip.index')->with('success','গাডির ট্রিপ লিস্টের তালিকা সফলভাবে যুক্ত করা হয়েছে !'); 
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
         $carnumber= Carinfo::all();
         $cartrip = CarTrip::find($id);
         return view('backend.page.cartrip.edit',compact('cartrip','carnumber'));
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
            'trip_number' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $cartrip = CarTrip::find($id);
        $cartrip->number=$request->number; 
        $cartrip->trip_number=$request->trip_number; 
        $cartrip->save();
        return redirect()->route('cartrip.index')->with('success','গাডির ট্রিপ লিস্টের তালিকা সফলভাবে পরিবর্তন করা হয়েছে !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CarTrip::destroy($id);
        return back();
    }
}
