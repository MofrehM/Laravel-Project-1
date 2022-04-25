<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php if( session()->has('message') ): ?>
                 <h3 class="alert alert-success alert-dismissable"><?php echo e(session()->get('message')); ?></h3>
                <?php endif; ?>
                
 <div class="card-header"> <h4 class="pull-left"><?php echo e(__('result.YourResultis')); ?></h4> <a class="pull-right btn btn-info btn-lg" href="<?php echo e(url('/detailed_scores')); ?>"><?php echo e(__('result.DetailedScore')); ?></a></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>


<h2><?php echo e(__('result.FinallResult')); ?></h2>
<div id="mainChartID" dir="<?php echo e(__('result.ChartDir')); ?>"></div>
<br>
<br><hr>

<div class="">
  <p><?php echo e(__('result.ResultHeader')); ?></p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><?php echo e(__('result.FocusedDrive')); ?></a></li>
    <li><a data-toggle="tab" href="#menu1"><?php echo e(__('result.EmotionalIntelligence')); ?></a></li>
    <li><a data-toggle="tab" href="#menu2"><?php echo e(__('result.BuildingTrustEnablingOthers')); ?></a></li>
    <li><a data-toggle="tab" href="#menu3"><?php echo e(__('result.ConceptualThinking')); ?></a></li>
    <li><a data-toggle="tab" href="#menu4"><?php echo e(__('result.SystemsThinking')); ?></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
 <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo e(__('result.ActualScore')); ?></th>
        <th><?php echo e(__('result.Average')); ?></th>
        <th><?php echo e(__('result.MaxScore')); ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual1"><?php echo e($F); ?></td>
        <td id="avg1"><?php echo e($AF); ?></td>
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
        <th><?php echo e(__('result.ActualScore')); ?></th>
        <th><?php echo e(__('result.Average')); ?></th>
        <th><?php echo e(__('result.MaxScore')); ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual2"><?php echo e($E); ?></td>
        <td id="avg2"><?php echo e($AE); ?></td>
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
        <th><?php echo e(__('result.ActualScore')); ?></th>
        <th><?php echo e(__('result.Average')); ?></th>
        <th><?php echo e(__('result.MaxScore')); ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual3"><?php echo e($B); ?></td>
        <td id="avg3"><?php echo e($AB); ?></td>
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
        <th><?php echo e(__('result.ActualScore')); ?></th>
        <th><?php echo e(__('result.Average')); ?></th>
        <th><?php echo e(__('result.MaxScore')); ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual4"><?php echo e($S); ?></td>
        <td id="avg4"><?php echo e($AS); ?></td>
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
        <th><?php echo e(__('result.ActualScore')); ?></th>
        <th><?php echo e(__('result.Average')); ?></th>
        <th><?php echo e(__('result.MaxScore')); ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="actual5"><?php echo e($C); ?></td>
        <td id="avg5"><?php echo e($AC); ?></td>
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



  <script src="<?php echo e(asset('js/charts2.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/result.blade.php ENDPATH**/ ?>