<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Linemansalary;
use App\Checker;
use App\Counter;
use Carbon\Carbon;
class LinemanSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate= Carbon::now()->toDateString();
        $counttaka=Linemansalary::whereDate('created_at',$currentDate)->sum('taka');
        $linemansalary=Linemansalary::latest()
        ->whereDate('created_at',$currentDate)
        ->paginate(15);
        return view('backend.page.allsalary.linemansalary.index',compact('linemansalary','counttaka'));
    }

    public function all_info()
    {
        $linemansalary= Linemansalary::latest()->paginate(25);
        $counttaka=Linemansalary::sum('taka');
        return view('backend.page.allsalary.linemansalary.all-info',compact('linemansalary','counttaka'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $linemansalary=Linemansalary::all();
        $checker=Checker::all();
        $counter=Counter::all();
        return view('backend.page.allsalary.linemansalary.create',compact('linemansalary','checker','counter'));
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
            'taka' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $linemansalary = new Linemansalary();
        $linemansalary->name=$request->name; 
        $linemansalary->counter_name=$request->counter_name; 
        $linemansalary->shift=$request->shift;
        $linemansalary->taka=$request->taka;  
        $linemansalary->save();
        return redirect()->route('linemansalary.index')->with('success','চেকারের বেতন সফলভাবে যুক্ত করা হয়েছে !'); 
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
        $checker=Checker::all();
        $counter=Counter::all();
        $linemansalary = Linemansalary::find($id);
        return view('backend.page.allsalary.linemansalary.edit',compact('linemansalary','checker','counter'));
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
            'taka' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $linemansalary = Linemansalary::find($id);
        $linemansalary->name=$request->name; 
        $linemansalary->counter_name=$request->counter_name;
        $linemansalary->shift=$request->shift;  
        $linemansalary->taka=$request->taka; 
        $linemansalary->save();
        return redirect()->route('linemansalary.index')->with('success','আপনার ইনফরমেশন সফলভাবে পরিবর্তন করা হয়েছে!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Linemansalary::destroy($id);
        return back();
    }
}
