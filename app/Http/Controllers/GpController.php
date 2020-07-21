<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Gpcost;
use App\Carinfo;

class GpController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $counttaka=Gpcost::whereDate('created_at',$currentDate)->sum('taka');
        $gpcost=Gpcost::latest()
        ->whereDate('created_at',$currentDate)->paginate(20);
        return view('backend.page.gpcost.index',compact('gpcost','counttaka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carnumber=Carinfo::all();
        return view('backend.page.gpcost.create',compact('carnumber'));
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
        $gpcost= new Gpcost();
        $gpcost->number=$request->number;
        $gpcost->taka=$request->taka;
        $gpcost->save();
        return redirect()->route('gpcost.index')->with('success','আপনার ডাটা সফলভাবে যুক্ত করা হয়েছে');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $currentDate = Carbon::now()->toDateString();
        $counttaka=Gpcost::sum('taka');
        $gpcost=Gpcost::latest()->
        paginate(30);
        return view('backend.page.gpcost.gpcost-all',compact('gpcost','counttaka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gpcosts=Gpcost::findOrfail($id);
        $carnumber=Carinfo::all();
        return view('backend.page.gpcost.edit',compact('carnumber','gpcosts'));
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
            'taka'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $gpcost=Gpcost::findOrfail($id);
        $gpcost->number=$request->number;
        $gpcost->taka=$request->taka;
        $gpcost->save();
        return redirect()->route('gpcost.index')->with('success','আপনার ডাটা সফলভাবে পরিবর্তন  করা হয়েছে');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gpcost::destroy($id);
        return back();
    }
}
