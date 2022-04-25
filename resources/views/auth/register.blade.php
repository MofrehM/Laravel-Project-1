@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RegisterLogin.Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">
                            {{ __('RegisterLogin.FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}"  autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">
                            {{ __('RegisterLogin.LastName') }} </label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}"  autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="employer" class="col-md-4 col-form-label text-md-right">
                             {{ __('RegisterLogin.Employer') }}</label>
                            
                            <div class="col-md-6">
  <select id="employer"  class="form-control @error('employer') is-invalid @enderror" name="employer" value="{{ old('employer') }}" required autocomplete="employer" autofocus required>
          <option value=" "> {{ __('RegisterLogin.Select') }}</option>
          <option value="MOH - ASEER" @if (old('employer') == 'MOH - ASEER') selected="selected" @endif>{{ __('RegisterLogin.MOHASEER') }}</option>                
          <option value="MOH - BISHA" @if (old('employer') == 'MOH - BISHA') selected="selected" @endif>{{ __('RegisterLogin.MOHBISHA') }}</option>        
          <option value="MOH - EASTREN REGION" @if (old('employer') == 'MOH - EASTREN REGION') selected="selected" @endif>{{ __('RegisterLogin.MOHEASTRENREGION') }}</option>        
          <option value="MOH - HAFR ALBATEN" @if (old('employer') == 'MOH - HAFR ALBATEN') selected="selected" @endif>{{ __('RegisterLogin.MOHHAFRALBATEN') }}</option>        
          <option value="MOH - HAIL" @if (old('employer') == 'MOH - HAIL') selected="selected" @endif>{{ __('RegisterLogin.MOHHAIL') }}</option>        
          <option value="MOH - HASA" @if (old('employer') == 'MOH - HASA') selected="selected" @endif>{{ __('RegisterLogin.MOHHASA') }}</option>        
          <option value="MOH - JAZAN" @if (old('employer') == 'MOH - JAZAN') selected="selected" @endif>{{ __('RegisterLogin.MOHJAZAN') }}</option>        
          <option value="MOH - JEDDAH" @if (old('employer') == 'MOH - JEDDAH') selected="selected" @endif>{{ __('RegisterLogin.MOHJEDDAH') }}</option>        
          <option value="MOH - MADINAH" @if (old('employer') == 'MOH - MADINAH') selected="selected" @endif>{{ __('RegisterLogin.MOHMADINAH') }}</option>        
          <option value="MOH - MAKKAH" @if (old('employer') == 'MOH - MAKKAH') selected="selected" @endif>{{ __('RegisterLogin.MOHMAKKAH') }}</option>        
          <option value="MOH - NORTHERN" @if (old('employer') == 'MOH - NORTHERN') selected="selected" @endif>{{ __('RegisterLogin.MOHNORTHERN') }}</option>        
          <option value="MOH - QASSIM" @if (old('employer') == 'MOH - QASSIM') selected="selected" @endif>{{ __('RegisterLogin.MOHQASSIM') }}</option>        
          <option value="MOH - RIYADH" @if (old('employer') == 'MOH - RIYADH') selected="selected" @endif>{{ __('RegisterLogin.MOHRIYADH') }}</option>  
          <option value="MOH - TABUK" @if (old('employer') == 'MOH - TABUK') selected="selected" @endif>{{ __('RegisterLogin.MOHTABUK') }}</option>  
          <option value="MOH - TAIF" @if (old('employer') == 'MOH - TAIF') selected="selected" @endif>{{ __('RegisterLogin.MOHTAIF') }}</option>                
     </select>



                              
                                @error('employer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">
                             {{ __('RegisterLogin.SelectYourAge') }}
                        </label>

                            <div class="col-md-6">
                                <select id="age"  class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus required>
          <option value=" "> {{ __('RegisterLogin.SelectAge') }}</option>
          <option value="20 - 25" @if (old('age') == '20 - 25') selected="selected" @endif>20 - 25</option>
          <option value="25 - 30" @if (old('age') == '25 - 30') selected="selected" @endif>25 - 30</option>
          <option value="30 - 35" @if (old('age') == '30 - 35') selected="selected" @endif>30 - 35</option>
          <option value="35 - 40" @if (old('age') == '35 - 40') selected="selected" @endif>35 - 40</option>
         <option value="40 - 45"  @if (old('age') == '40 - 45') selected="selected" @endif>40 - 45</option>        
        <option value="45 - 50"  @if (old('age') == '45 - 50') selected="selected" @endif>45 - 50</option>        
          <option value="50 - 55"  @if (old('age') == '50 - 55') selected="selected" @endif>50 - 55</option>        
         <option value="55 - 60"  @if (old('age') == '55 - 60') selected="selected" @endif>55 - 60</option>          
     </select>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">
                             {{ __('RegisterLogin.SelectYourGender') }}</label>

                            <div class="col-md-6">   
                         
                        <div class="form-control" >
                              <div class="form-check-inline">
                              <label class="form-check-label" for="male">
                                <input type="radio" @if (old('gender') == 'male') checked="checked" @endif id="male" name="gender" required  value="male"
                                class="form-check-input  @error('gender') is-invalid @enderror"    autocomplete="gender" > {{ __('RegisterLogin.Male') }}                         
                              </label>
                          </div>
                            
                             <div class="form-check-inline">
                              <label class="form-check-label" for="female">
                                <input type="radio" @if (old('gender') == 'female') checked="checked" @endif id="female" name="gender" required 
                                class="form-check-input  @error('gender') is-invalid @enderror"  value="female"  autocomplete="gender">{{ __('RegisterLogin.Female') }} 
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
                            <label for="sector" class="col-md-4 col-form-label text-md-right">{{ __('RegisterLogin.Sector') }} </label>

                            <div class="col-md-6">
                                <select id="sector"  class="form-control @error('sector') is-invalid @enderror" name="sector" value="{{ old('sector') }}" required autocomplete="sector" autofocus required>
  <option value=" " >{{ __('RegisterLogin.Selectsector') }}</option>
  <option value="Govenment" @if (old('sector') == 'Govenment') selected="selected" @endif>{{ __('RegisterLogin.Govenment') }}</option>
  <option value="Semi-Govenment" @if (old('sector') == 'Semi-Govenment') selected="selected" @endif>
  {{ __('RegisterLogin.SemiGovenment') }}</option>
 <option value="Private" @if (old('sector') == 'Private') selected="selected" @endif>{{ __('RegisterLogin.Private') }}</option>
 <option value="Business Owner" @if (old('sector') == 'Business Owner') selected="selected" @endif>{{ __('RegisterLogin.BusinessOwner') }}</option>
 <option value="Freelancer" @if (old('sector') == 'Freelancer') selected="selected" @endif>{{ __('RegisterLogin.Freelancer') }}</option>
        
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
                            {{ __('RegisterLogin.Education') }} </label>

                            <div class="col-md-6">
                                <select id="education"  class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}" required autocomplete="education" autofocus required>
  <option value=" ">{{ __('RegisterLogin.Select') }} </option>
  <option value="High School" @if (old('education') == 'High School') selected="selected" @endif>{{ __('RegisterLogin.HighSchool') }}</option>
  <option value="Diploma" @if (old('education') == 'Diploma') selected="selected" @endif>{{ __('RegisterLogin.Diploma') }}</option>
  <option value="Bachelor Degree" @if (old('education') == 'Bachelor Degree') selected="selected" @endif>{{ __('RegisterLogin.BachelorDegree') }}</option>
 <option value="Master" @if (old('education') == 'Master') selected="selected" @endif>{{ __('RegisterLogin.Master') }}</option>
 <option value="PHD" @if (old('education') == 'PHD') selected="selected" @endif>{{ __('RegisterLogin.PHD') }}</option>  
                                </select>

                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="job_level" class="col-md-4 col-form-label text-md-right">{{ __('RegisterLogin.JobLevel') }} </label>

                            <div class="col-md-6">
                                <select id="job_level"  class="form-control @error('job_level') is-invalid @enderror" name="job_level" value="{{ old('job_level') }}" required autocomplete="job_level" autofocus required>
<option value=" ">{{ __('RegisterLogin.Select') }}</option>
  <option value="Entry Level" @if (old('job_level') == 'Entry Level') selected="selected" @endif>{{ __('RegisterLogin.EntryLevel') }}</option>
 <option value="Intermediate" @if (old('job_level') == 'Intermediate') selected="selected" @endif>{{ __('RegisterLogin.Intermediate') }}</option>
  <option value="Front Line Managment" @if (old('job_level') == 'Front Line Managment') selected="selected" @endif>{{ __('RegisterLogin.FrontLineManagment') }}</option>
 <option value="Middle-Line Managment" @if (old('job_level') == 'Middle-Line Managment') selected="selected" @endif>{{ __('RegisterLogin.MiddleLineManagment') }}</option>
 <option value="Senior, Excutive" @if (old('job_level') == 'Senior, Excutive') selected="selected" @endif>{{ __('RegisterLogin.SeniorExcutive') }}</option>
                                </select>

                                @error('job_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="purposes" class="col-md-4 col-form-label text-md-right">{{ __('RegisterLogin.PurposeforExam') }}</label>

                            <div class="col-md-6">
                                <select id="purposes"  class="form-control @error('purposes') is-invalid @enderror" name="purposes" value="{{ old('purposes') }}" required autocomplete="purposes" autofocus required>
  <option value=" ">{{ __('RegisterLogin.Select') }}</option>
  <option value="Orginazation Policy" @if (old('purposes') == 'Orginazation Policy') selected="selected" @endif>{{ __('RegisterLogin.OrginazationPolicy') }}</option>
  <option value="New Assignment" @if (old('purposes') == 'New Assignment') selected="selected" @endif>{{ __('RegisterLogin.NewAssignment') }}</option>
  <option value="Meet Future Progression Requirement" @if (old('purposes') == 'Meet Future Progression Requirement') selected="selected" @endif>{{ __('RegisterLogin.MeetFutureProgressionRequirement') }}</option>
  <option value="Self Initiative" @if (old('purposes') == 'Self Initiative') selected="selected" @endif>{{ __('RegisterLogin.SelfInitiative') }}</option>
                                </select>

                                @error('purposes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>







                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                            {{ __('RegisterLogin.EMailAddress') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">
                              {{ __('RegisterLogin.ConfirmEMail') }}</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control @error('email_confirmation') is-invalid @enderror" name="email_confirmation"  required>

                         
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                             {{ __('RegisterLogin.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                             {{ __('RegisterLogin.ConfirmPassword') }} </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      <div class="form-check row">
                            <label for="TermsAggree" class="form-check-label col-md-4 col-form-label text-md-right">
                             {{ __('RegisterLogin.Iagreewithall') }}  <a target="_blank" href="{{url('/terms-and-conditions')}}"> {{ __('RegisterLogin.termsandconditions') }}</a></label>

                            <div class="col-md-6">
                                <input id="TermsAggree" type="checkbox" class="form-check-input  @error('TermsAggree') is-invalid @enderror" value="1" name="TermsAggree" required autocomplete="TermsAggree">

                                @error('TermsAggree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   {{ __('RegisterLogin.Register') }} 
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
