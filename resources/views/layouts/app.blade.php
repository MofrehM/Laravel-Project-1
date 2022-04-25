<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('msg.Mafaz') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<!-- Favicon -->
    <link href="{{asset('img/icon.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/all.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('lib/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('lib/css/w3.css')}}" rel="stylesheet">
    <link href="{{asset('lib/css/Ar-Style.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   <link href="{{ asset( __('msg.style')) }}" rel="stylesheet">

    

</head>
<body dir="{{ __('msg.SiteDir') }}">
  

            <header id="header" class="website-color">
    <div class="container">


        <div class="w3-hide-small">
            <div id="logo" class="{{ __('msg.logoDir') }} ">
                <a href="{{url('/')}}"><img class="w3-margin-top" height="50px" src="{{asset('img/lgo.png')}}" alt=""
                                          title=""/></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Bell</a></h1>-->

            </div>

            <nav class="nav social-nav {{ __('msg.logoDir') }} hidden-sm-down">

             
            </nav>
        </div>

        <div class="w3-hide-large w3-hide-medium">
            <div id="logo-small" class="{{ __('msg.logoDir') }}  ">
                <a href="{{url('/')}}"><img height="50px" src="{{asset('img/lgo.png')}}" alt="" title=""/></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Bell</a></h1>-->


            </div>
          
        </div>


        <nav id="nav-menu-container  ">
            <ul class="nav-menu " dir="">

     @guest
                            <li class="nav-item">
                              <a  class="nav-link" href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> English</a>

                            </li>  
                            <li class="nav-item">
                              <a  class="nav-link" href="{{ url('locale/ar') }}" ><i class="fa fa-language"></i> عربي</a>

                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('msg.Login') }}</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('survey') }}">{{ __('msg.Start') }}</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('result') }}">{{ __('msg.Result') }}</a>
                            </li>


                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('msg.Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                              <a  class="nav-link" href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> English</a>

                            </li>  
                            <li class="nav-item">
                              <a  class="nav-link" href="{{ url('locale/ar') }}" ><i class="fa fa-language"></i> عربي</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('survey') }}">{{ __('msg.Start') }}</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('result') }}">{{ __('msg.Result') }}</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('futurePlan') }}">{{ __('msg.futurePlan') }}</a>
                            </li>
                               <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">{{ __('msg.Profile') }}</a>
                            </li>
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('msg.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </nav>
        <!-- #nav-menu-container -->


    </div>
</header>
            @yield('content')


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
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/tether/js/tether.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/stickyjs/sticky.js')}}"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="{{asset('lib/js/custom.js')}}"></script>

<script src="{{asset('lib/contactform/contactform.js')}}"></script>

</body>
</html>
