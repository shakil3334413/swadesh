<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.page.owner.index');
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner=[];
        $owner['owner']=owner::latest()->paginate(10);
         return view('backend.page.owner.all-information',$owner);
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
         'phone' => 'required|unique:owners',
         'address'=>'required|max:200',
         'image' => 'image|mimes:jpeg,png,jpg,gif,svg,tmp|max:2048',
     ]);
    if($validate->fails()){
        return redirect()->back()->withErrors($validate)->withInput();
     }
     $image = $request->file('image');
     $slug = str_slug($request->name);
     if (isset($image))
       {
           $currentDate = Carbon::now()->toDateString();
           $imagename =$slug.'-'.$currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
           if (!file_exists('owners'))
           {
               mkdir('owners', 0777 , true);
           }
           $image->move('owners',$imagename);
       }else {
           $imagename = 'dafault.png';
       }
     $owner =new Owner();
     $owner->name=$request->name;
     $owner->phone=$request->phone;
     $owner->bank_number=$request->bank_number;
     $owner->national_id=$request->national_id;
     $owner->address=$request->address;
     $owner->image=$imagename;
     $owner->save();
    return redirect()->route('owner.create')->with('success','মালিকের ইনফরমেশন সফলভাবে যুক্ত করা হয়েছে!');
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
         $owners=Owner::findOrfail($id);
        return view('backend.page.owner.edite',compact('owners'));
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
         'address'=>'required|max:200',
         'image' => 'mimes:jpeg,png,jpg,gif',
     ]);

    if($validate->fails()){
        return redirect()->back()->withErrors($validate)->withInput();
     }
     $owner =Owner::findOrfail($id);
     $slug = str_slug($request->name);
     if (isset($image))
       {
           $currentDate = Carbon::now()->toDateString();
           $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
           if (!file_exists('owners'))
           {
               mkdir('owners',0777,true);
           }
           unlink('owners/'.$owner->image);
           $image->move('owners',$imagename);
       }else{
           $imagename = $owner->image;
       }
     
     $owner->name=$request->name;
     $owner->phone=$request->phone;
     $owner->bank_number=$request->bank_number;
     $owner->national_id=$request->national_id;
     $owner->address=$request->address;
     $owner->image=$imagename;
     $owner->save();
     return redirect()->route('owner.create')->with('success','মালিকের ইনফরমেশন সফলভাবে পরিবর্তন   করা হয়েছে!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $owner = Owner::find($id);
        if (file_exists('owners/'.$owner->image)) {
            unlink('owners/'.$owner->image);
        }
        $owner->delete();
       return back();
    }
}
