@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ( session()->has('message') )
                 <h3 class="alert alert-success alert-dismissable">{{ session()->get('message') }}</h3>
                @endif
                <h3 class="card-header">{{__('FuturePlan.FuturePlanHead')}}</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




<!--Table content start-->

<div class="">
 
   <form class="form-horizontal" action="/addPlan" method="post">
                            @csrf
                            {{ method_field('GET') }}
  <div class="table-responsive-sm">          
  <table class="table table-bordered">
     <thead>
  <div class="form-group">  
  <tr>
  <th>
    <label class="" for="name">{{__('FuturePlan.NameLFM')}}</label>
  </th>
  <td colspan="4">
    <input type="text" class="form-control input-lg @error('name') is-invalid @enderror" id="name" placeholder="Your Name" name="name"  value="{{ old('name') }}"  autocomplete="name" >
                               @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </td>
  </tr>
  </div>
  <tr>
  <th><label class="" for="level">{{__('FuturePlan.LEVEL')}} </label> </th>
  <td colspan="4">
    <input type="text" class="form-control input-lg @error('level') is-invalid @enderror" id="level" placeholder="Enter Level" name="level"  value="{{ old('level') }}"  autocomplete="level" >
                              @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
  </tr>  
  
   <tr>
  <th><label class="" for="DevObj">{{__('FuturePlan.DevelopmentObjective')}} </label></th>
  <td colspan="4"><input type="text" class="form-control input-lg @error('DevObj') is-invalid @enderror" id="DevObj" placeholder="Development Object" name="DevObj"  value="{{ old('DevObj') }}"  autocomplete="DevObj" >
                              @error('DevObj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
  </tr> 
  
     </thead>
   <tbody>
    <tr>
 <th ><label class="" for="AreaDev">{{__('FuturePlan.AreacompetencytoDevelop')}}</label> </th>
 <th><label class="" for="purpose">{{__('FuturePlan.PURPOSE')}} </label> </th>
 <th><label class="" for="priority"> {{__('FuturePlan.PRIORITY')}}  </label> </th>
 <th><label class="" for="activity">{{__('FuturePlan.ActivitiesActionStepstoDeveloptheCompetency')}} </label>  </th>
 <th><label class="" for="success">{{__('FuturePlan.SuccessCriteriameasureKPIforsuccess')}}</label>  </th>
 </tr>
 
 <tr>
 <td rowspan="5"><textarea rows="13" class="form-control input-sm @error('AreaDev') is-invalid @enderror" id="AreaDev" placeholder="Text" name="AreaDev"  value="{{ old('AreaDev') }}"  autocomplete="AreaDev" ></textarea>
                              @error('AreaDev')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
 <td rowspan="5"><textarea rows="13" class="form-control input-sm @error('purpose') is-invalid @enderror" id="purpose" placeholder="Text" name="purpose"  value="{{ old('purpose') }}"  autocomplete="purpose" ></textarea> 
                              @error('purpose')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
 <td rowspan="5">
<div class="col-md-12">
   <div class="form-group row">
                         
            <select id="priority"  class=" input-sm @error('priority') is-invalid @enderror" name="priority" value="{{ old('priority') }}"  autocomplete="priority" autofocus >
               <option class=" small" value="">{{__('FuturePlan.Select')}}</option>
                <option value="HIGH">{{__('FuturePlan.HIGH')}}</option>
                <option value="MEDIUM">{{__('FuturePlan.MEDIUM')}}</option>
                <option value="LOW">{{__('FuturePlan.LOW')}}</option>
                  </select>

          @error('priority')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
</div></div>
           </td>
 </td>
  <td><input type="text" class="form-control @error('activity1') is-invalid @enderror" id="activity" placeholder="The Activity" name="activity1"  value="{{ old('activity1') }}"  autocomplete="activity1"  >
                              @error('activity1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
  <td><input type="text" class="form-control @error('success1') is-invalid @enderror" id="success" placeholder="Success Criteria" name="success1"  value="{{ old('success1') }}"  autocomplete="success1" > 
                              @error('success1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
 </tr>
 
 <tr>

 <td><input type="text" class="form-control @error('activity2') is-invalid @enderror" id="activity2" placeholder="The Activity" name="activity2"  value="{{ old('activity2') }}"  autocomplete="activity2" > 
                              @error('activity2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
 <td><input type="text" class="form-control @error('success2') is-invalid @enderror" id="success2" placeholder="Success Criteria" name="success2"  value="{{ old('success2') }}"  autocomplete="success2" > 
                              @error('success2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
</tr>

<tr>
<td><input type="text" class="form-control @error('activity3') is-invalid @enderror" id="activity3" placeholder="The Activity" name="activity3"  value="{{ old('activity3') }}"  autocomplete="activity3" >
                              @error('activity3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
<td><input type="text" class="form-control @error('success3') is-invalid @enderror" id="success3" placeholder="Success Criteria" name="success3"  value="{{ old('success3') }}"  autocomplete="success3" >
                              @error('success3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>

</tr>

<tr>
<td><input type="text" class="form-control @error('activity4') is-invalid @enderror" id="activity4" placeholder="The Activity" name="activity4"  value="{{ old('activity4') }}"  autocomplete="activity4" >
                              @error('activity4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
<td><input type="text" class="form-control @error('success4') is-invalid @enderror" id="success4" placeholder="Success Criteria" name="success4"  value="{{ old('success4') }}"  autocomplete="success4" >
                              @error('success4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
</tr>

<tr>
<td><input type="text" class="form-control @error('activity5') is-invalid @enderror" id="activity5" placeholder="The Activity" name="activity5"  value="{{ old('activity5') }}"  autocomplete="activity5" >
                              @error('activity5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
<td><input type="text" class="form-control @error('success5') is-invalid @enderror" id="success5" placeholder="Success Criteria" name="success5"  value="{{ old('success5') }}"  autocomplete="success5" >
                              @error('success5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
</tr>
</tbody>

     <tfoot>
  
   
  <tr>
  <th><label class="" for="CurrentScore">{{__('FuturePlan.CurrentScore')}}</label> </th>
  <td colspan="2">

<input type="number" min="0" max="30" class="form-control @error('CurrentScore') is-invalid @enderror" id="CurrentScore" placeholder="Current Score" name="CurrentScore"  value="{{ old('CurrentScore') }}"  autocomplete="CurrentScore" > 
                              @error('CurrentScore')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </td>
 </td>
   <th><label class="" for="DesiredScore">{{__('FuturePlan.DesiredScore')}}</label> </th>
  <td ><input type="number" min="0" max="30" class="form-control @error('DesiredScore') is-invalid @enderror" id="DesiredScore" placeholder="Desired Score" name="DesiredScore"  value="{{ old('DesiredScore') }}"  autocomplete="DesiredScore" > 
                              @error('DesiredScore')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
  </tr>
  


  <tr>
  <th><label class="" for="date">{{__('FuturePlan.DateInput')}}</label> </th>
  <td colspan="2"><input type="date" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="The Date" name="date"  value="{{ old('date') }}"  autocomplete="date" > 
                              @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
   <th><label class="" for="DiscussedDate">{{__('FuturePlan.DiscussedwithCoachInput')}}</label> </th>
  <td ><input type="date" class="form-control @error('DiscussedDate') is-invalid @enderror" id="DiscussedDate" placeholder="Enter title" name="DiscussedDate"  value="{{ old('DiscussedDate') }}"  autocomplete="DiscussedDate" > 
                              @error('DiscussedDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td>
 </td>
  </tr>
  
  
     </tfoot>



  </table>
  </div>
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-binary">{{__('FuturePlan.Submit')}}</button>
      </div>
    </div>
</form>
</div>

<!-- table content end-->
 



<div style="background-color:#d26028cc; color:#fff;text-align:center;"> <hr style="height:3px;color:gray;background-color:gray">
    <h4>{{__('FuturePlan.YourPreviousPlans')}}</h4>
    <hr style="height:3px;color:gray;background-color:gray">
</div>

<!--Table content start-->
 @foreach($FuturePlanData as $subData)
   
  <table class="table table-bordered">
     <thead>
  <div class="form-group">  
  <tr>
  <th>
    <label class="" for="f">{{__('FuturePlan.NameLFM')}}</label>
  </th>
  <td colspan="4">{{$subData->name}}</td>
  </tr>
  </div>
  <tr>
  <th><label class="" for="">{{__('FuturePlan.LEVEL')}}</label> </th>
  <td colspan="4">{{$subData->level}} </tr>  
  
   <tr>
  <th><label class="" for="d">{{__('FuturePlan.DevelopmentObjective')}}</label></th>
  <td colspan="4">{{$subData->DevObj}} </td>
  </tr> 
  
     </thead>
   <tbody>
    <tr>
 <th ><label class="" for="f">{{__('FuturePlan.AreacompetencytoDevelop')}}</label> </th>
 <th><label class="" for="">{{__('FuturePlan.PURPOSE')}}</label> </th>
 <th><label class="" for="">{{__('FuturePlan.PRIORITY')}}</label> </th>
 <th><label class="" for="">{{__('FuturePlan.ActivitiesActionStepstoDeveloptheCompetency')}}</label>  </th>
 <th><label class="" for="">{{__('FuturePlan.SuccessCriteriameasureKPIforsuccess')}}</label>  </th>
 </tr>
 
 <tr>
 <td rowspan="5">{{$subData->AreaDev}} </td>
 <td rowspan="5">{{$subData->purpose}}</td>
 </td>
 <td rowspan="5">{{$subData->priority}}</td>
 </td>
  <td>{{$subData->activity1}}</td>
  <td>{{$subData->success1}}</td>
 </tr>
 
 <tr>

 <td>{{$subData->activity2}}</td>
 <td>{{$subData->success2}}</td>
</tr>

<tr>
<td>{{$subData->activity3}} </td>
<td>{{$subData->success3}} </td>

</tr>

<tr>
<td>{{$subData->activity4}} </td>
<td>{{$subData->success4}} </td>
</tr>

<tr>
<td>{{$subData->activity5}}</td>
<td>{{$subData->success5}} </td>
</tr>
</tbody>

     <tfoot>
       
  <tr>
  <th><label class="" for=" ">{{__('FuturePlan.CurrentScore')}}</label> </th>
  <td colspan="2">{{$subData->CurrentScore}}</td>
   <th><label class="" for=" ">{{__('FuturePlan.DesiredScore')}} </label> </th>
  <td >{{$subData->DesiredScore}} </td>
  </tr>
  
  <tr>
  <th><label class="" for=" ">{{__('FuturePlan.DateInput')}}</label> </th>
  <td colspan="2">{{$subData->date}} </td>
   <th><label class="" for=" ">{{__('FuturePlan.DiscussedwithCoachInput')}} </label> </th>
  <td >{{$subData->DiscussedDate}} </td>
  </tr>
  
  
     </tfoot>



  </table>
   <hr style="height:3px;color:gray;background-color:gray">
    <hr style="height:3px;color:gray;background-color:gray">
     
       @endforeach

<!-- table content end-->
 

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
