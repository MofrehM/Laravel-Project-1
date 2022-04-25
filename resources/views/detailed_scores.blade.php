@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ( session()->has('message') )
                 <h3 class="alert alert-success alert-dismissable">{{ session()->get('message') }}</h3>
                @endif
                <h4 class="card-header">{{__('result.YourResultis')}}</h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



<!--here is the third graph-->

<div class="" dir="{{__('msg.SiteDir')}}">
  <p>{{__('result.FullResult')}}</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#tab1">{{__('result.FocusedDrive')}}</a></li>
    <li><a data-toggle="tab" href="#tab2">{{__('result.EmotionalIntelligence')}}</a></li>
    <li><a data-toggle="tab" href="#tab3">{{__('result.BuildingTrustEnablingOthers')}}</a></li>
    <li><a data-toggle="tab" href="#tab4">{{__('result.ConceptualThinking')}}</a></li>
    <li><a data-toggle="tab" href="#tab5">{{__('result.SystemsThinking')}}</a></li>
  </ul>

  <div class="tab-content">
    <div id="tab1" class="tab-pane fade in active">
      
 <table class="table table-bordered" >
    <thead>
      <tr>
        <th>{{__('result.QuestionNumber')}}</th>
        <th>{{__('result.CFocusedDrive')}}</th>
        <th>{{__('result.ScoreLable')}} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >Q1</td> 
        <td >{{__('questions.Q1')}}</td> 
        <td id="QNo1">{{$questions[0]->Q1}}</td> 
      </tr>
      <tr>
        <td >Q6</td> 
        <td >{{__('questions.Q6')}}</td> 
        <td id="QNo6">{{$questions[0]->Q6}}</td> 
      </tr>
      <tr>
        <td >Q11</td> 
        <td >{{__('questions.Q11')}}</td> 
        <td id="QNo11">{{$questions[0]->Q11}}</td> 
      </tr>
      <tr>
        <td >Q16</td> 
        <td >{{__('questions.Q16')}}</td> 
        <td id="QNo16">{{$questions[0]->Q16}}</td> 
      </tr>
      <tr>
        <td >Q21</td> 
        <td >{{__('questions.Q21')}}</td> 
        <td id="QNo21">{{$questions[0]->Q21}}</td> 
      </tr>
      <tr>
        <td >Q26</td> 
        <td >{{__('questions.Q26')}}</td> 
        <td id="QNo26">{{$questions[0]->Q26}}</td> 
      </tr>
      <tr>
        <td >Q31</td> 
        <td >{{__('questions.Q31')}}</td> 
        <td id="QNo31">{{$questions[0]->Q31}}</td> 
      </tr>
      <tr>
        <td >Q36</td> 
        <td >{{__('questions.Q36')}}</td> 
        <td id="QNo36">{{$questions[0]->Q36}}</td> 
      </tr>
      <tr>
        <td >Q41</td> 
        <td >{{__('questions.Q41')}}</td> 
        <td id="QNo41">{{$questions[0]->Q41}}</td> 
      </tr>
      <tr>
        <td >Q46</td> 
        <td >{{__('questions.Q46')}}</td> 
        <td id="QNo46">{{$questions[0]->Q46}}</td> 
      </tr>
  
     
    </tbody>
  </table>
    <div id="QuestionChart1"></div>
 </div>
  
    <div id="tab2" class="tab-pane fade">
      
 <table class="table table-bordered">
    <thead>

        <tr>
        <th>{{__('result.QuestionNumber')}}</th>
        <th>{{__('result.CEmotionalIntelligence')}}</th>
        <th>{{__('result.ScoreLable')}} </th>
      </tr>
       
   
    </thead>
    <tbody>
       <tr>
        <td >Q2</td> 
        <td >{{__('questions.Q2')}}</td> 
        <td id="QNo2">{{$questions[0]->Q2}}</td> 
      </tr>
      <tr>
        <td >Q7</td> 
        <td >{{__('questions.Q7')}}</td> 
        <td id="QNo7">{{$questions[0]->Q7}}</td> 
      </tr>
      <tr>
        <td >Q12</td> 
        <td >{{__('questions.Q12')}}</td> 
        <td id="QNo12">{{$questions[0]->Q12}}</td> 
      </tr>
      <tr>
        <td >Q17</td> 
        <td >{{__('questions.Q17')}}</td> 
        <td id="QNo17">{{$questions[0]->Q17}}</td> 
      </tr>
      <tr>
        <td >Q22</td> 
        <td >{{__('questions.Q22')}}</td> 
        <td id="QNo22">{{$questions[0]->Q22}}</td> 
      </tr>
      <tr>
        <td >Q27</td> 
        <td >{{__('questions.Q27')}}</td> 
        <td id="QNo27">{{$questions[0]->Q27}}</td> 
      </tr>
      <tr>
        <td >Q32</td> 
        <td >{{__('questions.Q32')}}</td> 
        <td id="QNo32">{{$questions[0]->Q32}}</td> 
      </tr>
      <tr>
        <td >Q37</td> 
        <td >{{__('questions.Q37')}}</td> 
        <td id="QNo37">{{$questions[0]->Q37}}</td> 
      </tr>
      <tr>
        <td >Q42</td> 
        <td >{{__('questions.Q42')}}</td> 
        <td id="QNo42">{{$questions[0]->Q42}}</td> 
      </tr>
      <tr>
        <td >Q47</td> 
        <td >{{__('questions.Q47')}}</td> 
        <td id="QNo47">{{$questions[0]->Q47}}</td> 
      </tr>
  
    
     
     
    </tbody>
  </table>
    <div id="QuestionChart2"></div>

      </div>
    <div id="tab3" class="tab-pane fade">
     
   
<table class="table table-bordered">
    <thead>
       
      <tr>
        <th>{{__('result.QuestionNumber')}}</th>
        <th>{{__('result.CBuildingTrustEnablingOthers')}}</th>
        <th>{{__('result.ScoreLable')}} </th>
      </tr>
     
    </thead>
    <tbody>
         <tr>
        <td >Q3</td> 
        <td >{{__('questions.Q3')}}</td> 
        <td id="QNo3">{{$questions[0]->Q3}}</td> 
      </tr>
      <tr>
        <td >Q8</td> 
        <td >{{__('questions.Q8')}}</td> 
        <td id="QNo8">{{$questions[0]->Q8}}</td> 
      </tr>
      <tr>
        <td >Q13</td> 
        <td >{{__('questions.Q13')}}</td> 
        <td id="QNo13">{{$questions[0]->Q13}}</td> 
      </tr>
      <tr>
        <td >Q18</td> 
        <td >{{__('questions.Q18')}}</td> 
        <td id="QNo18">{{$questions[0]->Q18}}</td> 
      </tr>
      <tr>
        <td >Q23</td> 
        <td >{{__('questions.Q23')}}</td> 
        <td id="QNo23">{{$questions[0]->Q23}}</td> 
      </tr>
      <tr>
        <td >Q28</td> 
        <td >{{__('questions.Q28')}}</td> 
        <td id="QNo28">{{$questions[0]->Q28}}</td> 
      </tr>
      <tr>
        <td >Q33</td> 
        <td >{{__('questions.Q33')}}</td> 
        <td id="QNo33">{{$questions[0]->Q33}}</td> 
      </tr>
      <tr>
        <td >Q38</td> 
        <td >{{__('questions.Q38')}}</td> 
        <td id="QNo38">{{$questions[0]->Q38}}</td> 
      </tr>
      <tr>
        <td >Q43</td> 
        <td >{{__('questions.Q43')}}</td> 
        <td id="QNo43">{{$questions[0]->Q43}}</td> 
      </tr>
      <tr>
        <td >Q48</td> 
        <td >{{__('questions.Q48')}}</td> 
        <td id="QNo48">{{$questions[0]->Q48}}</td> 
      </tr>
  
     
     
    </tbody>
  </table>
      <div id="QuestionChart3"></div>

     </div>
     <div id="tab4" class="tab-pane fade">
     
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{__('result.QuestionNumber')}}</th>
        <th>{{__('result.CConceptualThinking')}}</th>
        <th>{{__('result.ScoreLable')}} </th>
      </tr>

   </thead>
    <tbody>
       <tr>
        <td >Q4</td> 
        <td >{{__('questions.Q4')}}</td> 
        <td id="QNo4">{{$questions[0]->Q4}}</td> 
      </tr>
      <tr>
        <td >Q9</td> 
        <td >{{__('questions.Q9')}}</td> 
        <td id="QNo9">{{$questions[0]->Q9}}</td> 
      </tr>
      <tr>
        <td >Q14</td> 
        <td >{{__('questions.Q14')}}</td> 
        <td id="QNo14">{{$questions[0]->Q14}}</td> 
      </tr>
      <tr>
        <td >Q19</td> 
        <td >{{__('questions.Q19')}}</td> 
        <td id="QNo19">{{$questions[0]->Q19}}</td> 
      </tr>
      <tr>
        <td >Q24</td> 
        <td >{{__('questions.Q24')}}</td> 
        <td id="QNo24">{{$questions[0]->Q24}}</td> 
      </tr>
      <tr>
        <td >Q29</td> 
        <td >{{__('questions.Q29')}}</td> 
        <td id="QNo29">{{$questions[0]->Q29}}</td> 
      </tr>
      <tr>
        <td >Q34</td> 
        <td >{{__('questions.Q34')}}</td> 
        <td id="QNo34">{{$questions[0]->Q34}}</td> 
      </tr>
      <tr>
        <td >Q39</td> 
        <td >{{__('questions.Q39')}}</td> 
        <td id="QNo39">{{$questions[0]->Q39}}</td> 
      </tr>
      <tr>
        <td >Q44</td> 
        <td >{{__('questions.Q44')}}</td> 
        <td id="QNo44">{{$questions[0]->Q44}}</td> 
      </tr>
      <tr>
        <td >Q49</td> 
        <td >{{__('questions.Q49')}}</td> 
        <td id="QNo49">{{$questions[0]->Q49}}</td> 
      </tr>
  
    </tbody>
  </table>
           <div id="QuestionChart4"></div>
     </div>

 <div id="tab5" class="tab-pane fade">
     
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>{{__('result.QuestionNumber')}}</th>
        <th>{{__('result.CSystemsThinking')}}</th>
        <th>{{__('result.ScoreLable')}} </th>
      </tr>
  
    </thead>
    <tbody>
       <tr>
        <td >Q5</td> 
        <td >{{__('questions.Q5')}}</td> 
        <td id="QNo5">{{$questions[0]->Q5}}</td> 
      </tr>
      <tr>
        <td >Q10</td> 
        <td >{{__('questions.Q10')}}</td> 
        <td id="QNo10">{{$questions[0]->Q10}}</td> 
      </tr>
      <tr>
        <td >Q15</td> 
        <td >{{__('questions.Q15')}}</td> 
        <td id="QNo15">{{$questions[0]->Q15}}</td> 
      </tr>
      <tr>
        <td >Q20</td> 
        <td >{{__('questions.Q20')}}</td> 
        <td id="QNo20">{{$questions[0]->Q20}}</td> 
      </tr>
      <tr>
        <td >Q25</td> 
        <td >{{__('questions.Q25')}}</td> 
        <td id="QNo25">{{$questions[0]->Q25}}</td> 
      </tr>
      <tr>
        <td >Q30</td> 
        <td >{{__('questions.Q30')}}</td> 
        <td id="QNo30">{{$questions[0]->Q30}}</td> 
      </tr>
      <tr>
        <td >Q35</td> 
        <td >{{__('questions.Q35')}}</td> 
        <td id="QNo35">{{$questions[0]->Q35}}</td> 
      </tr>
      <tr>
        <td >Q40</td> 
        <td >{{__('questions.Q40')}}</td> 
        <td id="QNo40">{{$questions[0]->Q40}}</td> 
      </tr>
      <tr>
        <td >Q45</td> 
        <td >{{__('questions.Q45')}}</td> 
        <td id="QNo45">{{$questions[0]->Q45}}</td> 
      </tr>
      <tr>
        <td >Q50</td> 
        <td >{{__('questions.Q50')}}</td> 
        <td id="QNo50">{{$questions[0]->Q50}}</td> 
      </tr>
  
     
    </tbody>
  </table>
                <div id="QuestionChart5"></div>
     </div>
     
 
  </div>
</div>

<!-- here is the third graph-->

                </div>
            </div>
        </div>
    </div>
</div>



  <script src="{{ asset('js/charts.js') }}"></script>
@endsection
