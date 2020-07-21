<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\CounterMan;
class CounterManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.page.counterman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countermans=[];
        $countermans['countermans']=CounterMan::latest()->paginate(20);
        return view('backend.page.counterman.info',$countermans);
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $counterman = new CounterMan();
        $counterman->name=$request->name;
        $counterman->phone=$request->phone;
        $counterman->national_id=$request->national_id;
        $counterman->address=$request->address;
        $counterman->save();
        return redirect()->route('counterman.create')->with('success','কাউন্টার ম্যান ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');
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
        $counterman=CounterMan::find($id);
        return view('backend.page.counterman.edit',compact('counterman'));
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $counterman =CounterMan::find($id);
        $counterman->name=$request->name;
        $counterman->phone=$request->phone;
        $counterman->national_id=$request->national_id;
        $counterman->address=$request->address;
        $counterman->save();
        return redirect()->route('counterman.create')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counterman=CounterMan::find($id)->delete();
        return back();
    }
}
