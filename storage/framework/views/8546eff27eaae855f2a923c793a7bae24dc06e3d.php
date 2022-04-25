<?php $__env->startSection('content'); ?>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
 <div class="card-header"> <h4 class="pull-left"></div>
             
 <div class="card-header"> <h4 class="pull-left"><?php echo e(__('msg.ProfileHeader')); ?></h4> <a class="pull-right btn btn-info btn-lg" href="<?php echo e(url('/Update_Profile_Page')); ?>">Update Profile</a></div>

   

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
               <?php if( session()->has('SuccessMessage') ): ?>
                 <h3 class="alert alert-success alert-dismissable"><?php echo e(session()->get('SuccessMessage')); ?></h3>
                <?php endif; ?>

<br>
<br><hr>


<div class="text-center center-block">
 
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home"><?php echo e(__('msg.Dashboard')); ?></a></li>
    <li><a href="#menu1"><?php echo e(__('msg.ProfileDetails')); ?></a></li>
    <li><a href="#menu2"><?php echo e(__('msg.ChangePassword')); ?></a></li>
    <li><a href="#menu3"><?php echo e(__('msg.PLogout')); ?></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3><?php echo e(__('msg.profileWellcome')); ?><?php echo e(Auth::user()->fname); ?></h3>
      
<div class="card text-center center-block">
  <img src="<?php echo e(asset('img/mm.png')); ?>" alt="Avatar"  style="width:100px;">
  <div class="text-center center-block">
    <h4><b> <?php echo e(Auth::user()->fname); ?>  <?php echo e(Auth::user()->lname); ?> </b></h4> 
    <p> <?php echo e(Auth::user()->email); ?> </p> 
  </div>
</div>

    </div>
    <div id="menu1" class="tab-pane fade <?php echo e(__('msg.ProfileDir')); ?>">
      <h3 class="text-center"><?php echo e(__('msg.ProfileDetail')); ?></h3>
   
<div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.FirstName')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->fname); ?></div>
    </div>
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.LastName')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->lname); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Email')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->email); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Employer')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->employer); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Age')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->age); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Gender')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->gender); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Sector')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->sector); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Education')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->education); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.Purposesforevaluation')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->purposes); ?></div>
    </div>

  
  <div class="panel panel-info">
      <div class="panel-heading"><?php echo e(__('msg.JobLevel')); ?></div>
      <div class="panel-body"><?php echo e(Auth::user()->job_level); ?></div>
    </div>

  





    </div>
    <div id="menu2" class="tab-pane fade">
      <h3><?php echo e(__('msg.resetPass')); ?></h3>
      <div>
<br>
          <?php if(Route::has('password.request')): ?>
             
              <a class="btn btn-warning btn-lg" href="<?php echo e(url('/ResetPasswordRedirect')); ?>">
                  <?php echo e(__('msg.changepass')); ?>

               </a>
          <?php endif; ?>
      </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3> <?php echo e(__('msg.clkLotout')); ?></h3>
      <div>
         <a class="btn btn-danger btn-lg" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('msg.Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/profile.blade.php ENDPATH**/ ?>