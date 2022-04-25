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
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //
	public function Update_Profile_Page()
	{

		$user = Auth::user();
            if(Auth::check()){
            return view('UpdateProfile');
            }else{
                $warningM="To view your profile you have to login!";
            return redirect('/login')->with('warningM', $warningM);            
        }
            
	}
    public function UpdateProfile(Request $R)
    {
  		 $user = Auth::user();
    	 $this->validate($R, [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'confirmed'],
            'password' => [ 'string', 'min:8', 'confirmed','nullable'],
            'lname' => [ 'string', 'max:255'],
            'employer' => [ 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'job_level' => ['required', 'string', 'max:255'],
            'purposes' => ['required', 'string', 'max:255'],

        ]);




 			 $fname = $R->input('fname');
             $email = $R->input('email');
             $lname = $R->input('lname');
             $employer = $R->input('employer');
             $age = $R->input('age');
             $gender = $R->input('gender');
             $sector = $R->input('sector');
             $education = $R->input('education');
             $job_level = $R->input('job_level');
             $purposes = $R->input('purposes');
             

             if($R->input('password')==null){
             
         		
    	$data= array("fname"=>$fname,"email"=>$email,"lname"=>$lname,"employer"=>$employer,"age"=>$age,"gender"=>$gender,"sector"=>$sector,"education"=>$education,"job_level"=>$job_level,"purposes"=>$purposes);
    		}
         		else{
		$password = Hash::make($R->input('password'));
    	$data= array("fname"=>$fname,"email"=>$email,"lname"=>$lname,"employer"=>$employer,"age"=>$age,"gender"=>$gender,"sector"=>$sector,"education"=>$education,"job_level"=>$job_level,"purposes"=>$purposes,"password"=>$password);
         		}

        	 $message="Thanks, your Profile Data is Submitted Successfully!";      

        	 	DB::table('users')->where('id', $user->id)->update($data);
          
 		if(Auth::check()){
            return Redirect::route('profile')->with('SuccessMessage', $message);
            }else{
                $warningM="To view your profile you have to login!";
            return redirect('/login')->with('warningM', $warningM);            
        }

    }
}
