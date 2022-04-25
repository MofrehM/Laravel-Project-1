@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ( session()->has('message') )
                 <h3 class="alert alert-success alert-dismissable">{{ session()->get('message') }}</h3>
                @endif
                
 <div class="card-header"> <h4 class="pull-left">{{ __('result.YourResultis') }}</h4> <a class="pull-right btn btn-info btn-lg" href="{{url('/detailed_scores')}}">{{ __('result.DetailedScore') }}</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<h2>{{ __('result.FinallResult') }}</h2>
<div id="mainChartID" dir="{{ __('result.ChartDir') }}"></div>
<br>
<br><hr>

<div class="">
  <p>{{ __('result.ResultHeader') }}</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">{{ __('result.FocusedDrive') }}</a></li>
    <li><a data-toggle="tab" href="#menu1">{{ __('result.EmotionalIntelligence') }}</a></li>
    <li><a data-toggle="tab" href="#menu2">{{ __('result.BuildingTrustEnablingOthers') }}</a></li>
    <li><a data-toggle="tab" href="#menu3">{{ __('result.ConceptualThinking') }}</a></li>
    <li><a data-toggle="tab" href="#menu4">{{ __('result.SystemsThinking') }}</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{ __('result.ActualScore') }}</th>
        <th>{{ __('result.Average') }}</th>
        <th>{{ __('result.MaxScore') }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual1">{{$F}}</td>
        <td id="avg1">{{$AF}}</td>
        <td id="max1">30</td>
      </tr>
     
    </tbody>
  </table>
    <div id="piechart1"></div>
 </div>
  
    <div id="menu1" class="tab-pane fade">
      
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{ __('result.ActualScore') }}</th>
        <th>{{ __('result.Average') }}</th>
        <th>{{ __('result.MaxScore') }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual2">{{$E}}</td>
        <td id="avg2">{{$AE}}</td>
        <td id="max2">30</td>
      </tr>
     
    </tbody>
  </table>
    <div id="piechart2"></div>

      </div>
    <div id="menu2" class="tab-pane fade">
     
   
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{ __('result.ActualScore') }}</th>
        <th>{{ __('result.Average') }}</th>
        <th>{{ __('result.MaxScore') }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual3">{{$B}}</td>
        <td id="avg3">{{$AB}}</td>
        <td id="max3">30</td>
      </tr>
     
    </tbody>
  </table>  
      <div id="piechart3"></div>

     </div>
     <div id="menu3" class="tab-pane fade">
     
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{ __('result.ActualScore') }}</th>
        <th>{{ __('result.Average') }}</th>
        <th>{{ __('result.MaxScore') }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual4">{{$S}}</td>
        <td id="avg4">{{$AS}}</td>
        <td  id="max4">30</td>
      </tr>
     
    </tbody>
  </table>
           <div id="piechart4"></div>
     </div>

 <div id="menu4" class="tab-pane fade">
     
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{ __('result.ActualScore') }}</th>
        <th>{{ __('result.Average') }}</th>
        <th>{{ __('result.MaxScore') }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual5">{{$C}}</td>
        <td id="avg5">{{$AC}}</td>
        <td id="max5">30</td>
      </tr>
     
    </tbody>
  </table>
                <div id="piechart5"></div>
     </div>
     
 
  </div>
</div>



                </div>
            </div>
        </div>
    </div>
</div>



  <script src="{{ asset('js/charts2.js') }}"></script>

@endsection
