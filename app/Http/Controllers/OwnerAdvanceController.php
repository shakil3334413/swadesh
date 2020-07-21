<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\OwnerAdvance;
use Illuminate\Http\Request;
use App\Owner;
use App\Counter;
class OwnerAdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owneradvace=OwnerAdvance::latest()->paginate(20);
        return view('backend.page.owneradvance.index',compact('owneradvace'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counter=Counter::all();
        $owner=Owner::all();
        return view('backend.page.owneradvance.create',compact('owner','counter'));
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
         'taka' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $owneradvance = new OwnerAdvance();
        $owneradvance->owner_name=$request->owner_name;
        $owneradvance->phone=$request->phone;
        $owneradvance->counter=$request->counter;
        $owneradvance->taka=$request->taka;
        $owneradvance->save();
        return redirect()->route('owneradvance.index')->with('success','মালিকের টাকা পরিমাপ সফলভাবে যুক্ত করা হয়েছে !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OwnerAdvance  $ownerAdvance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OwnerAdvance  $ownerAdvance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counter=Counter::all();
        $owner=Owner::all();
        $owneradvace=OwnerAdvance::findOrfail($id);
        return view('backend.page.owneradvance.edit',compact('owner','owneradvace','counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OwnerAdvance  $ownerAdvance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=Validator::make($request->all(),[
         'taka' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $owneradvance =OwnerAdvance::findOrfail($id);
        $owneradvance->owner_name=$request->owner_name;
        $owneradvance->phone=$request->phone;
        $owneradvance->counter=$request->counter;
        $owneradvance->taka=$request->taka;
        $owneradvance->save();
        return redirect()->route('owneradvance.index')->with('success','মালিকের টাকা পরিমাপ সফলভাবে পরিবর্তন  করা হয়েছে !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OwnerAdvance  $ownerAdvance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OwnerAdvance::destroy($id);
        return back();

    }
}
