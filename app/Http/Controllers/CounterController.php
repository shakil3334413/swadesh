<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Counter;
class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter=Counter::latest()->get();
        return view('backend.page.counter.counter-info',compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.page.counter.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate=Validator::make($request->all(),[
            'counter_name'=>'required'
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withinput();
        }

        $counter=new Counter();
        $counter->counter_name=$request->counter_name;
        $counter->save();
        return redirect()->route('counter.index')->with('success','আপনার ডাটা  সফল  ভাবে টেবিল এ যুক্ত করা হয়েছে ');
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
        $counter=Counter::findOrfail($id);
        return view('backend.page.counter.edit',compact('counter'));
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
            'counter_name'=>'required',
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withinput();
        }

        $counter=Counter::findOrfail($id);
        $counter->counter_name=$request->counter_name;
        $counter->save();
        return redirect()->route('counter.index')->with('success','কাউন্টার  ইনফরমেশনটি সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Counter::destroy($id);
        return back();
    }
}
