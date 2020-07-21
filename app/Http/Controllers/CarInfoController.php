<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Carinfo;

class CarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //
        $buses=[];
        $buses['buses']=Carinfo::latest()->paginate(20);
        return view('backend.page.car.car-info-list',$buses);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.car.index');
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
         'number' => 'required',
     ]);
    if($validate->fails()){
        return redirect()->back()->withErrors($validate)->withInput();
    }
    $bus = new Carinfo();
    $bus->model=$request->model;
    $bus->number=$request->number;
    $bus->save();
    return redirect()->route('bus.index')->with('success','গাডির ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');

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
        $bus= Carinfo::find($id);
        return view('backend.page.car.edit',compact('bus'));
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
         'number' => 'required',
         ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $bus =  Carinfo::findOrfail($id);
        $bus->model=$request->model;
        $bus->number=$request->number;
        $bus->save();
        return redirect()->route('bus.index')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus= Carinfo::find($id)->delete();
        return back();
    }
}
