<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Driver;
class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.page.driver.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers=[];
        $drivers['drivers']=Driver::all();
        return view('backend.page.driver.driver-info',$drivers);
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
         'name' => 'required',
         'phone' => 'required',
         'driving_liceing' => 'required',
         'address' => 'required',
         ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $driver = new Driver();
        $driver->name=$request->name;
        $driver->phone=$request->phone;
        $driver->driving_liceing=$request->driving_liceing;
        $driver->national_id=$request->national_id;
        $driver->address=$request->address;
        $driver->save();
        return redirect()->route('driver.create')->with('success','ড্রাইভার ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');
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
        $driver= Driver::find($id);
        return view('backend.page.driver.edit',compact('driver'));
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
         'name' => 'required',
         'phone' => 'required',
         'driving_liceing' => 'required',
         'address' => 'required',
         ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $driver = Driver::find($id);
        $driver->name=$request->name;
        $driver->phone=$request->phone;
        $driver->driving_liceing=$request->driving_liceing;
        $driver->national_id=$request->national_id;
        $driver->address=$request->address;
        $driver->save();
        return redirect()->route('driver.create')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver= Driver::find($id)->delete();
        return back();
    }
}
