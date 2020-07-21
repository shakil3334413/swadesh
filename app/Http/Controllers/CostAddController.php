<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use App\CostList;
use App\Costadd;
use App\Carinfo;
class CostAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $counttaka=Costadd::whereDate('created_at',$currentDate)->sum('taka');
        $costadd=Costadd::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(20);
        return view('backend.page.costadd.info',compact('costadd','counttaka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costlist=CostList::all();
        $carnumber=Carinfo::all();
        return view('backend.page.costadd.create',compact('costlist','carnumber'));
    }
    public function all_info(){
        $counttaka=Costadd::sum('taka');
        $costadd=Costadd::latest()
        ->paginate(30);
        return view('backend.page.costadd.info',compact('costadd','counttaka'));
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
            'taka'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $costadd=new Costadd();
        $costadd->number=$request->number;
        $costadd->cost_name=$request->cost_name;
        $costadd->taka=$request->taka;
        $costadd->save();
        return redirect()->route('costadd.index')->with('success','আপনার ডাটা সফলভাবে যুক্ত করা হয়েছে');

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
        $costlist=CostList::all();
        $carnumber=Carinfo::all();
        $costadd=Costadd::find($id);
        return view('backend.page.costadd.edit',compact('costadd','costlist','carnumber'));
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
            'taka'=>'required'
        ]);
        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withinput();
        }
        $costadd=Costadd::findOrfail($id);
        $costadd->number=$request->number;
        $costadd->cost_name=$request->cost_name;
        $costadd->taka=$request->taka;
        $costadd->save();
        return redirect()->route('costadd.index')->with('success','আপনার ইনফরমেশনটি সফলভাবে  পরিবর্তন করা হয়েছে');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Costadd::destroy($id);
        return back();
    }
}
