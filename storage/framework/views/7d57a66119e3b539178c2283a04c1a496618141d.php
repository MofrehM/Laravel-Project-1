<?php $__env->startSection('content'); ?>
<div class="container" dir="<?php echo e(__('msg.SiteDir')); ?>" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="progress">
   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
  aria-valuemin="0" aria-valuemax="100" style="width:0%">
  <?php echo e(__('questions.completeSuccess')); ?>

  </div>
</div>
</div>

                <div class="card-header"> 
                 <h2 id="header-questions-start"><?php echo e(__('questions.header')); ?></h2>
                 <h2 id="header-questions-done" class="alert-success w3-padding"><?php echo e(__('questions.headerSuccess')); ?></h2>
                </div>

                <div class="card-body">
                  
<div class="">
 <div id="questions-done-message"  class="w3-panel w3-padding w3-pale-blue w3-bottombar w3-topbar w3-border-blue">
    <h3 style="<?php echo e(__('questions.HeaderQuestionDoneMSGStyle')); ?>"><?php echo e(__('questions.HeaderQuestionDoneMSG')); ?></h3>
  </div>

  <form action="/sendQ" method="post">
    <?php echo e(csrf_field()); ?>

    <!--Qustion Sipirator Open 1-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q1')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA1" dir="rtl">
        <input type="radio" class="form-check-input margin-lg" id="radioQA1" name="Q1" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB1">
        <input type="radio" class="form-check-input" id="radioQB1" name="Q1" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC1">
        <input type="radio" class="form-check-input" id="radioQC1" name="Q1" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 1-->

<!--Qustion Sipirator Open 2-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q2')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA2">
        <input type="radio" class="form-check-input" id="radioQA2" name="Q2" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB2">
        <input type="radio" class="form-check-input" id="radioQB2" name="Q2" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC2">
        <input type="radio" class="form-check-input" id="radioQC2" name="Q2" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 2-->

<!--Qustion Sipirator Open 3-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q3')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA3">
        <input type="radio" class="form-check-input" id="radioQA3" name="Q3" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB3">
        <input type="radio" class="form-check-input" id="radioQB3" name="Q3" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC3">
        <input type="radio" class="form-check-input" id="radioQC3" name="Q3" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 3-->

<!--Qustion Sipirator Open 4-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q4')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA4">
        <input type="radio" class="form-check-input" id="radioQA4" name="Q4" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB4">
        <input type="radio" class="form-check-input" id="radioQB4" name="Q4" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC4">
        <input type="radio" class="form-check-input" id="radioQC4" name="Q4" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 4-->

<!--Qustion Sipirator Open 5-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q5')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA5">
        <input type="radio" class="form-check-input" id="radioQA5" name="Q5" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB5">
        <input type="radio" class="form-check-input" id="radioQB5" name="Q5" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC5">
        <input type="radio" class="form-check-input" id="radioQC5" name="Q5" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 5-->

<!--Qustion Sipirator Open 6-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q6')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA6">
        <input type="radio" class="form-check-input" id="radioQA6" name="Q6" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB6">
        <input type="radio" class="form-check-input" id="radioQB6" name="Q6" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC6">
        <input type="radio" class="form-check-input" id="radioQC6" name="Q6" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 6-->

<!--Qustion Sipirator Open 7-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q7')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA7">
        <input type="radio" class="form-check-input" id="radioQA7" name="Q7" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB7">
        <input type="radio" class="form-check-input" id="radioQB7" name="Q7" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC7">
        <input type="radio" class="form-check-input" id="radioQC7" name="Q7" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 7-->

<!--Qustion Sipirator Open 8-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q8')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA8">
        <input type="radio" class="form-check-input" id="radioQA8" name="Q8" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB8">
        <input type="radio" class="form-check-input" id="radioQB8" name="Q8" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC8">
        <input type="radio" class="form-check-input" id="radioQC8" name="Q8" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 8-->

<!--Qustion Sipirator Open 9-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q9')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA9">
        <input type="radio" class="form-check-input" id="radioQA9" name="Q9" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB9">
        <input type="radio" class="form-check-input" id="radioQB9" name="Q9" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC9">
        <input type="radio" class="form-check-input" id="radioQC9" name="Q9" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 9-->

<!--Qustion Sipirator Open 10-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q10')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA10">
        <input type="radio" class="form-check-input" id="radioQA10" name="Q10" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB10">
        <input type="radio" class="form-check-input" id="radioQB10" name="Q10" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC10">
        <input type="radio" class="form-check-input" id="radioQC10" name="Q10" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 10-->

<!--Qustion Sipirator Open 11-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q11')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA11">
        <input type="radio" class="form-check-input" id="radioQA11" name="Q11" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB11">
        <input type="radio" class="form-check-input" id="radioQB11" name="Q11" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC11">
        <input type="radio" class="form-check-input" id="radioQC11" name="Q11" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 11-->

<!--Qustion Sipirator Open 12-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q12')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA12">
        <input type="radio" class="form-check-input" id="radioQA12" name="Q12" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB12">
        <input type="radio" class="form-check-input" id="radioQB12" name="Q12" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC12">
        <input type="radio" class="form-check-input" id="radioQC12" name="Q12" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 12-->

<!--Qustion Sipirator Open 13-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q13')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA13">
        <input type="radio" class="form-check-input" id="radioQA13" name="Q13" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB13">
        <input type="radio" class="form-check-input" id="radioQB13" name="Q13" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC13">
        <input type="radio" class="form-check-input" id="radioQC13" name="Q13" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 13-->

<!--Qustion Sipirator Open 14-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q14')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA14">
        <input type="radio" class="form-check-input" id="radioQA14" name="Q14" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB14">
        <input type="radio" class="form-check-input" id="radioQB14" name="Q14" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC14">
        <input type="radio" class="form-check-input" id="radioQC14" name="Q14" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 14-->

<!--Qustion Sipirator Open 15-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q15')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA15">
        <input type="radio" class="form-check-input" id="radioQA15" name="Q15" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB15">
        <input type="radio" class="form-check-input" id="radioQB15" name="Q15" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC15">
        <input type="radio" class="form-check-input" id="radioQC15" name="Q15" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 15-->

<!--Qustion Sipirator Open 16-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q16')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA16">
        <input type="radio" class="form-check-input" id="radioQA16" name="Q16" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB16">
        <input type="radio" class="form-check-input" id="radioQB16" name="Q16" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC16">
        <input type="radio" class="form-check-input" id="radioQC16" name="Q16" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 16-->

<!--Qustion Sipirator Open 17-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q17')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA17">
        <input type="radio" class="form-check-input" id="radioQA17" name="Q17" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB17">
        <input type="radio" class="form-check-input" id="radioQB17" name="Q17" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC17">
        <input type="radio" class="form-check-input" id="radioQC17" name="Q17" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 17-->

<!--Qustion Sipirator Open 18-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q18')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA18">
        <input type="radio" class="form-check-input" id="radioQA18" name="Q18" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB18">
        <input type="radio" class="form-check-input" id="radioQB18" name="Q18" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC18">
        <input type="radio" class="form-check-input" id="radioQC18" name="Q18" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 18-->

<!--Qustion Sipirator Open 19-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q19')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA19">
        <input type="radio" class="form-check-input" id="radioQA19" name="Q19" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB19">
        <input type="radio" class="form-check-input" id="radioQB19" name="Q19" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC19">
        <input type="radio" class="form-check-input" id="radioQC19" name="Q19" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 19-->

<!--Qustion Sipirator Open 20-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q20')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA20">
        <input type="radio" class="form-check-input" id="radioQA20" name="Q20" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB20">
        <input type="radio" class="form-check-input" id="radioQB20" name="Q20" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC20">
        <input type="radio" class="form-check-input" id="radioQC20" name="Q20" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 20-->

<!--Qustion Sipirator Open 21-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q21')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA21">
        <input type="radio" class="form-check-input" id="radioQA21" name="Q21" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB21">
        <input type="radio" class="form-check-input" id="radioQB21" name="Q21" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC21">
        <input type="radio" class="form-check-input" id="radioQC21" name="Q21" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 21-->

<!--Qustion Sipirator Open 22-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q22')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA22">
        <input type="radio" class="form-check-input" id="radioQA22" name="Q22" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB22">
        <input type="radio" class="form-check-input" id="radioQB22" name="Q22" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC22">
        <input type="radio" class="form-check-input" id="radioQC22" name="Q22" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 22-->

<!--Qustion Sipirator Open 23-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q23')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA23">
        <input type="radio" class="form-check-input" id="radioQA23" name="Q23" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB23">
        <input type="radio" class="form-check-input" id="radioQB23" name="Q23" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC23">
        <input type="radio" class="form-check-input" id="radioQC23" name="Q23" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 23-->

<!--Qustion Sipirator Open 24-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q24')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA24">
        <input type="radio" class="form-check-input" id="radioQA24" name="Q24" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB24">
        <input type="radio" class="form-check-input" id="radioQB24" name="Q24" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC24">
        <input type="radio" class="form-check-input" id="radioQC24" name="Q24" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 24-->

<!--Qustion Sipirator Open 25-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q25')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA25">
        <input type="radio" class="form-check-input" id="radioQA25" name="Q25" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB25">
        <input type="radio" class="form-check-input" id="radioQB25" name="Q25" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC25">
        <input type="radio" class="form-check-input" id="radioQC25" name="Q25" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 25-->

<!--Qustion Sipirator Open 26-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q26')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA26">
        <input type="radio" class="form-check-input" id="radioQA26" name="Q26" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB26">
        <input type="radio" class="form-check-input" id="radioQB26" name="Q26" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC26">
        <input type="radio" class="form-check-input" id="radioQC26" name="Q26" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 26-->

<!--Qustion Sipirator Open 27-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q27')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA27">
        <input type="radio" class="form-check-input" id="radioQA27" name="Q27" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB27">
        <input type="radio" class="form-check-input" id="radioQB27" name="Q27" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC27">
        <input type="radio" class="form-check-input" id="radioQC27" name="Q27" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 27-->

<!--Qustion Sipirator Open 28-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q28')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA28">
        <input type="radio" class="form-check-input" id="radioQA28" name="Q28" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB28">
        <input type="radio" class="form-check-input" id="radioQB28" name="Q28" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC28">
        <input type="radio" class="form-check-input" id="radioQC28" name="Q28" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 28-->

<!--Qustion Sipirator Open 29-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q29')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA29">
        <input type="radio" class="form-check-input" id="radioQA29" name="Q29" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB29">
        <input type="radio" class="form-check-input" id="radioQB29" name="Q29" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC29">
        <input type="radio" class="form-check-input" id="radioQC29" name="Q29" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 29-->

<!--Qustion Sipirator Open 30-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q30')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA30">
        <input type="radio" class="form-check-input" id="radioQA30" name="Q30" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB30">
        <input type="radio" class="form-check-input" id="radioQB30" name="Q30" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC30">
        <input type="radio" class="form-check-input" id="radioQC30" name="Q30" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 30-->
<!--Qustion Sipirator Open 31-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q31')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA31">
        <input type="radio" class="form-check-input" id="radioQA31" name="Q31" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB31">
        <input type="radio" class="form-check-input" id="radioQB31" name="Q31" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC31">
        <input type="radio" class="form-check-input" id="radioQC31" name="Q31" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 31-->

<!--Qustion Sipirator Open 32-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q32')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA32">
        <input type="radio" class="form-check-input" id="radioQA32" name="Q32" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB32">
        <input type="radio" class="form-check-input" id="radioQB32" name="Q32" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC32">
        <input type="radio" class="form-check-input" id="radioQC32" name="Q32" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 32-->

<!--Qustion Sipirator Open 33-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q33')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA33">
        <input type="radio" class="form-check-input" id="radioQA33" name="Q33" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB33">
        <input type="radio" class="form-check-input" id="radioQB33" name="Q33" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC33">
        <input type="radio" class="form-check-input" id="radioQC33" name="Q33" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 33-->

<!--Qustion Sipirator Open 34-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q34')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA34">
        <input type="radio" class="form-check-input" id="radioQA34" name="Q34" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB34">
        <input type="radio" class="form-check-input" id="radioQB34" name="Q34" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC34">
        <input type="radio" class="form-check-input" id="radioQC34" name="Q34" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 34-->

<!--Qustion Sipirator Open 35-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q35')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA35">
        <input type="radio" class="form-check-input" id="radioQA35" name="Q35" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB35">
        <input type="radio" class="form-check-input" id="radioQB35" name="Q35" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC35">
        <input type="radio" class="form-check-input" id="radioQC35" name="Q35" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 35-->

<!--Qustion Sipirator Open 36-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q36')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA36">
        <input type="radio" class="form-check-input" id="radioQA36" name="Q36" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB36">
        <input type="radio" class="form-check-input" id="radioQB36" name="Q36" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC36">
        <input type="radio" class="form-check-input" id="radioQC36" name="Q36" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 36-->

<!--Qustion Sipirator Open 37-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q37')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA37">
        <input type="radio" class="form-check-input" id="radioQA37" name="Q37" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB37">
        <input type="radio" class="form-check-input" id="radioQB37" name="Q37" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC37">
        <input type="radio" class="form-check-input" id="radioQC37" name="Q37" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 37-->

<!--Qustion Sipirator Open 38-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q38')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA38">
        <input type="radio" class="form-check-input" id="radioQA38" name="Q38" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB38">
        <input type="radio" class="form-check-input" id="radioQB38" name="Q38" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC38">
        <input type="radio" class="form-check-input" id="radioQC38" name="Q38" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 38-->

<!--Qustion Sipirator Open 39-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q39')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA39">
        <input type="radio" class="form-check-input" id="radioQA39" name="Q39" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB39">
        <input type="radio" class="form-check-input" id="radioQB39" name="Q39" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC39">
        <input type="radio" class="form-check-input" id="radioQC39" name="Q39" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 39-->

<!--Qustion Sipirator Open 40-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q40')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA40">
        <input type="radio" class="form-check-input" id="radioQA40" name="Q40" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB40">
        <input type="radio" class="form-check-input" id="radioQB40" name="Q40" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC40">
        <input type="radio" class="form-check-input" id="radioQC40" name="Q40" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 40-->

    <!--Qustion Sipirator Open 41-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q41')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA41">
        <input type="radio" class="form-check-input" id="radioQA41" name="Q41" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB41">
        <input type="radio" class="form-check-input" id="radioQB41" name="Q41" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC41">
        <input type="radio" class="form-check-input" id="radioQC41" name="Q41" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 41-->

<!--Qustion Sipirator Open 42-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q42')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA42">
        <input type="radio" class="form-check-input" id="radioQA42" name="Q42" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB42">
        <input type="radio" class="form-check-input" id="radioQB42" name="Q42" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC42">
        <input type="radio" class="form-check-input" id="radioQC42" name="Q42" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 42-->

<!--Qustion Sipirator Open 43-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q43')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA43">
        <input type="radio" class="form-check-input" id="radioQA43" name="Q43" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB43">
        <input type="radio" class="form-check-input" id="radioQB43" name="Q43" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC43">
        <input type="radio" class="form-check-input" id="radioQC43" name="Q43" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 43-->

<!--Qustion Sipirator Open 44-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q44')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA44">
        <input type="radio" class="form-check-input" id="radioQA44" name="Q44" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB44">
        <input type="radio" class="form-check-input" id="radioQB44" name="Q44" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC44">
        <input type="radio" class="form-check-input" id="radioQC44" name="Q44" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 44-->

<!--Qustion Sipirator Open 45-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q45')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA45">
        <input type="radio" class="form-check-input" id="radioQA45" name="Q45" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB45">
        <input type="radio" class="form-check-input" id="radioQB45" name="Q45" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC45">
        <input type="radio" class="form-check-input" id="radioQC45" name="Q45" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 45-->

<!--Qustion Sipirator Open 46-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q46')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA46">
        <input type="radio" class="form-check-input" id="radioQA46" name="Q46" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB46">
        <input type="radio" class="form-check-input" id="radioQB46" name="Q46" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC46">
        <input type="radio" class="form-check-input" id="radioQC46" name="Q46" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 46-->

<!--Qustion Sipirator Open47-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q47')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA47">
        <input type="radio" class="form-check-input" id="radioQA47" name="Q47" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB47">
        <input type="radio" class="form-check-input" id="radioQB47" name="Q47" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC47">
        <input type="radio" class="form-check-input" id="radioQC47" name="Q47" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 47-->

<!--Qustion Sipirator Open 48-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q48')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA48">
        <input type="radio" class="form-check-input" id="radioQA48" name="Q48" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB48">
        <input type="radio" class="form-check-input" id="radioQB48" name="Q48" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC48">
        <input type="radio" class="form-check-input" id="radioQC48" name="Q48" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 48-->

<!--Qustion Sipirator Open 49-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q49')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA49">
        <input type="radio" class="form-check-input" id="radioQA49" name="Q49" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB49">
        <input type="radio" class="form-check-input" id="radioQB49" name="Q49" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC49">
        <input type="radio" class="form-check-input" id="radioQC49" name="Q49" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 49-->

<!--Qustion Sipirator Open 50-->
    <div class="form-group questions">
      <label for="email"><?php echo e(__('questions.Q50')); ?></label>
      <div class="form-control" >
      <div class="form-check-inline">
      <label class="form-check-label" for="radioQA50">
        <input type="radio" class="form-check-input" id="radioQA50" name="Q50" value="1" required="" ><?php echo e(__('questions.QDontagree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQB50">
        <input type="radio" class="form-check-input" id="radioQB50" name="Q50" value="2" required="" ><?php echo e(__('questions.QAgree')); ?>

      </label>
    </div>
     <div class="form-check-inline">
      <label class="form-check-label" for="radioQC50">
        <input type="radio" class="form-check-input" id="radioQC50" name="Q50" value="3" required="" ><?php echo e(__('questions.QStronglyagree')); ?>

      </label>
    </div>
    </div>
    </div>
    <!--Qustion Sipirator Close 50-->
   <div>
<button type="button" class="<?php echo e(__('questions.NextPosition')); ?> btn btn-info btn-lg  " id="next"><?php echo e(__('questions.Next')); ?></button>
<button type="submit" class="<?php echo e(__('questions.NextPosition')); ?> btn btn-primary btn-lg " id="submit"><?php echo e(__('questions.Submit')); ?></button>

<button type="button" class="<?php echo e(__('questions.PrevPosition')); ?> btn btn-info btn-lg  " id="Prev"><?php echo e(__('questions.Prev')); ?></button>

   </div>
  </form>
</div>

<!--
<br>
<div id='nextQ'></div><br>
<div id='prevQ'></div>
-->

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$( document ).ready(function() {
 
    
 

//Store the total number of questions
var totalQuestions = 50;

//Set the current question to display to 1
var currentQuestion = 0;

//Store the selector in a variable.
//It is good practice to prefix jQuery selector variables with a $
$questions = $('.questions');

//Hide all the questions
$questions.hide();
$('#submit').hide();
$('#Prev').hide();
$('#header-questions-done').hide();
$('#questions-done-message').hide();

//Show the first question
$($questions.get(currentQuestion)).fadeIn();
//attach a click listener to the HTML element with the id of 'next'

var $currentRadio;

$('#next').click(function () {
   $currentRadio=currentQuestion+1;
var $QID='Q'+ $currentRadio; 
    if ($('input[name='+ $QID +']:checked').length) {
        var valeur=2*(currentQuestion+1);
$('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur);
$('.progress-bar').html(valeur+'<?php echo e(__('questions.completeSuccess')); ?>');
      $('#Prev').show();
      //fade out the current question,
     //putting a function inside of fadeOut calls that function 
     //immediately after fadeOut is completed, 
     //this is for a smoother transition animation
     $($questions.get(currentQuestion)).fadeOut(function () {

        //increment the current question by one
        currentQuestion = currentQuestion + 1;
//$('#nextQ').html('next='+currentQuestion);
        //if there are no more questions do stuff
        if (currentQuestion >= totalQuestions) {

           $('#next').hide(); 
           $('#Prev').hide(); 
           $('#header-questions-start').hide();

            $('#header-questions-done').show();
            $('#questions-done-message').show();
            $('#submit').show();

            //do stuff with the result

        } else {

            //otherwise show the next question
            $($questions.get(currentQuestion)).fadeIn();

        }
        //$('#next').prop('disabled', true);

    });
}else{
    alert('Sorry, But You Have to Select Answer!');
}
});
//Previous question Request
$('#Prev').click(function () {
    $currentRadio=currentQuestion+1;

var $QID='Q'+ $currentRadio; 
        var valeur=2*(currentQuestion-1);
$('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur);
$('.progress-bar').html(valeur+'<?php echo e(__('questions.completeSuccess')); ?>');
      $('#next').show();

      //fade out the current question,
     //putting a function inside of fadeOut calls that function 
     //immediately after fadeOut is completed, 
     //this is for a smoother transition animation
     $($questions.get(currentQuestion)).fadeOut(function () {

        //increment the current question by one
        currentQuestion = currentQuestion - 1;
         // alert(currentQuestion);
//$('#prevQ').html('prev='+currentQuestion);

        //if there are no more questions do stuff
        if (currentQuestion+1 >= totalQuestions) {
           $('#header-questions-start').show();

            $('#header-questions-done').hide();
            $('#questions-done-message').hide();
            $('#submit').hide();

            //do stuff with the result
          $($questions.get(currentQuestion)).fadeIn();

        } //if you are in the first question
       else if (currentQuestion <= 0) {
           $('#Prev').hide(); 
           $('#header-questions-start').show();

            $('#header-questions-done').hide();
            $('#questions-done-message').hide();
            $('#submit').hide();
          $($questions.get(currentQuestion)).fadeIn();
            //do stuff with the result

        } else {

            //otherwise show the next question
            $($questions.get(currentQuestion)).fadeIn();

        }
        //$('#next').prop('disabled', true);

    });

});


});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/survey.blade.php ENDPATH**/ ?>