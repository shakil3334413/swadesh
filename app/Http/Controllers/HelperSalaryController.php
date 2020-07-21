<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helpersalary;
use App\Helper;
use App\Counter;
use Carbon\Carbon;
class HelperSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate= Carbon::now()->toDateString();
        $counttaka=Helpersalary::whereDate('created_at',$currentDate)->sum('taka');
        $helpersalary=Helpersalary::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(15);
        return view('backend.page.allsalary.helpersalary.index',compact('helpersalary','counttaka'));
    }

    public function all_info()
    {
        $helpersalary= Helpersalary::latest()->paginate(25);
        $counttaka=Helpersalary::sum('taka');
        return view('backend.page.allsalary.helpersalary.all-info',compact('helpersalary','counttaka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $helpersalary=Helpersalary::all();
        $counter=Counter::all();
        $helper=Helper::all();
        return view('backend.page.allsalary.helpersalary.create',compact('helpersalary','counter','helper'));
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
        $helpersalary = new Helpersalary();
        $helpersalary->name=$request->name; 
        $helpersalary->counter_name=$request->counter_name;
        $helpersalary->shift=$request->shift;  
        $helpersalary->taka=$request->taka; 
        $helpersalary->save();
        return redirect()->route('helpersalary.index')->with('success','ড্রাইভারের বেতন সফলভাবে যুক্ত করা হয়েছে !'); 
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
        $counter=Counter::all();
        $helper=Helper::all();
        $helpersalary = Helpersalary::find($id);
        return view('backend.page.allsalary.helpersalary.edit',compact('helpersalary','helper','counter'));
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
        $helpersalary = Helpersalary::find($id);
        $helpersalary->name=$request->name; 
        $helpersalary->counter_name=$request->counter_name;
        $helpersalary->shift=$request->shift;  
        $helpersalary->taka=$request->taka; 
        $helpersalary->save();
        return redirect()->route('helpersalary.index')->with('success','ড্রাইভারের বেতন সফলভাবে পরিবর্তন   করা হয়েছে !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Helpersalary::destroy($id);
        return back();
    }
}
