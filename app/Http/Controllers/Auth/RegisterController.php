<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'confirmed'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lname' => [ 'string', 'max:255'],
            'employer' => ['required',  'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'job_level' => ['required', 'string', 'max:255'],
            'purposes' => ['required', 'string', 'max:255'],
            'TermsAggree' => ['accepted'],
           

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       return User::create([
            'fname' => $data['fname'],
            'email' => $data['email'],
            'lname' => $data['lname'],
            'fname' => $data['fname'],
            'employer' => $data['employer'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'sector' => $data['sector'],
            'education' => $data['education'],
            'job_level' => $data['job_level'],
            'purposes' => $data['purposes'],
            'password' => Hash::make($data['password']),
            'verifyToken'=> Str::random(40),
        ]);
        //$thisUser= User::findOrFail($user->id);
       // $this->sendEmail($thisUser);
        //return $user;
    }

    public function sendEmail($thisUser)
    {
      //  Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }

    public function verifyEmailFirst()
    {
      //  return view('email.verifyEmailFirst');
    }
    public function sendEmailDone()
    {

    }

}
