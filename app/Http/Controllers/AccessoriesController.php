<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Counter;
use App\Carinfo;
use App\Accessories;
class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $counttaka=Accessories::whereDate('created_at',$currentDate)->sum('ticket_price');
        $accessoriesearn=Accessories::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(20);
        return view('backend.page.accessories.index',compact('accessoriesearn','counttaka','ticket_number'));
    }

    public function all_list(){
        $accessories=Accessories::latest()->paginate(30);
        $counttaka=Accessories::sum('ticket_price');
        return view('backend.page.accessories.info',compact('accessories','counttaka','ticket_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counter=Counter::all();
        $accessories=Accessories::all();
        return view('backend.page.accessories.create',compact('counter','carinfo','accessories'));
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
            'ticket_price' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $accessories=new Accessories();
        $accessories->counter_name=$request->counter_name;
        $accessories->shift=$request->shift;
        $accessories->ticket_price=$request->ticket_price;
        $accessories->save();

        return redirect()->route('accessories.index')->with('success','আপনার ডাটা সফলভাবে যুক্ত করা হয়েছে ');

        return redirect()->route('accessories.index')->with('success','মালামাল থেকে আয় সফলভাবে  যুক্ত করা হয়েছে!');
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
        //
        $counter=Counter::all();
        $accessories=Accessories::findOrfail($id);
        return view('backend.page.accessories.edit',compact('accessories','counter','carinfo'));
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
            'ticket_price' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $accessories=Accessories::findOrfail($id);
        $accessories->counter_name=$request->counter_name;
        $accessories->shift=$request->shift;
        $accessories->ticket_price=$request->ticket_price;
        $accessories->save();
        return redirect()->route('accessories.index')->with('success','আপনার ডাটা সফলভাবে পরিবর্তন করা হয়েছে!');

        return redirect()->route('accessories.index')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accessories::destroy($id);
        return back();
    }
}
