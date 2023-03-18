<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="خبر فوری,خبر,اخبار,آخرین اخبار,خبرخوان,جستجوگر خبر,تازه ترین اخبار,جستجوگر اخبار,اخبار ایران,اخبار ورزشی,اخبار اقتصادی,اخبار سیاسی,باماخبر,باما خبر" />

    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fonts/fontawesome/css/all.css')}}"  rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />


    <link href="{{asset('css/ticker.css')}}" rel="stylesheet" />

      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175912897-1"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-175912897-1');
      </script>


      <script>
          !function(e,t,n){e.yektanetAnalyticsObject=n,e[n]=e[n]||function(){e[n].q.push(arguments)},e[n].q=e[n].q||[];var a=t.getElementsByTagName("head")[0],r=new Date,c="https://cdn.yektanet.com/superscript/DC3PpRk3/native-bamakhabar.ir-12119/yn_pub.js?v="+r.getFullYear().toString()+"0"+r.getMonth()+"0"+r.getDate()+"0"+r.getHours(),s=t.createElement("link");s.rel="preload",s.as="script",s.href=c,a.appendChild(s);var l=t.createElement("script");l.async=!0,l.src=c,a.appendChild(l)}(window,document,"yektanet");
      </script>

  </head>
  <body>
  @include('sweetalert::alert')
  <script src="/vendor/sweetalert/sweetalert.all.js"></script>

  <main class="container-fluid">
        @include('master.header')
        @include('master.navbarTop')

        <div class="row" id="newsticker">
            <div class="col-12" dir="rtl">
                <div class="ticker-container">
                    <div class="ticker-caption">
                        <p>مهمترین اخبار</p>
                    </div>
                    <ul>
                        @foreach($news_special as $special)
                        <div>
                            <li><span> {{$special->title}} &ndash; <a href="/news/{{$special->shortlink}}">ادامه خبر</a></span></li>
                        </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12" dir="rtl">
            @if (session('msg'))
                <div class="alert alert-success">
                    <p>{{ session('msg') }}</p>
                </div>
            @endif
        </div>


        <div class="card" id="adv_top">
           <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                   <div id='mediaad-BsHe'></div>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                   <div id='mediaad-xvPN'></div>
               </div>
               <div class="col-12">
                   <div id='mediaad-rlFU'></div>
               </div>
           </div>
        </div>


        <!-- NOTIFICATION BOX -->
        <div class="row">
            <div class="col-12">
                <div id='mediaad-KSZH'></div>
            </div>
            <div class="col-12">
                <div id="pos-notification-13742"></div>
            </div>
        </div>



        <div class="row" dir="rtl" id="contents">
            <!-- ******************************* Content **********************************-->
            @yield('content')
            <!-- End Contents -->
        </div>

        @include('master.footer')
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}" ></script>
    <script src="{{asset('js/popper.min.js')}}" ></script>
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script>
        $('#content_news *').removeAttr('class').removeAttr('style').removeAttr('id');
        $('#content_news img').addClass('img-fluid');

    </script>

    <script src="{{asset('js/ticker.js')}}"></script>

  </body>
</html>
