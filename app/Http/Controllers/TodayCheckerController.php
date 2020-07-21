<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\TodayCheck;
use App\Checker;
use App\Checkpost;
use App\Carinfo;
class TodayCheckerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $checker=Checker::all();
        $checkpost=Checkpost::all();
        $carinfo=Carinfo::all();
        return view('backend.page.todaychecker.index',compact('checker','checkpost','carinfo'));
    }
    public function info()
    {
        $allcheck= TodayCheck::latest()->paginate(25);
        return view('backend.page.todaychecker.all-info',compact('allcheck'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentDate = Carbon::now()->toDateString();

        $todaycheck=TodayCheck::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(20);
        return view('backend.page.todaychecker.info',compact('todaycheck'));
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
            'checker_name'=>'required',
            'checkpost_name'=>'required',
            'bus_number'=>'required',

        ]);
        if($Validate->fails()){
            return redirect()->back()->withErrors($Validate)->withinput();
        }

        $checkpost=new TodayCheck();
        $checkpost->checker_name=$request->checker_name;
        $checkpost->checkpost_name=$request->checkpost_name;
        $checkpost->bus_number=$request->bus_number;
        $checkpost->save();
        return redirect()->route('todaycheck.create')->with('success','আজকের চেকের  ইনফরমেশন  সফল ভাবে যুক্ত করা হয়েছে ');
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
        $checker=Checker::all();
        $checkpost=Checkpost::all();
        $carinfo=Carinfo::all();

        $todaycheck=TodayCheck::find($id);
        return view('backend.page.todaychecker.edit',compact('todaycheck','checker','checkpost','carinfo'));
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
        //
         $checkpost=TodayCheck::findOrfail($id);
        $checkpost->checker_name=$request->checker_name;
        $checkpost->checkpost_name=$request->checkpost_name;
        $checkpost->bus_number=$request->bus_number;
        $checkpost->save();
        return redirect()->route('todaycheck.create')->with('success','আপনার ইনপরমেশন সফল ভাবে পরিবর্তন   করা হয়েছে ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         TodayCheck::destroy($id);
        return back();
    }
}
