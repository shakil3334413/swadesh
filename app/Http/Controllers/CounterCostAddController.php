<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Counter;
use App\CounterCostlist;
use App\CounterCostAdd;
class CounterCostAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate= Carbon::now()->toDateString();
        $counttaka=CounterCostAdd::whereDate('created_at',$currentDate)->sum('taka');
        $coutercostlists=CounterCostAdd::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(25);
         return view('backend.page.costadd.countercostadd-list',compact('coutercostlists','counttaka'));
    }
    public function countercostadd_all(){
        $counttaka=CounterCostAdd::sum('taka');
        $coutercostlists=CounterCostAdd::latest()
        ->paginate(25);
         return view('backend.page.costadd.countercost-all-info',compact('coutercostlists','counttaka'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $counter=Counter::all();
         $coutercostlistss=CounterCostlist::all();
         return view('backend.page.costadd.countercostadd',compact('counter','coutercostlistss'));
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
            'taka'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $countercost=new CounterCostAdd();
        $countercost->counter_name=$request->counter_name;
        $countercost->shift=$request->shift;
        $countercost->cost_name=$request->cost_name;
        $countercost->taka=$request->taka;
        $countercost->save();
        return redirect()->route('countercostadd.index')->with('success','আপনার ডাটা সফলভাবে যুক্ত করা হয়েছে');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CounterCostAdd  $counterCostAdd
     * @return \Illuminate\Http\Response
     */
    public function show(CounterCostAdd $counterCostAdd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CounterCostAdd  $counterCostAdd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counter=Counter::all();
        $coutercostlistss=CounterCostlist::all();
        $coutercostlists=CounterCostAdd::find($id);
        return view('backend.page.costadd.countercost-edit',compact('coutercostlists','counter','coutercostlistss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CounterCostAdd  $counterCostAdd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
            'taka'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $countercost=CounterCostAdd::find($id);
        $countercost->counter_name=$request->counter_name;
        $countercost->shift=$request->shift;
        $countercost->cost_name=$request->cost_name;
        $countercost->taka=$request->taka;
        $countercost->save();
        return redirect()->route('countercostadd.index')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CounterCostAdd  $counterCostAdd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CounterCostAdd::destroy($id);
        return back();
    }
}
