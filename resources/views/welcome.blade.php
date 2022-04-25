@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ __('msg.Mafaz') }} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


</head>

<body>

<!-- Page Content
  ================================================== -->
<!-- Hero -->
<!-- /Hero -->

<!-- Header -->

<!-- #header -->


<!-- Hero -->

<section class="hero" >
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <a class="hero-brand  logo-name" href="{{url('/')}}" title="الرئيسية"><img width="300px" src="{{asset('img/mmm.png')}}"></a>
            </div>
        </div>
        <div class="col-md-1 col-lg-1"></div>
        <div class="col-md-10 col-lg-10 ">
            <h1 class="homeheaderMain">

      {{__('msg.Homeheader')}}      </h1>

            <p class="tagline Txt-First">
 {{__('msg.MainSubHeader1')}} 


<br>
 {{__('msg.MainSubHeader2')}} 

            </p>
            <div class="clearfix"></div>
            <a class="btn-go btn w3-teal w3-hover-white btn-lg w3-hover-text-teal btn-ghost btn-full" href="{{url('/home')}}"> {{__('msg.StartNow')}}  </a>
        </div>
    </div>

</section>
<!-- /Hero -->


<!-- About -->
<section class="about" id="about">
    <div class="container text-center">

        <br>
        <br>
        <p><strong>
            </strong></p>


        <div class="row stats-row">
              <br>
            <br>

            <div class="row">

                <div class="feature-col col-lg-4 col-xs-12">
                    <div class="card card-block text-center w3-text-white">
                        <div>
                            
                        </div>

                        <div>
                            <h3 > <i class="fa-3x far fa-clock"></i></h3>
                            <h3 class="cicle-features ">
                               {{__('msg.TheClock')}}
                            </h3>
                            <br>

                            <p class="w3-text-black w3-medium">
                   {{__('msg.TheClock1')}}                 </p>
                        </div>
                    </div>
                </div>

                <div class="feature-col col-lg-4 col-xs-12">
                    <div class="card card-block text-center w3-text-white">
                        <div>
                          
                        </div>

                        <div>
                   <h3 > <i class="fa-3x far fa-compass"></i></h3>

                            <h3 class="cicle-features ">
                            {{__('msg.TheCompass')}}
                                
                            </h3>
                            <br>

                            <p class="w3-text-black w3-medium">
                           {{__('msg.TheCompass1')}}

                             </p>
                        </div>
                    </div>
                </div>

                <div class="feature-col col-lg-4 col-xs-12">
                    <div class="card card-block text-center w3-text-white">
                        <div>
                           
                        </div>

                        <div>
                            <h3 > <i class="fa-3x fas fa-anchor"></i></h3>
                            <h3 class="cicle-features ">
                              {{__('msg.TheHelm')}}
                               
                            </h3>
                            <br>
                            <p class="w3-text-black w3-medium">
                            {{__('msg.TheHelm1')}}

                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
<!-- /About -->
<!-- Parallax -->


<!-- /Parallax -->
<!-- Features -->



<!-- /Team -->
<!-- : footer -->

<footer class="site-footer">
    <div class="bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-xs-12  text-center">
                    <p class="copyright-text">
                     mafazconsult.com      ©    {{__('msg.AllRightsReserved')}}
                    </p>
                    <div class="credits">

                    </div>
                </div>


            </div>
        </div>
    </div>
</footer>
<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

</body>
</html>
@endsection