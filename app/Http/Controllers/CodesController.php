<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services; 
use App\User; 
use App\Leadsrc as Src;
use App\Codes as Codx; 
use Auth;
use DB;

class CodesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
	protected static $arr = [];
	protected static $info = [];
	
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	
	 static public function GetmanageAndserviceName($srvID)   {
		 
         $usrID=Services::where('id', $srvID) 
               ->orderBy('id', 'desc')
               ->get();               		
	    $ID = $usrID[0]->user_id;
		$serv_name = $usrID[0]->service_name;
		self::$arr ["serviceName"]=$serv_name;
		 
		 $usrName=User::where('id', $ID) 
               ->orderBy('id', 'desc')
               ->get();  
		 $user_name = $usrName[0]->name;
		 self::$arr  ["UserName"]=$user_name;
		 
		 return self::$arr;
		 
       }
	
	 static public function GetleadsrcName($srcID)   {
		 
         $srID=Src::where('id', $srcID) 
               ->orderBy('id', 'desc')
               ->get();               		
		 $src_name = $srID[0]->name;
		 
		 return $src_name;
	 }
	
	static public function GetrandCode()   {
		
		$rondom = mt_rand(1,9);
		$rand_code = "000".$rondom;
		
		return $rand_code;
	}
	
	static public function GetshortCode($str)   {
		$shortcode ="";
		$chop_str = explode(" ",$str);
		
		foreach ($chop_str as $chop) :
		   $shortcode .= $chop[0];
		endforeach;
		
		return strtoupper($shortcode);
	}
	
	public function GetCode (Request $request ) {
		
		 $fields = $request->all();
		
		 $serv_id = $fields['services'];
		 $lead_id = $fields['leadsrc'];
		
		$getNames = self::GetmanageAndserviceName($serv_id);
		
		 $service_name = $getNames["serviceName"];
		 $manage_name = $getNames["UserName"];
		
		 $srcName = self::GetleadsrcName($lead_id);
		
		 $get_rand = self::GetrandCode();
		 $log_user = Auth::user()->name;
		
		 self::$info["UserName"]=$manage_name;
		 self::$info["serviceName"]=$service_name;
		 self::$info["randCode"]=$get_rand;
		 self::$info["leadSrc"]=$srcName;
		 self::$info["loginUser"]=$log_user;
		
		$generated_code = self::GetshortCode($manage_name) ." ".self::GetshortCode($service_name)."-".$get_rand."-".self::GetshortCode($srcName)." ".self::GetshortCode($log_user);
		
	    $cd = new Codx;
        $cd->code = $generated_code;
        $cd->code_info = serialize(self::$info);
        $cd->save();
		
		return redirect ('/') -> with('code' , $generated_code);
	}
	
	public function ViewCode () {
		
		 $codes=Codx::all();     
		 return view('codes',['codes' => $codes]);
	}
   
}
