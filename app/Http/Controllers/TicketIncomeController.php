<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Counter;
use App\Carinfo;
use App\Ticketearn;
class TicketIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $counttaka=Ticketearn::whereDate('created_at',$currentDate)->sum('taka');
        $ticket_number=Ticketearn::whereDate('created_at',$currentDate)->sum('ticket_number');
        $ticketearn=Ticketearn::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(25);
        return view('backend.page.ticketearn.list',compact('ticketearn','counttaka','ticket_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $counter=Counter::all();
        $ticketearn=Ticketearn::all();
        return view('backend.page.ticketearn.index',compact('counter','carinfo','ticketearn'));
        
    }
     public function all_list()
    {
        $ticketearn=Ticketearn::latest()->paginate(30);
        $counttaka=Ticketearn::sum('taka');
        $ticket_number=Ticketearn::sum('ticket_number');
        return view('backend.page.ticketearn.all-list',compact('ticketearn','counttaka','ticket_number'));
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
            'ticket_number' => 'required',
            'price' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $ticketearn=new Ticketearn();
        $ticketearn->counter_name=$request->counter_name;
        $ticketearn->shift=$request->shift;
        $ticketearn->ticket_number=$request->ticket_number;
        $ticketearn->price=$request->price;
        $taka=$request->ticket_number*$request->price;
        $ticketearn->taka=$taka;
        $ticketearn->save();

        return redirect()->route('ticketearn.index')->with('success','টিকেট থেকে আয় সফলভাবে  যুক্ত করা হয়েছে !');

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
        $ticketearn=Ticketearn::findOrfail($id);
        return view('backend.page.ticketearn.edit',compact('ticketearn','counter','carinfo'));

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
            'ticket_number' => 'required',
            'price' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $ticketearn=Ticketearn::findOrfail($id);
        $ticketearn->counter_name=$request->counter_name;
        $ticketearn->shift=$request->shift;
        $ticketearn->ticket_number=$request->ticket_number;
        $ticketearn->price=$request->price;
        $taka=$request->ticket_number*$request->price;
        $ticketearn->taka=$taka;
        $ticketearn->save();
        return redirect()->route('ticketearn.index')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticketearn::destroy($id);
        return back();
    }
}
