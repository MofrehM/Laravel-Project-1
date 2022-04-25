<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(__('msg.Mafaz')); ?></title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<!-- Favicon -->
    <link href="<?php echo e(asset('img/icon.png')); ?>" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->

    <!-- Libraries CSS Files -->
    <link href="<?php echo e(asset('lib/font-awesome/css/all.min.css')); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo e(asset('lib/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/css/w3.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/css/Ar-Style.css')); ?>" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   <link href="<?php echo e(asset( __('msg.style'))); ?>" rel="stylesheet">

    

</head>
<body dir="<?php echo e(__('msg.SiteDir')); ?>">
  

            <header id="header" class="website-color">
    <div class="container">


        <div class="w3-hide-small">
            <div id="logo" class="<?php echo e(__('msg.logoDir')); ?> ">
                <a href="<?php echo e(url('/')); ?>"><img class="w3-margin-top" height="50px" src="<?php echo e(asset('img/lgo.png')); ?>" alt=""
                                          title=""/></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Bell</a></h1>-->

            </div>

            <nav class="nav social-nav <?php echo e(__('msg.logoDir')); ?> hidden-sm-down">

             
            </nav>
        </div>

        <div class="w3-hide-large w3-hide-medium">
            <div id="logo-small" class="<?php echo e(__('msg.logoDir')); ?>  ">
                <a href="<?php echo e(url('/')); ?>"><img height="50px" src="<?php echo e(asset('img/lgo.png')); ?>" alt="" title=""/></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Bell</a></h1>-->


            </div>
          
        </div>


        <nav id="nav-menu-container  ">
            <ul class="nav-menu " dir="">

     <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                              <a  class="nav-link" href="<?php echo e(url('locale/en')); ?>" ><i class="fa fa-language"></i> English</a>

                            </li>  
                            <li class="nav-item">
                              <a  class="nav-link" href="<?php echo e(url('locale/ar')); ?>" ><i class="fa fa-language"></i> عربي</a>

                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('msg.Login')); ?></a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('survey')); ?>"><?php echo e(__('msg.Start')); ?></a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('result')); ?>"><?php echo e(__('msg.Result')); ?></a>
                            </li>


                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('msg.Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item">
                              <a  class="nav-link" href="<?php echo e(url('locale/en')); ?>" ><i class="fa fa-language"></i> English</a>

                            </li>  
                            <li class="nav-item">
                              <a  class="nav-link" href="<?php echo e(url('locale/ar')); ?>" ><i class="fa fa-language"></i> عربي</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('survey')); ?>"><?php echo e(__('msg.Start')); ?></a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('result')); ?>"><?php echo e(__('msg.Result')); ?></a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('futurePlan')); ?>"><?php echo e(__('msg.futurePlan')); ?></a>
                            </li>
                               <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('profile')); ?>"><?php echo e(__('msg.Profile')); ?></a>
                            </li>
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->fname); ?> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('msg.Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
            </ul>
        </nav>
        <!-- #nav-menu-container -->


    </div>
</header>
            <?php echo $__env->yieldContent('content'); ?>


<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  $('.nav-tabs a').on('shown.bs.tab', function(event){
    var x = $(event.target).text();         // active tab
    var y = $(event.relatedTarget).text();  // previous tab
    $(".act span").text(x);
    $(".prev span").text(y);
  });
});
</script>
<!-- Required JavaScript Libraries -->
<script src="<?php echo e(asset('lib/superfish/superfish.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/tether/js/tether.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/counterup/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/stickyjs/sticky.js')); ?>"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="<?php echo e(asset('lib/js/custom.js')); ?>"></script>

<script src="<?php echo e(asset('lib/contactform/contactform.js')); ?>"></script>

</body>
</html>
<?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/layouts/app.blade.php ENDPATH**/ ?>