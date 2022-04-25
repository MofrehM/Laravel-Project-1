<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php if( session()->has('message') ): ?>
                 <h3 class="alert alert-success alert-dismissable"><?php echo e(session()->get('message')); ?></h3>
                <?php endif; ?>
                <h3 class="card-header"><?php echo e(__('FuturePlan.FuturePlanHead')); ?></h3>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>




<!--Table content start-->

<div class="">
 
   <form class="form-horizontal" action="/addPlan" method="post">
                            <?php echo csrf_field(); ?>
  <div class="table-responsive-sm">          
  <table class="table table-bordered">
     <thead>
  <div class="form-group">  
  <tr>
  <th>
    <label class="" for="name"><?php echo e(__('FuturePlan.NameLFM')); ?></label>
  </th>
  <td colspan="4">
    <input type="text" class="form-control input-lg <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="name" placeholder="Your Name" name="name"  value="<?php echo e(old('name')); ?>"  autocomplete="name" >
                               <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </td>
  </tr>
  </div>
  <tr>
  <th><label class="" for="level"><?php echo e(__('FuturePlan.LEVEL')); ?> </label> </th>
  <td colspan="4">
    <input type="text" class="form-control input-lg <?php if ($errors->has('level')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('level'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="level" placeholder="Enter Level" name="level"  value="<?php echo e(old('level')); ?>"  autocomplete="level" >
                              <?php if ($errors->has('level')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('level'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
  </tr>  
  
   <tr>
  <th><label class="" for="DevObj"><?php echo e(__('FuturePlan.DevelopmentObjective')); ?> </label></th>
  <td colspan="4"><input type="text" class="form-control input-lg <?php if ($errors->has('DevObj')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('DevObj'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="DevObj" placeholder="Development Object" name="DevObj"  value="<?php echo e(old('DevObj')); ?>"  autocomplete="DevObj" >
                              <?php if ($errors->has('DevObj')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('DevObj'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
  </tr> 
  
     </thead>
   <tbody>
    <tr>
 <th ><label class="" for="AreaDev"><?php echo e(__('FuturePlan.AreacompetencytoDevelop')); ?></label> </th>
 <th><label class="" for="purpose"><?php echo e(__('FuturePlan.PURPOSE')); ?> </label> </th>
 <th><label class="" for="priority"> <?php echo e(__('FuturePlan.PRIORITY')); ?>  </label> </th>
 <th><label class="" for="activity"><?php echo e(__('FuturePlan.ActivitiesActionStepstoDeveloptheCompetency')); ?> </label>  </th>
 <th><label class="" for="success"><?php echo e(__('FuturePlan.SuccessCriteriameasureKPIforsuccess')); ?></label>  </th>
 </tr>
 
 <tr>
 <td rowspan="5"><textarea rows="13" class="form-control input-sm <?php if ($errors->has('AreaDev')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('AreaDev'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="AreaDev" placeholder="Text" name="AreaDev"  value="<?php echo e(old('AreaDev')); ?>"  autocomplete="AreaDev" ></textarea>
                              <?php if ($errors->has('AreaDev')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('AreaDev'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
 <td rowspan="5"><textarea rows="13" class="form-control input-sm <?php if ($errors->has('purpose')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('purpose'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="purpose" placeholder="Text" name="purpose"  value="<?php echo e(old('purpose')); ?>"  autocomplete="purpose" ></textarea> 
                              <?php if ($errors->has('purpose')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('purpose'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
 <td rowspan="5">
<div class="col-md-12">
   <div class="form-group row">
                         
            <select id="priority"  class=" input-sm <?php if ($errors->has('priority')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('priority'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="priority" value="<?php echo e(old('priority')); ?>"  autocomplete="priority" autofocus >
               <option class=" small" value=""><?php echo e(__('FuturePlan.Select')); ?></option>
                <option value="HIGH"><?php echo e(__('FuturePlan.HIGH')); ?></option>
                <option value="MEDIUM"><?php echo e(__('FuturePlan.MEDIUM')); ?></option>
                <option value="LOW"><?php echo e(__('FuturePlan.LOW')); ?></option>
                  </select>

          <?php if ($errors->has('priority')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('priority'); ?>
                 <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                 </span>
             <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div></div>
           </td>
 </td>
  <td><input type="text" class="form-control <?php if ($errors->has('activity1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity1'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="activity" placeholder="The Activity" name="activity1"  value="<?php echo e(old('activity1')); ?>"  autocomplete="activity1"  >
                              <?php if ($errors->has('activity1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity1'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
  <td><input type="text" class="form-control <?php if ($errors->has('success1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success1'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="success" placeholder="Success Criteria" name="success1"  value="<?php echo e(old('success1')); ?>"  autocomplete="success1" > 
                              <?php if ($errors->has('success1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success1'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
 </tr>
 
 <tr>

 <td><input type="text" class="form-control <?php if ($errors->has('activity2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity2'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="activity2" placeholder="The Activity" name="activity2"  value="<?php echo e(old('activity2')); ?>"  autocomplete="activity2" > 
                              <?php if ($errors->has('activity2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity2'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
 <td><input type="text" class="form-control <?php if ($errors->has('success2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success2'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="success2" placeholder="Success Criteria" name="success2"  value="<?php echo e(old('success2')); ?>"  autocomplete="success2" > 
                              <?php if ($errors->has('success2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success2'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
</tr>

<tr>
<td><input type="text" class="form-control <?php if ($errors->has('activity3')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity3'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="activity3" placeholder="The Activity" name="activity3"  value="<?php echo e(old('activity3')); ?>"  autocomplete="activity3" >
                              <?php if ($errors->has('activity3')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity3'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
<td><input type="text" class="form-control <?php if ($errors->has('success3')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success3'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="success3" placeholder="Success Criteria" name="success3"  value="<?php echo e(old('success3')); ?>"  autocomplete="success3" >
                              <?php if ($errors->has('success3')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success3'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>

</tr>

<tr>
<td><input type="text" class="form-control <?php if ($errors->has('activity4')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity4'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="activity4" placeholder="The Activity" name="activity4"  value="<?php echo e(old('activity4')); ?>"  autocomplete="activity4" >
                              <?php if ($errors->has('activity4')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity4'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
<td><input type="text" class="form-control <?php if ($errors->has('success4')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success4'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="success4" placeholder="Success Criteria" name="success4"  value="<?php echo e(old('success4')); ?>"  autocomplete="success4" >
                              <?php if ($errors->has('success4')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success4'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
</tr>

<tr>
<td><input type="text" class="form-control <?php if ($errors->has('activity5')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity5'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="activity5" placeholder="The Activity" name="activity5"  value="<?php echo e(old('activity5')); ?>"  autocomplete="activity5" >
                              <?php if ($errors->has('activity5')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('activity5'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
<td><input type="text" class="form-control <?php if ($errors->has('success5')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success5'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="success5" placeholder="Success Criteria" name="success5"  value="<?php echo e(old('success5')); ?>"  autocomplete="success5" >
                              <?php if ($errors->has('success5')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('success5'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
</tr>
</tbody>

     <tfoot>
  
   
  <tr>
  <th><label class="" for="CurrentScore"><?php echo e(__('FuturePlan.CurrentScore')); ?></label> </th>
  <td colspan="2">

<input type="number" min="0" max="30" class="form-control <?php if ($errors->has('CurrentScore')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('CurrentScore'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="CurrentScore" placeholder="Current Score" name="CurrentScore"  value="<?php echo e(old('CurrentScore')); ?>"  autocomplete="CurrentScore" > 
                              <?php if ($errors->has('CurrentScore')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('CurrentScore'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </td>
 </td>
   <th><label class="" for="DesiredScore"><?php echo e(__('FuturePlan.DesiredScore')); ?></label> </th>
  <td ><input type="number" min="0" max="30" class="form-control <?php if ($errors->has('DesiredScore')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('DesiredScore'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="DesiredScore" placeholder="Desired Score" name="DesiredScore"  value="<?php echo e(old('DesiredScore')); ?>"  autocomplete="DesiredScore" > 
                              <?php if ($errors->has('DesiredScore')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('DesiredScore'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
  </tr>
  


  <tr>
  <th><label class="" for="date"><?php echo e(__('FuturePlan.DateInput')); ?></label> </th>
  <td colspan="2"><input type="date" class="form-control <?php if ($errors->has('date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="date" placeholder="The Date" name="date"  value="<?php echo e(old('date')); ?>"  autocomplete="date" > 
                              <?php if ($errors->has('date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('date'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
   <th><label class="" for="DiscussedDate"><?php echo e(__('FuturePlan.DiscussedwithCoachInput')); ?></label> </th>
  <td ><input type="date" class="form-control <?php if ($errors->has('DiscussedDate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('DiscussedDate'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="DiscussedDate" placeholder="Enter title" name="DiscussedDate"  value="<?php echo e(old('DiscussedDate')); ?>"  autocomplete="DiscussedDate" > 
                              <?php if ($errors->has('DiscussedDate')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('DiscussedDate'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?></td>
 </td>
  </tr>
  
  
     </tfoot>



  </table>
  </div>
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-binary"><?php echo e(__('FuturePlan.Submit')); ?></button>
      </div>
    </div>
</form>
</div>

<!-- table content end-->
 



<div style="background-color:#d26028cc; color:#fff;text-align:center;"> <hr style="height:3px;color:gray;background-color:gray">
    <h4><?php echo e(__('FuturePlan.YourPreviousPlans')); ?></h4>
    <hr style="height:3px;color:gray;background-color:gray">
</div>

<!--Table content start-->
 <?php $__currentLoopData = $FuturePlanData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
  <table class="table table-bordered">
     <thead>
  <div class="form-group">  
  <tr>
  <th>
    <label class="" for="f"><?php echo e(__('FuturePlan.NameLFM')); ?></label>
  </th>
  <td colspan="4"><?php echo e($subData->name); ?></td>
  </tr>
  </div>
  <tr>
  <th><label class="" for=""><?php echo e(__('FuturePlan.LEVEL')); ?></label> </th>
  <td colspan="4"><?php echo e($subData->level); ?> </tr>  
  
   <tr>
  <th><label class="" for="d"><?php echo e(__('FuturePlan.DevelopmentObjective')); ?></label></th>
  <td colspan="4"><?php echo e($subData->DevObj); ?> </td>
  </tr> 
  
     </thead>
   <tbody>
    <tr>
 <th ><label class="" for="f"><?php echo e(__('FuturePlan.AreacompetencytoDevelop')); ?></label> </th>
 <th><label class="" for=""><?php echo e(__('FuturePlan.PURPOSE')); ?></label> </th>
 <th><label class="" for=""><?php echo e(__('FuturePlan.PRIORITY')); ?></label> </th>
 <th><label class="" for=""><?php echo e(__('FuturePlan.ActivitiesActionStepstoDeveloptheCompetency')); ?></label>  </th>
 <th><label class="" for=""><?php echo e(__('FuturePlan.SuccessCriteriameasureKPIforsuccess')); ?></label>  </th>
 </tr>
 
 <tr>
 <td rowspan="5"><?php echo e($subData->AreaDev); ?> </td>
 <td rowspan="5"><?php echo e($subData->purpose); ?></td>
 </td>
 <td rowspan="5"><?php echo e($subData->priority); ?></td>
 </td>
  <td><?php echo e($subData->activity1); ?></td>
  <td><?php echo e($subData->success1); ?></td>
 </tr>
 
 <tr>

 <td><?php echo e($subData->activity2); ?></td>
 <td><?php echo e($subData->success2); ?></td>
</tr>

<tr>
<td><?php echo e($subData->activity3); ?> </td>
<td><?php echo e($subData->success3); ?> </td>

</tr>

<tr>
<td><?php echo e($subData->activity4); ?> </td>
<td><?php echo e($subData->success4); ?> </td>
</tr>

<tr>
<td><?php echo e($subData->activity5); ?></td>
<td><?php echo e($subData->success5); ?> </td>
</tr>
</tbody>

     <tfoot>
       
  <tr>
  <th><label class="" for=" "><?php echo e(__('FuturePlan.CurrentScore')); ?></label> </th>
  <td colspan="2"><?php echo e($subData->CurrentScore); ?></td>
   <th><label class="" for=" "><?php echo e(__('FuturePlan.DesiredScore')); ?> </label> </th>
  <td ><?php echo e($subData->DesiredScore); ?> </td>
  </tr>
  
  <tr>
  <th><label class="" for=" "><?php echo e(__('FuturePlan.DateInput')); ?></label> </th>
  <td colspan="2"><?php echo e($subData->date); ?> </td>
   <th><label class="" for=" "><?php echo e(__('FuturePlan.DiscussedwithCoachInput')); ?> </label> </th>
  <td ><?php echo e($subData->DiscussedDate); ?> </td>
  </tr>
  
  
     </tfoot>



  </table>
   <hr style="height:3px;color:gray;background-color:gray">
    <hr style="height:3px;color:gray;background-color:gray">
     
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- table content end-->
 

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/future_plan.blade.php ENDPATH**/ ?>