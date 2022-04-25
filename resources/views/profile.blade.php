@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
 <div class="card-header"> <h4 class="pull-left"></div>
             
 <div class="card-header"> <h4 class="pull-left">{{ __('msg.ProfileHeader') }}</h4> <a class="pull-right btn btn-info btn-lg" href="{{url('/Update_Profile_Page')}}">Update Profile</a></div>

   

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
               @if ( session()->has('SuccessMessage') )
                 <h3 class="alert alert-success alert-dismissable">{{ session()->get('SuccessMessage') }}</h3>
                @endif

<br>
<br><hr>


<div class="text-center center-block">
 
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home">{{ __('msg.Dashboard') }}</a></li>
    <li><a href="#menu1">{{ __('msg.ProfileDetails') }}</a></li>
    <li><a href="#menu2">{{ __('msg.ChangePassword') }}</a></li>
    <li><a href="#menu3">{{ __('msg.PLogout') }}</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>{{ __('msg.profileWellcome') }}{{ Auth::user()->fname }}</h3>
      
<div class="card text-center center-block">
  <img src="{{asset('img/mm.png')}}" alt="Avatar"  style="width:100px;">
  <div class="text-center center-block">
    <h4><b> {{ Auth::user()->fname }}  {{ Auth::user()->lname }} </b></h4> 
    <p> {{ Auth::user()->email }} </p> 
  </div>
</div>

    </div>
    <div id="menu1" class="tab-pane fade {{__('msg.ProfileDir')}}">
      <h3 class="text-center">{{ __('msg.ProfileDetail') }}</h3>
   
<div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.FirstName') }}</div>
      <div class="panel-body">{{ Auth::user()->fname }}</div>
    </div>
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.LastName') }}</div>
      <div class="panel-body">{{ Auth::user()->lname }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Email') }}</div>
      <div class="panel-body">{{ Auth::user()->email }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Employer') }}</div>
      <div class="panel-body">{{ Auth::user()->employer }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Age') }}</div>
      <div class="panel-body">{{ Auth::user()->age }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Gender') }}</div>
      <div class="panel-body">{{ Auth::user()->gender }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Sector') }}</div>
      <div class="panel-body">{{ Auth::user()->sector }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Education') }}</div>
      <div class="panel-body">{{ Auth::user()->education }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.Purposesforevaluation') }}</div>
      <div class="panel-body">{{ Auth::user()->purposes }}</div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading">{{ __('msg.JobLevel') }}</div>
      <div class="panel-body">{{ Auth::user()->job_level }}</div>
    </div>

  





    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>{{ __('msg.resetPass') }}</h3>
      <div>
<br>
          @if (Route::has('password.request'))
             
              <a class="btn btn-warning btn-lg" href="{{ url('/ResetPasswordRedirect') }}">
                  {{ __('msg.changepass') }}
               </a>
          @endif
      </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3> {{ __('msg.clkLotout') }}</h3>
      <div>
         <a class="btn btn-danger btn-lg" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('msg.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      </div>
    </div>
  </div>
    <hr>
   
</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
