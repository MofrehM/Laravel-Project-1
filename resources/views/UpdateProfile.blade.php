@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('RegisterLogin.UpdateProfile')}}</div>

                <div class="card-body">
                    <form method="POST" action="/update_profile">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.FirstName')}}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ Auth::user()->fname }}"  autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.LastName')}}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ Auth::user()->lname }}"  autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="employer" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.Employer')}}</label>

                            <div class="col-md-6">
                                <input id="employer" type="text" class="form-control @error('employer') is-invalid @enderror" name="employer" value="{{ Auth::user()->employer }}"  autocomplete="employer" autofocus>

                                @error('employer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.SelectYourAge')}}</label>

                            <div class="col-md-6">
                                <select id="age"  class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}"  autocomplete="age" autofocus >
          <option value=" ">{{__('RegisterLogin.SelectAge')}}</option>
          <option value="20 - 25" @if (Auth::user()->age  == '20 - 25') selected="selected" @endif>20 - 25</option>
          <option value="25 - 30" @if (Auth::user()->age  == '25 - 30') selected="selected" @endif>25 - 30</option>
          <option value="30 - 35" @if (Auth::user()->age  == '30 - 35') selected="selected" @endif>30 - 35</option>
          <option value="35 - 40" @if (Auth::user()->age  == '35 - 40') selected="selected" @endif>35 - 40</option>
         <option value="40 - 45"  @if (Auth::user()->age  == '40 - 45') selected="selected" @endif>40 - 45</option>        
        <option value="45 - 50"  @if (Auth::user()->age  == '45 - 50') selected="selected" @endif>45 - 50</option>        
          <option value="50 - 55"  @if (Auth::user()->age  == '50 - 55') selected="selected" @endif>50 - 55</option>        
         <option value="55 - 60"  @if (Auth::user()->age  == '55 - 60') selected="selected" @endif>55 - 60</option>          
     </select>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.SelectYourGender')}}</label>

                            <div class="col-md-6">   
                         
                        <div class="form-control" >
                              <div class="form-check-inline">
                              <label class="form-check-label" for="male">
                                <input type="radio" @if ( Auth::user()->gender == 'male') checked="checked" @endif id="male" name="gender" required  value="male"
                                class="form-check-input  @error('gender') is-invalid @enderror"    autocomplete="gender" >{{__('RegisterLogin.Male')}}                       
                              </label>
                          </div>
                            
                             <div class="form-check-inline">
                              <label class="form-check-label" for="female">
                                <input type="radio" @if ( Auth::user()->gender == 'female') checked="checked" @endif id="female" name="gender" required 
                                class="form-check-input  @error('gender') is-invalid @enderror"  value="female"  autocomplete="gender">{{__('RegisterLogin.Female')}}
                              </label>
                            </div>
                      
                            </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="sector" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.Sector')}}</label>

                            <div class="col-md-6">
                                <select id="sector"  class="form-control @error('sector') is-invalid @enderror" name="sector" value="{{ old('sector') }}"  autocomplete="sector" autofocus >
  <option value=" " >{{__('RegisterLogin.Selectsector')}}</option>
  <option value="Govenment" @if (Auth::user()->sector == 'Govenment') selected="selected" @endif>{{__('RegisterLogin.Govenment')}}</option>
  <option value="Semi-Govenment" @if (Auth::user()->sector == 'Semi-Govenment') selected="selected" @endif>{{__('RegisterLogin.SemiGovenment')}}</option>
 <option value="Private" @if (Auth::user()->sector == 'Private') selected="selected" @endif>{{__('RegisterLogin.Private')}}</option>
 <option value="Business Owner" @if (Auth::user()->sector == 'Business Owner') selected="selected" @endif>{{__('RegisterLogin.BusinessOwner')}}</option>
 <option value="Freelancer" @if (Auth::user()->sector == 'Freelancer') selected="selected" @endif>{{__('RegisterLogin.Freelancer')}}</option>
        
                                </select>

                                @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">
                            {{__('RegisterLogin.Education')}}</label>

                            <div class="col-md-6">
                                <select id="education"  class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}"  autocomplete="education" autofocus >
  <option value=" ">{{__('RegisterLogin.Select')}}</option>
  <option value="High School" @if (Auth::user()->education == 'High School') selected="selected" @endif>{{__('RegisterLogin.HighSchool')}}</option>
  <option value="Diploma" @if (Auth::user()->education == 'Diploma') selected="selected" @endif>{{__('RegisterLogin.Diploma')}}</option>
  <option value="Bachelor Degree" @if (Auth::user()->education == 'Bachelor Degree') selected="selected" @endif>{{__('RegisterLogin.BachelorDegree')}}</option>
 <option value="Master" @if (Auth::user()->education == 'Master') selected="selected" @endif>{{__('RegisterLogin.Master')}}</option>
 <option value="PHD" @if (Auth::user()->education == 'PHD') selected="selected" @endif>{{__('RegisterLogin.PHD')}}</option>  
                                </select>

                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="job_level" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.JobLevel')}}</label>

                            <div class="col-md-6">
                                <select id="job_level"  class="form-control @error('job_level') is-invalid @enderror" name="job_level" value="{{ old('job_level') }}"  autocomplete="job_level" autofocus >
<option value=" ">{{__('RegisterLogin.Select')}}</option>
  <option value="Entry Level" @if (Auth::user()->job_level == 'Entry Level') selected="selected" @endif>{{__('RegisterLogin.EntryLevel')}}</option>
 <option value="Intermediate" @if (Auth::user()->job_level == 'Intermediate') selected="selected" @endif>{{__('RegisterLogin.Intermediate')}}</option>
  <option value="Front Line Managment" @if (Auth::user()->job_level == 'Front Line Managment') selected="selected" @endif>{{__('RegisterLogin.FrontLineManagment')}}</option>
 <option value="Middle-Line Managment" @if (Auth::user()->job_level == 'Middle-Line Managment') selected="selected" @endif>{{__('RegisterLogin.MiddleLineManagment')}}</option>
 <option value="Senior, Excutive" @if (Auth::user()->job_level == 'Senior, Excutive') selected="selected" @endif>{{__('RegisterLogin.SeniorExcutive')}}</option>
                                </select>

                                @error('job_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="purposes" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.PurposeforExam')}}</label>

                            <div class="col-md-6">
                                <select id="purposes"  class="form-control @error('purposes') is-invalid @enderror" name="purposes" value="{{ old('purposes') }}"  autocomplete="purposes" autofocus >
  <option value=" ">{{__('RegisterLogin.Select')}}</option>
  <option value="Orginazation Policy" @if (Auth::user()->purposes == 'Orginazation Policy') selected="selected" @endif>{{ __('RegisterLogin.OrginazationPolicy') }}</option>
  <option value="New Assignment" @if (Auth::user()->purposes == 'New Assignment') selected="selected" @endif>{{__('RegisterLogin.NewAssignment')}}</option>
  <option value="Meet Future Progression Requirement" @if (Auth::user()->purposes == 'Meet Future Progression Requirement') selected="selected" @endif>{{__('RegisterLogin.MeetFutureProgressionRequirement')}}</option>
  <option value="Self Initiative" @if (Auth::user()->purposes == 'Self Initiative') selected="selected" @endif>{{__('RegisterLogin.SelfInitiative')}}</option>
                                </select>

                                @error('purposes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>







                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.EMailAddress')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.ConfirmEMail')}}</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control @error('email_confirmation') is-invalid @enderror" name="email_confirmation" value="{{ Auth::user()->email }}" >

                         
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.Password')}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{__('RegisterLogin.ConfirmPassword')}}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>
                    
 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   {{__('RegisterLogin.UpdateProfile')}} 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
