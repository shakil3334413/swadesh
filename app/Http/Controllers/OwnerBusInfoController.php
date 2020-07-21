<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Carinfo;
use App\Owner;
use App\OwnerBus;
use Illuminate\Support\Facades\Validator;
class OwnerBusInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ownerbus=[];
        $Ownerbus['buses']=OwnerBus::latest()
        ->paginate(20);
        return view('backend.page.ownerbusinfo.owner-bus-info',$Ownerbus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners=[];
        $owners['owners']=Owner::all();
        $buses=[];
        $buses['buses']=Carinfo::all();
        return view('backend.page.ownerbusinfo.index',$buses,$owners);
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
         'owner_name' => 'required',
         'bus_number' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $ownerbus = new OwnerBus();
        $ownerbus->owner_id=$request->owner_name;
        $ownerbus->bus_number=$request->bus_number;
        $ownerbus->save();
        return redirect()->route('ownerbus.index')->with('success','মালিকের গাড়ী ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');
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

        $owners=Owner::all();
        $buses=Carinfo::all();
        $ownerbus=OwnerBus::find($id);
        return view('backend.page.ownerbusinfo.edit',compact('ownerbus','owners','buses'));
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
         'owner_name' => 'required',
         'bus_number' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $ownerbus =  OwnerBus::findOrfail($id);
        $ownerbus->owner_id=$request->owner_name;
        $ownerbus->bus_number=$request->bus_number;
        $ownerbus->save();
        return redirect()->route('ownerbus.index')->with('success','মালিকের গাড়ীর ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OwnerBus::destroy($id);
        return back();
    }
}
