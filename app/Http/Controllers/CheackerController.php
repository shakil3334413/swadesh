<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Checker;
class CheackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.page.checker.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checkers=[];
        $checkers['checkers']= Checker::latest()->paginate(20);
        return view('backend.page.checker.info',$checkers);
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
        $checker= new Checker();
        $checker->name=$request->name;
        $checker->phone=$request->phone;
        $checker->national_id=$request->national_id;
        $checker->address=$request->address;
        $checker->save();
        return redirect()->route('checker.create')->with('success','চেকারের ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');
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
        $checker= Checker::find($id);
        return view('backend.page.checker.edit',compact('checker'));
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
        $checker= Checker::find($id);
        $checker->name=$request->name;
        $checker->phone=$request->phone;
        $checker->national_id=$request->national_id;
        $checker->address=$request->address;
        $checker->save();
        return redirect()->route('checker.create')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checker= Checker::find($id)->delete();
        return back();
    }
}
