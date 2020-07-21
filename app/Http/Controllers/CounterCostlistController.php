<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\CounterCostlist;
class CounterCostlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countercost=CounterCostlist::latest()->get();
        return view('backend.page.costlist.countercostlist',compact('countercost'));
    }

    /**
     *Show the form for creating a new resource.
     *
     *@return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.page.costlist.countercostcreat');
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
            'counter_cost'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $countercost=new CounterCostlist();
        $countercost->counter_cost=$request->counter_cost;
        $countercost->save();
        return redirect()->route('countercostlist.index')->with('success','আপনার ডাটা সফলভাবে যুক্ত করা হয়েছে');
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
        $countercost=CounterCostlist::findOrfail($id);
        return view('backend.page.costlist.countercostedit',compact('countercost'));
        
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
         $validate=Validator::make($request->all(),[
            'counter_cost'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $countercost=CounterCostlist::findOrfail($id);
        $countercost->counter_cost=$request->counter_cost;
        $countercost->save();
        return redirect()->route('countercostlist.index')->with('success','আপনার ডাটা সফলভাবে পরিবর্তন  করা হয়েছে');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CounterCostlist::destroy($id);
        return back();
    }
}
