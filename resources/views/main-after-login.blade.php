@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
 <div class="card-header"> <h4 class="pull-left"> {{ __('msg.StartYourExam') }}</h4> <a class="pull-right btn btn-info btn-lg" href="{{url('/start-now')}}">{{ __('msg.Startbtn') }}</a></div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<br>
<br><hr>



<div class="  " dir="rtl" style="{{ __('msg.inlineStyleArabic') }}">
  <h2 class="header-label">ملاحظات هامة قبل البدء  </h2>
  <ul class="list-group " >
    <li class="list-group-item"> <h4>
• هذا التقييم خاص.  ولا يطلع عليه أحد سوى الشخص محل التقييم - صاحب الحساب.     </h4></li>
    <li class="list-group-item"><h4>
      • هذا التقييم لم يوضع من اجل الحصول على مكاسب وظيفة.
          </h4></li>
    <li class="list-group-item"><h4>• إن الهدف الأساسي من هذا التقييم:
      <ul>
        <li>  زيادة وعي المستفيد بمكان القوة وفرص التطوير لديه. </li>
        <li> وضع خطة لتحقيق الاستفادة القصوى من مكامن القوة وإثراء فرص التطوير.</li>
      </ul>
          </h4></li>
    <li class="list-group-item"><h4>
      • يفقد هذا التقييم قيمته ومصداقيته متى فقد الشخص محل التقييم الصدق مع ذاته. 
      </h4></li>
<li class="list-group-item"><h4>
  • ليس من حق أحد الاطلاع على هذا تقرير الا الشخص محل التقييم.  كما ان له الحق في مشاركة نتائج التقييم مع من يراه مناسبا على أن يتحمل هو مسؤوليه ذلك.
      </h4></li>
<li class="list-group-item"><h4>
  • يشمل هذا التقييم على خمس جدارات قيادية أساسية تم اختيارها بعناية لدعم عملية التطوير الذاتي للقادة: </h4></li>
  </ul>


<div class="  " dir="rtl" style="{{ __('msg.inlineStyleArabic') }}">
   <h2 class="header-label">تعريف الكفاءات والسمات القيادية:</h2>
 <h3 class="numberdCompentancyLabel"> 1. الأداء الموجه والمركز (Focused Drive)</h3>
  <ul class="list-group " >
    <li class="list-group-item"> <h4>
      المهارة على التركيز على هدف وتحسين قدراتك لتحقيق ذلك الهدف. توازن بين المكونات التالية:
      <ul>
        <li> التركيز: القدرة على تحديد الهدف او رؤيا مهمه وتوجيه الجهود لمناطق محدده لتعزيز تلك الرؤيا او الهدف.</li>
         <li>  إدارة: القدرة على الالتزام والمواصلة والمثابرة والتضحية عند الحاجة واستنفاذ الطاقة التفاني والبذل لتحقيق مستوى اعلى من الأداء.</li>
      </ul>
    </h4></li>
    
  </ul>
</div>


<div class="  " dir="rtl" style="{{ __('msg.inlineStyleArabic') }}">
  <h3 class="numberdCompentancyLabel">2.  الذكاء العاطفي (Emotional Intelligence)  </h3>
  <ul class="list-group " >
    <li class="list-group-item"> <h4>
      الكفاءة في فهم وإدارة مشاعرك ومشاعر الاخرين بأسلوب يزرع الثقة ويحفز ويلهم ويور ويحسن فاعليه المجموعة.
موازنة بين المكونات التالية:

      <ul>
        <li> الفهم والادراك: القدرة على قراءة عواطف وأفكار الاخرين عن طريق الوعي ومهارات التحليل.</li>
        <li> النضوج العاطفي: القدرة على ضبط المشاعر والتعامل مع الضغط بأسلوب يعزز الثقة ويحفز ويرفع من فاعلية الفريق.</li>
      </ul>
    </h4></li>
    
  </ul>
</div>


<div class="  " dir="rtl" style="{{ __('msg.inlineStyleArabic') }}">
  <h3 class="numberdCompentancyLabel">3.  التأثير المبني على الثقة ( Building Trust/ Enabling Others)  </h3>
  <ul class="list-group " >
    <li class="list-group-item"> <h4>
      كفاءة كسب الثقة وإعطاء الثقة للأخرين ليمكنهم من النجاح. بالتوازن بين المكونات:
      <ul>
        <li>الالتزام: القدرة على كسب ثقة الاخرين بالتقيد بالوعود والتمسك بالمعايير والمبادئ الأخلاقية العالية وبناء اهداف وقيم مشتركة.</li>
          <li> التمكين: القدرة على مساعدة  الاخرين للوصول لمستويات اعلى في الأداء عن طريق الثقة والتفويض والمشاركة والكوتشنج (التوجيه).</li>

      </ul>
    </h4></li>
    
  </ul>
</div>


<div class="  " dir="rtl" style="{{ __('msg.inlineStyleArabic') }}">
  <h3 class="numberdCompentancyLabel">4.  التفكير الاستدلالي والتصويري ( Conceptual Thinking)  </h3>
  <ul class="list-group " >
    <li class="list-group-item"> <h4>
القدرة على ابتكار واختيار أفكار إبداعية ووضع اهداف استراتيجية للمؤسسة. بالتوازن بين المكونات التالية:      <ul>
        <li> الابداع والابتكار: القدرة على خلق وتحسين الأفكار والمنتجات والخدمات التي توصل للحد الأدنى من النجاح.</li>
        <li> الصورة الكبيرة: القدرة على رؤية جميع القوى والاحداث والكيانات والناس المؤثرين او المتأثرين بالحالة التي بين ايدينا</li>
      </ul>
    </h4></li>
    
  </ul>
</div>


<div class="  " dir="rtl" style="{{ __('msg.inlineStyleArabic') }}">
  <h3 class="numberdCompentancyLabel"> 5. التفكير المنظومي (Systems Thinking)</h3>
  <ul class="list-group " >
    <li class="list-group-item"> <h4>
       الكفاءة على توصيل الأنظمة\سير العمل والاحداث بدقه وانتظام. وتوازن بين المكونات التالية:
      <ul>
        <li>الانضباط الفكري: القدرة على التنقيب والبحث في حالات غامضة والبدائل بأسلوب يبلور الأفكار ويجعلها تعمل او تمارس.</li>
        <li>هيئة الإجراءات: القدرة على زيادة التعلم والأداء بتصميم وتوصيل الإجراءات ببعضها وتطبيقها.</li>
      </ul>
    </h4></li>
    
  </ul>
</div>
</div>



<div>  <a class="pull-right btn btn-info btn-lg" href="{{url('/start-now')}}">{{ __('msg.Startbtn') }}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
