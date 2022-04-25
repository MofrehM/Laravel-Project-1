<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('RegisterLogin.VerifyYourEmailAddress')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                         <?php echo e(__('RegisterLogin.Afreshverificationlinkhasbeensent')); ?>

                        </div>
                    <?php endif; ?>
<?php echo e(__('RegisterLogin.Beforeproceedingpleasecheckemail')); ?>

                  <?php echo e(__('RegisterLogin.Ifyoudidnotreceivetheemail')); ?> ,
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('GET')); ?>

                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        <?php echo e(__('RegisterLogin.clickheretorequestanother')); ?>

                </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/auth/verify.blade.php ENDPATH**/ ?>