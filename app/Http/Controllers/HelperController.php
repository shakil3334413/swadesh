<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helper;
class HelperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.page.helper.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $helpers=[];
        $helpers['helpers']=Helper::latest()->paginate(20);
        return view('backend.page.helper.helper-info',$helpers);
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
        $helper= new Helper();
        $helper->name=$request->name;
        $helper->phone=$request->phone;
        $helper->national_id=$request->national_id;
        $helper->address=$request->address;
        $helper->save();
        return redirect()->route('helper.create')->with('success','হেল্পার ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $helper= Helper::find($id);
        return view('backend.page.helper.edit',compact('helper'));
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
        $helper= Helper::find($id);
        $helper->name=$request->name;
        $helper->phone=$request->phone;
        $helper->national_id=$request->national_id;
        $helper->address=$request->address;
        $helper->save();
        return redirect()->route('helper.create')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $helper= Helper::find($id)->delete();
        return back();
    }
}
