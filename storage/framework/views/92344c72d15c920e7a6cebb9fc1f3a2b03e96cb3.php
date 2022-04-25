<?php $__env->startSection('content'); ?>

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php if( session()->has('message') ): ?>
                 <h3 class="alert alert-success alert-dismissable"><?php echo e(session()->get('message')); ?></h3>
                <?php endif; ?>
                <h4 class="card-header"><?php echo e(__('result.YourResultis')); ?></h4>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>



<!--here is the third graph-->

<div class="" dir="<?php echo e(__('msg.SiteDir')); ?>">
  <p><?php echo e(__('result.FullResult')); ?></p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#tab1"><?php echo e(__('result.FocusedDrive')); ?></a></li>
    <li><a data-toggle="tab" href="#tab2"><?php echo e(__('result.EmotionalIntelligence')); ?></a></li>
    <li><a data-toggle="tab" href="#tab3"><?php echo e(__('result.BuildingTrustEnablingOthers')); ?></a></li>
    <li><a data-toggle="tab" href="#tab4"><?php echo e(__('result.ConceptualThinking')); ?></a></li>
    <li><a data-toggle="tab" href="#tab5"><?php echo e(__('result.SystemsThinking')); ?></a></li>
  </ul>

  <div class="tab-content">
    <div id="tab1" class="tab-pane fade in active">
      
 <table class="table table-bordered" >
    <thead>
      <tr>
        <th><?php echo e(__('result.QuestionNumber')); ?></th>
        <th><?php echo e(__('result.CFocusedDrive')); ?></th>
        <th><?php echo e(__('result.ScoreLable')); ?> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >Q1</td> 
        <td ><?php echo e(__('questions.Q1')); ?></td> 
        <td id="QNo1"><?php echo e($questions[0]->Q1); ?></td> 
      </tr>
      <tr>
        <td >Q6</td> 
        <td ><?php echo e(__('questions.Q6')); ?></td> 
        <td id="QNo6"><?php echo e($questions[0]->Q6); ?></td> 
      </tr>
      <tr>
        <td >Q11</td> 
        <td ><?php echo e(__('questions.Q11')); ?></td> 
        <td id="QNo11"><?php echo e($questions[0]->Q11); ?></td> 
      </tr>
      <tr>
        <td >Q16</td> 
        <td ><?php echo e(__('questions.Q16')); ?></td> 
        <td id="QNo16"><?php echo e($questions[0]->Q16); ?></td> 
      </tr>
      <tr>
        <td >Q21</td> 
        <td ><?php echo e(__('questions.Q21')); ?></td> 
        <td id="QNo21"><?php echo e($questions[0]->Q21); ?></td> 
      </tr>
      <tr>
        <td >Q26</td> 
        <td ><?php echo e(__('questions.Q26')); ?></td> 
        <td id="QNo26"><?php echo e($questions[0]->Q26); ?></td> 
      </tr>
      <tr>
        <td >Q31</td> 
        <td ><?php echo e(__('questions.Q31')); ?></td> 
        <td id="QNo31"><?php echo e($questions[0]->Q31); ?></td> 
      </tr>
      <tr>
        <td >Q36</td> 
        <td ><?php echo e(__('questions.Q36')); ?></td> 
        <td id="QNo36"><?php echo e($questions[0]->Q36); ?></td> 
      </tr>
      <tr>
        <td >Q41</td> 
        <td ><?php echo e(__('questions.Q41')); ?></td> 
        <td id="QNo41"><?php echo e($questions[0]->Q41); ?></td> 
      </tr>
      <tr>
        <td >Q46</td> 
        <td ><?php echo e(__('questions.Q46')); ?></td> 
        <td id="QNo46"><?php echo e($questions[0]->Q46); ?></td> 
      </tr>
  
     
    </tbody>
  </table>
    <div id="QuestionChart1"></div>
 </div>
  
    <div id="tab2" class="tab-pane fade">
      
 <table class="table table-bordered">
    <thead>

        <tr>
        <th><?php echo e(__('result.QuestionNumber')); ?></th>
        <th><?php echo e(__('result.CEmotionalIntelligence')); ?></th>
        <th><?php echo e(__('result.ScoreLable')); ?> </th>
      </tr>
       
   
    </thead>
    <tbody>
       <tr>
        <td >Q2</td> 
        <td ><?php echo e(__('questions.Q2')); ?></td> 
        <td id="QNo2"><?php echo e($questions[0]->Q2); ?></td> 
      </tr>
      <tr>
        <td >Q7</td> 
        <td ><?php echo e(__('questions.Q7')); ?></td> 
        <td id="QNo7"><?php echo e($questions[0]->Q7); ?></td> 
      </tr>
      <tr>
        <td >Q12</td> 
        <td ><?php echo e(__('questions.Q12')); ?></td> 
        <td id="QNo12"><?php echo e($questions[0]->Q12); ?></td> 
      </tr>
      <tr>
        <td >Q17</td> 
        <td ><?php echo e(__('questions.Q17')); ?></td> 
        <td id="QNo17"><?php echo e($questions[0]->Q17); ?></td> 
      </tr>
      <tr>
        <td >Q22</td> 
        <td ><?php echo e(__('questions.Q22')); ?></td> 
        <td id="QNo22"><?php echo e($questions[0]->Q22); ?></td> 
      </tr>
      <tr>
        <td >Q27</td> 
        <td ><?php echo e(__('questions.Q27')); ?></td> 
        <td id="QNo27"><?php echo e($questions[0]->Q27); ?></td> 
      </tr>
      <tr>
        <td >Q32</td> 
        <td ><?php echo e(__('questions.Q32')); ?></td> 
        <td id="QNo32"><?php echo e($questions[0]->Q32); ?></td> 
      </tr>
      <tr>
        <td >Q37</td> 
        <td ><?php echo e(__('questions.Q37')); ?></td> 
        <td id="QNo37"><?php echo e($questions[0]->Q37); ?></td> 
      </tr>
      <tr>
        <td >Q42</td> 
        <td ><?php echo e(__('questions.Q42')); ?></td> 
        <td id="QNo42"><?php echo e($questions[0]->Q42); ?></td> 
      </tr>
      <tr>
        <td >Q47</td> 
        <td ><?php echo e(__('questions.Q47')); ?></td> 
        <td id="QNo47"><?php echo e($questions[0]->Q47); ?></td> 
      </tr>
  
    
     
     
    </tbody>
  </table>
    <div id="QuestionChart2"></div>

      </div>
    <div id="tab3" class="tab-pane fade">
     
   
<table class="table table-bordered">
    <thead>
       
      <tr>
        <th><?php echo e(__('result.QuestionNumber')); ?></th>
        <th><?php echo e(__('result.CBuildingTrustEnablingOthers')); ?></th>
        <th><?php echo e(__('result.ScoreLable')); ?> </th>
      </tr>
     
    </thead>
    <tbody>
         <tr>
        <td >Q3</td> 
        <td ><?php echo e(__('questions.Q3')); ?></td> 
        <td id="QNo3"><?php echo e($questions[0]->Q3); ?></td> 
      </tr>
      <tr>
        <td >Q8</td> 
        <td ><?php echo e(__('questions.Q8')); ?></td> 
        <td id="QNo8"><?php echo e($questions[0]->Q8); ?></td> 
      </tr>
      <tr>
        <td >Q13</td> 
        <td ><?php echo e(__('questions.Q13')); ?></td> 
        <td id="QNo13"><?php echo e($questions[0]->Q13); ?></td> 
      </tr>
      <tr>
        <td >Q18</td> 
        <td ><?php echo e(__('questions.Q18')); ?></td> 
        <td id="QNo18"><?php echo e($questions[0]->Q18); ?></td> 
      </tr>
      <tr>
        <td >Q23</td> 
        <td ><?php echo e(__('questions.Q23')); ?></td> 
        <td id="QNo23"><?php echo e($questions[0]->Q23); ?></td> 
      </tr>
      <tr>
        <td >Q28</td> 
        <td ><?php echo e(__('questions.Q28')); ?></td> 
        <td id="QNo28"><?php echo e($questions[0]->Q28); ?></td> 
      </tr>
      <tr>
        <td >Q33</td> 
        <td ><?php echo e(__('questions.Q33')); ?></td> 
        <td id="QNo33"><?php echo e($questions[0]->Q33); ?></td> 
      </tr>
      <tr>
        <td >Q38</td> 
        <td ><?php echo e(__('questions.Q38')); ?></td> 
        <td id="QNo38"><?php echo e($questions[0]->Q38); ?></td> 
      </tr>
      <tr>
        <td >Q43</td> 
        <td ><?php echo e(__('questions.Q43')); ?></td> 
        <td id="QNo43"><?php echo e($questions[0]->Q43); ?></td> 
      </tr>
      <tr>
        <td >Q48</td> 
        <td ><?php echo e(__('questions.Q48')); ?></td> 
        <td id="QNo48"><?php echo e($questions[0]->Q48); ?></td> 
      </tr>
  
     
     
    </tbody>
  </table>
      <div id="QuestionChart3"></div>

     </div>
     <div id="tab4" class="tab-pane fade">
     
 <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo e(__('result.QuestionNumber')); ?></th>
        <th><?php echo e(__('result.CConceptualThinking')); ?></th>
        <th><?php echo e(__('result.ScoreLable')); ?> </th>
      </tr>

   </thead>
    <tbody>
       <tr>
        <td >Q4</td> 
        <td ><?php echo e(__('questions.Q4')); ?></td> 
        <td id="QNo4"><?php echo e($questions[0]->Q4); ?></td> 
      </tr>
      <tr>
        <td >Q9</td> 
        <td ><?php echo e(__('questions.Q9')); ?></td> 
        <td id="QNo9"><?php echo e($questions[0]->Q9); ?></td> 
      </tr>
      <tr>
        <td >Q14</td> 
        <td ><?php echo e(__('questions.Q14')); ?></td> 
        <td id="QNo14"><?php echo e($questions[0]->Q14); ?></td> 
      </tr>
      <tr>
        <td >Q19</td> 
        <td ><?php echo e(__('questions.Q19')); ?></td> 
        <td id="QNo19"><?php echo e($questions[0]->Q19); ?></td> 
      </tr>
      <tr>
        <td >Q24</td> 
        <td ><?php echo e(__('questions.Q24')); ?></td> 
        <td id="QNo24"><?php echo e($questions[0]->Q24); ?></td> 
      </tr>
      <tr>
        <td >Q29</td> 
        <td ><?php echo e(__('questions.Q29')); ?></td> 
        <td id="QNo29"><?php echo e($questions[0]->Q29); ?></td> 
      </tr>
      <tr>
        <td >Q34</td> 
        <td ><?php echo e(__('questions.Q34')); ?></td> 
        <td id="QNo34"><?php echo e($questions[0]->Q34); ?></td> 
      </tr>
      <tr>
        <td >Q39</td> 
        <td ><?php echo e(__('questions.Q39')); ?></td> 
        <td id="QNo39"><?php echo e($questions[0]->Q39); ?></td> 
      </tr>
      <tr>
        <td >Q44</td> 
        <td ><?php echo e(__('questions.Q44')); ?></td> 
        <td id="QNo44"><?php echo e($questions[0]->Q44); ?></td> 
      </tr>
      <tr>
        <td >Q49</td> 
        <td ><?php echo e(__('questions.Q49')); ?></td> 
        <td id="QNo49"><?php echo e($questions[0]->Q49); ?></td> 
      </tr>
  
    </tbody>
  </table>
           <div id="QuestionChart4"></div>
     </div>

 <div id="tab5" class="tab-pane fade">
     
 <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo e(__('result.QuestionNumber')); ?></th>
        <th><?php echo e(__('result.CSystemsThinking')); ?></th>
        <th><?php echo e(__('result.ScoreLable')); ?> </th>
      </tr>
  
    </thead>
    <tbody>
       <tr>
        <td >Q5</td> 
        <td ><?php echo e(__('questions.Q5')); ?></td> 
        <td id="QNo5"><?php echo e($questions[0]->Q5); ?></td> 
      </tr>
      <tr>
        <td >Q10</td> 
        <td ><?php echo e(__('questions.Q10')); ?></td> 
        <td id="QNo10"><?php echo e($questions[0]->Q10); ?></td> 
      </tr>
      <tr>
        <td >Q15</td> 
        <td ><?php echo e(__('questions.Q15')); ?></td> 
        <td id="QNo15"><?php echo e($questions[0]->Q15); ?></td> 
      </tr>
      <tr>
        <td >Q20</td> 
        <td ><?php echo e(__('questions.Q20')); ?></td> 
        <td id="QNo20"><?php echo e($questions[0]->Q20); ?></td> 
      </tr>
      <tr>
        <td >Q25</td> 
        <td ><?php echo e(__('questions.Q25')); ?></td> 
        <td id="QNo25"><?php echo e($questions[0]->Q25); ?></td> 
      </tr>
      <tr>
        <td >Q30</td> 
        <td ><?php echo e(__('questions.Q30')); ?></td> 
        <td id="QNo30"><?php echo e($questions[0]->Q30); ?></td> 
      </tr>
      <tr>
        <td >Q35</td> 
        <td ><?php echo e(__('questions.Q35')); ?></td> 
        <td id="QNo35"><?php echo e($questions[0]->Q35); ?></td> 
      </tr>
      <tr>
        <td >Q40</td> 
        <td ><?php echo e(__('questions.Q40')); ?></td> 
        <td id="QNo40"><?php echo e($questions[0]->Q40); ?></td> 
      </tr>
      <tr>
        <td >Q45</td> 
        <td ><?php echo e(__('questions.Q45')); ?></td> 
        <td id="QNo45"><?php echo e($questions[0]->Q45); ?></td> 
      </tr>
      <tr>
        <td >Q50</td> 
        <td ><?php echo e(__('questions.Q50')); ?></td> 
        <td id="QNo50"><?php echo e($questions[0]->Q50); ?></td> 
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



  <script src="<?php echo e(asset('js/charts.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/detailed_scores.blade.php ENDPATH**/ ?>