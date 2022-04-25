<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Redirect;
use \App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
         $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
 $user = Auth::user();

        if (DB::table('questions')->where('userId', $user->id)->get()->count()>0) {
            $message=__('msg.SurveyAlreadyDone');
            return Redirect::route('result')->with('message', $message);
          }else{
            return view('main-after-login');
          }
              }

 public function profile()
    {
$user = Auth::user();
            if(Auth::check()){
            return view('profile');
            }else{
                $warningM="To view your profile you have to login!";
            return redirect('/login')->with('warningM', $warningM);            
        }
            
              }


   public function start_exam()
    {
 $user = Auth::user();
            if(Auth::check()){
            return view('main-after-login');
            }else{
                $warningM="To start the exam you have to login!";
            return redirect('/login')->with('warningM', $warningM);            
        }
              }
    public function start_now()
    {

 $user = Auth::user();

        if (DB::table('questions')->where('userId', $user->id)->get()->count()>0) {
            $message=__('msg.SurveyAlreadyDone');
            return Redirect::route('result')->with('message', $message);
          }else{
            return view('survey');
          }
            
    }
    public function TermCondition()
    {
            return view('privacyAndPolicy');
    }

    public function survey()
    {
 $user = Auth::user();

        if (DB::table('questions')->where('userId', $user->id)->get()->count()>0) {
            $message=__('msg.SurveyAlreadyDone');
            return Redirect::route('result')->with('message', $message);
          }else{
            return view('main-after-login');
          }
    }
   
  
    public function goToResult()
    {    $user = Auth::user();

if (DB::table('questions')->where('userId', $user->id)->get()->count()<=0) {
            return Redirect::route('survey');
          }else{

         $questions = DB::table('questions')->where('userId', $user->id)->get();
        // $Allquestions = DB::table('questions')->get();
        // $userCount= DB::table('questions')->get()->count();
         $Allquestions = DB::table('questions')->join('users','questions.userId','=','users.id')
                    ->where(['employer'=>$user->employer])->get();
         $userCount= DB::table('questions')->join('users','questions.userId','=','users.id')
                    ->where(['employer'=>$user->employer])->get()->count();

       $F=$E=$B=$C=$S=0;
       $AF=$AE=$AB=$AC=$AS=0;
foreach ($questions as $key => $value) {
    $F+=$value->Q1;
    $F+=$value->Q6;
    $F+=$value->Q11;
    $F+=$value->Q16;
    $F+=$value->Q21;
    $F+=$value->Q26;   
     $F+=$value->Q31;
    $F+=$value->Q36;
    $F+=$value->Q41;
    $F+=$value->Q46;
    # code...
    $E+=$value->Q2;
    $E+=$value->Q7;
    $E+=$value->Q12;
    $E+=$value->Q17;
    $E+=$value->Q22;
    $E+=$value->Q27;   
    $E+=$value->Q32;
    $E+=$value->Q37;
    $E+=$value->Q42;
    $E+=$value->Q47;
 # code...
    $B+=$value->Q3;
    $B+=$value->Q8;
    $B+=$value->Q13;
    $B+=$value->Q18;
    $B+=$value->Q23;
    $B+=$value->Q28;   
    $B+=$value->Q33;
    $B+=$value->Q38;
    $B+=$value->Q43;
    $B+=$value->Q48;
 # code...
    $C+=$value->Q4;
    $C+=$value->Q9;
    $C+=$value->Q14;
    $C+=$value->Q19;
    $C+=$value->Q24;
    $C+=$value->Q29;   
    $C+=$value->Q34;
    $C+=$value->Q39;
    $C+=$value->Q44;
    $C+=$value->Q49;
     # code...
    $S+=$value->Q5;
    $S+=$value->Q10;
    $S+=$value->Q15;
    $S+=$value->Q20;
    $S+=$value->Q25;
    $S+=$value->Q30;   
    $S+=$value->Q35;
    $S+=$value->Q40;
    $S+=$value->Q45;
    $S+=$value->Q50;

}foreach ($Allquestions as $key => $value) {
    $AF+=$value->Q1;
    $AF+=$value->Q6;
    $AF+=$value->Q11;
    $AF+=$value->Q16;
    $AF+=$value->Q21;
    $AF+=$value->Q26;   
    $AF+=$value->Q31;
    $AF+=$value->Q36;
    $AF+=$value->Q41;
    $AF+=$value->Q46;
    # code...
    $AE+=$value->Q2;
    $AE+=$value->Q7;
    $AE+=$value->Q12;
    $AE+=$value->Q17;
    $AE+=$value->Q22;
    $AE+=$value->Q27;   
    $AE+=$value->Q32;
    $AE+=$value->Q37;
    $AE+=$value->Q42;
    $AE+=$value->Q47;
 # code...
    $AB+=$value->Q3;
    $AB+=$value->Q8;
    $AB+=$value->Q13;
    $AB+=$value->Q18;
    $AB+=$value->Q23;
    $AB+=$value->Q28;   
    $AB+=$value->Q33;
    $AB+=$value->Q38;
    $AB+=$value->Q43;
    $AB+=$value->Q48;
 # code...
    $AC+=$value->Q4;
    $AC+=$value->Q9;
    $AC+=$value->Q14;
    $AC+=$value->Q19;
    $AC+=$value->Q24;
    $AC+=$value->Q29;   
    $AC+=$value->Q34;
    $AC+=$value->Q39;
    $AC+=$value->Q44;
    $AC+=$value->Q49;
     # code...
    $AS+=$value->Q5;
    $AS+=$value->Q10;
    $AS+=$value->Q15;
    $AS+=$value->Q20;
    $AS+=$value->Q25;
    $AS+=$value->Q30;   
    $AS+=$value->Q35;
    $AS+=$value->Q40;
    $AS+=$value->Q45;
    $AS+=$value->Q50;

}
//tow digits after the comma
 $F=number_format((float)$F, 2, '.', '');
 $E=number_format((float)$E, 2, '.', '');
 $B=number_format((float)$B, 2, '.', '');
 $C=number_format((float)$C, 2, '.', '');
 $S=number_format((float)$S, 2, '.', '');

//tow digits after the comma
        return view('result',['F' => $F,'E'=>$E,'B' => $B,'C'=>$C,'S' => $S,
                            'AF' => number_format((float)($AF/$userCount), 2, '.', ''),
                            'AE'=>number_format((float)($AE/$userCount), 2, '.', ''),
                            'AB' =>number_format((float)($AB/$userCount), 2, '.', '') ,
                            'AC'=>number_format((float)($AC/$userCount), 2, '.', ''),
                            'AS' =>number_format((float)($AS/$userCount), 2, '.', '') ]);
    }
}

       public function InsertingQ(Request $R)
    {
    $user = Auth::user();


        $Q1= $R->input('Q1');
        $Q2= $R->input('Q2');
        $Q3= $R->input('Q3');
        $Q4= $R->input('Q4');
        $Q5= $R->input('Q5');
        $Q6= $R->input('Q6');
        $Q7= $R->input('Q7');
        $Q8= $R->input('Q8');
        $Q9= $R->input('Q9');
        $Q10= $R->input('Q10');
        $Q11= $R->input('Q11');
        $Q12= $R->input('Q12');
        $Q13= $R->input('Q13');
        $Q14= $R->input('Q14');
        $Q15= $R->input('Q15');
        $Q16= $R->input('Q16');
        $Q17= $R->input('Q17');
        $Q18= $R->input('Q18');
        $Q19= $R->input('Q19');
        $Q20= $R->input('Q20');
        $Q21= $R->input('Q21');
        $Q22= $R->input('Q22');
        $Q23= $R->input('Q23');
        $Q24= $R->input('Q24');
        $Q25= $R->input('Q25');
        $Q26= $R->input('Q26');
        $Q27= $R->input('Q27');
        $Q28= $R->input('Q28');
        $Q29= $R->input('Q29');
        $Q30= $R->input('Q30');
         $Q31= $R->input('Q31');
        $Q32= $R->input('Q32');
        $Q33= $R->input('Q33');
        $Q34= $R->input('Q34');
        $Q35= $R->input('Q35');
        $Q36= $R->input('Q36');
        $Q37= $R->input('Q37');
        $Q38= $R->input('Q38');
        $Q39= $R->input('Q39');
        $Q40= $R->input('Q40');
        $Q41= $R->input('Q41');
        $Q42= $R->input('Q42');
        $Q43= $R->input('Q43');
        $Q44= $R->input('Q44');
        $Q45= $R->input('Q45');
        $Q46= $R->input('Q46');
        $Q47= $R->input('Q47');
        $Q48= $R->input('Q48');
        $Q49= $R->input('Q49');
        $Q50= $R->input('Q50');

$data= array("Q1"=>$Q1,"Q2"=>$Q2,"Q3"=>$Q3,"Q4"=>$Q4,"Q5"=>$Q5,"Q6"=>$Q6,"Q7"=>$Q7,"Q8"=>$Q8,"Q9"=>$Q9,"Q10"=>$Q10,
    "Q11"=>$Q11,"Q12"=>$Q12,"Q13"=>$Q13,"Q14"=>$Q14,"Q15"=>$Q15,"Q16"=>$Q16,"Q17"=>$Q17,"Q18"=>$Q18,"Q19"=>$Q19,"Q20"=>$Q20,
    "Q21"=>$Q21,"Q22"=>$Q22,"Q23"=>$Q23,"Q24"=>$Q24,"Q25"=>$Q25,"Q26"=>$Q26,"Q27"=>$Q27,"Q28"=>$Q28,"Q29"=>$Q29,"Q30"=>$Q30,
    "Q31"=>$Q31,"Q32"=>$Q32,"Q33"=>$Q33,"Q34"=>$Q34,"Q35"=>$Q35,"Q36"=>$Q36,"Q37"=>$Q37,"Q38"=>$Q38,"Q39"=>$Q39,"Q40"=>$Q40,
    "Q41"=>$Q41,"Q42"=>$Q42,"Q43"=>$Q43,"Q44"=>$Q44,"Q45"=>$Q45,"Q46"=>$Q46,"Q47"=>$Q47,"Q48"=>$Q48,"Q49"=>$Q49,"Q50"=>$Q50, "userId"=>$user->id);
        
        DB::table('questions')->insert($data);

            $message=__('result.SuccessSurveyResult');      
              return Redirect::route('result')->with('message', $message);
    }

      public function futurePlan()
        {
            $user = Auth::user();

    if (DB::table('questions')->where('userId', $user->id)->get()->count()<=0) {
                return Redirect::route('survey');
              }else{
             
              $FuturePlanData = DB::table('future_plan')->where('userId', $user->id)->get(); 
              

               return view('future_plan',['FuturePlanData'=>$FuturePlanData]);
              }
        }
        public function detailed_scores()
        {
             $user = Auth::user();
            if (DB::table('questions')->where('userId', $user->id)->get()->count()<=0) {
            return Redirect::route('survey');
          }else{

         $questions = DB::table('questions')->where('userId', $user->id)->get();

        return view('detailed_scores',['questions'=>$questions]);
        }
         }
         public function ResetPasswordRedirect()
         {
           Auth::logout();
            return Redirect::route('password.request');
             # code...
         }
}
