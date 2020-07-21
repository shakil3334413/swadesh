<?php

namespace App\Http\Controllers\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Driver;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\DriverMsg;
class DriverMessage extends Controller
{
    public function index()
    {
        $driver=Driver::all();
        return view('backend.page.allmessage.drivermessage',compact('driver'));
    }
	public function info()
	{
		$drivermsg=DriverMsg::latest()->paginate(20);
		return view('backend.page.allmessage.drivermsginfo',compact('drivermsg'));
	}
    private $RESPONSE_TYPE = 'json';
	private $API_KEY = 'R60005695c3c7c8f026203.30160362';
    private $sender='8801847169884';
	// private $API_KEY = '4451561650896341561650896';
 	// private $sender='8801844532630';
    private $text = 'text';
    
    public function store(Request $request)
	{
		$request->validate([
			'message' => 'required',
		]);
		$message=$request->message;
		$phone_number=$request->send;
		$this->initiateSmsGuzzle($phone_number, $message);
		// return redirect()->back()->with('success','Message Sent success');
		return redirect()->route('driverinfo')->with('success','ড্রাইভারের কাছে মেসেজ সফলভাবে পাঠানো হয়েছে');
	}

	public function initiateSmsGuzzle($phone_number, $message)
	{
		// dd($sender,$phone_number,$message);
		$client = new Client();
		foreach($phone_number as $cellNo){
			$response = $client->post('http://bangladeshsms.com/smsapi?', [
			// $response = $client->post('http://sms.iglweb.com/api/v1/send?', [
				//'verify'    =>  false,
				'form_params' => [
					'api_key' => $this->API_KEY,
					//'password' => $this->SMS_PASSWORD,
					'senderid' => $this->sender,
					'msg' =>   $message,
					'contacts' => "88".$cellNo ,
					"type"=> $this->text, 

				],
			]);

		$response = json_decode($response->getBody(), true);
		$history=new DriverMsg;
		$history->phone=$cellNo;
		$history->message=$message;
		$history->save();
		}
	}
}
