<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Redirect;
use Auth;
class FuturePlanController extends Controller
{




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function store(Request $R)
    {
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
    
     */
    protected function addPlan(Request $R)
    {
         $user = Auth::user();
    	 $this->validate($R, [
            'name' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string' ,'max:255'],
            'DevObj' => ['required', 'string', 'max:255'],
            'AreaDev' => ['string','max:255','nullable'],
            'purpose' => ['string','max:255','nullable'],
            'priority' => [ 'string', 'max:255','nullable'],
            'activity1' => [ 'string', 'max:255','nullable'],
            'success1' => [ 'string', 'max:255','nullable'],
            'activity2' => [ 'string', 'max:255','nullable'],
            'success2' => [ 'string', 'max:255','nullable'],
            'activity3' => [ 'string', 'max:255','nullable'],
            'success3' => [ 'string', 'max:255','nullable'],
            'activity4' => [ 'string', 'max:255','nullable'],
            'success4' => [ 'string', 'max:255','nullable'],
            'activity5' => [ 'string', 'max:255','nullable'],
            'success5' => [ 'string', 'max:255','nullable'],
            'date' => [ 'date', 'max:255','nullable'],
            'DiscussedDate' => [ 'date', 'max:255','nullable'],
            'DesiredScore' => [ 'integer', 'min:0','max:30','nullable'],
            'CurrentScore' => [ 'integer', 'min:0','max:30','nullable'],
           

        ]);
   
    	$name= $R->input('name');
    	$level= $R->input('level');
    	$DevObj= $R->input('DevObj');
    	$AreaDev= $R->input('AreaDev');
    	$purpose= $R->input('purpose');
    	$priority= $R->input('priority');
    	$activity1= $R->input('activity1');
    	$success1= $R->input('success1');
    	$activity2= $R->input('activity2');
    	$success2= $R->input('success2');
    	$activity3= $R->input('activity3');
    	$success3= $R->input('success3');
    	$activity4= $R->input('activity4');
    	$success4= $R->input('success4');
    	$activity5= $R->input('activity5');
    	$success5= $R->input('success5');
    	$date= $R->input('date');
    	$DiscussedDate= $R->input('DiscussedDate');
        $DesiredScore=$R->input('DesiredScore');
        $CurrentScore=$R->input('CurrentScore');

    	$data= array("CurrentScore"=>$CurrentScore,"DesiredScore"=>$DesiredScore,"AreaDev"=>$AreaDev,"userId"=>$user->id,"name"=>$name,"level"=>$level,"DevObj"=>$DevObj,"purpose"=>$purpose,"priority"=>$priority,"activity1"=>$activity1,"success1"=>$success1,"activity2"=>$activity2,"success2"=>$success2,"activity3"=>$activity3,"success3"=>$success3,"activity4"=>$activity4,"success4"=>$success4,"activity5"=>$activity5,"success5"=>$success5,"date"=>$date,"DiscussedDate"=>$DiscussedDate);
        	 $message="Thanks, your Future Plan is Submitted Successfully!";      

           
        DB::table('future_plan')->insert($data);
        $FuturePlanData = DB::table('future_plan')->where('userId', $user->id)->get(); 

        

        return view('future_plan',['FuturePlanData'=>$FuturePlanData])->with('message', $message);
  
      
    }


}
