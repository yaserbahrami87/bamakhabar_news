<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="باماخبر سایت هوشمند خبری است که دارای موتور جستجوگر اینترنتی هوشمند است و میتوانید آخرین اخبار جمع آوری شده از سایت های خبری را در آن ببینید"/>
    <meta name="keywords" content="خبر فوری,خبر,اخبار,آخرین اخبار,خبرخوان,جستجوگر خبر,تازه ترین اخبار,جستجوگر اخبار,اخبار ایران,اخبار ورزشی,اخبار اقتصادی,اخبار سیاسی,باماخبر,باما خبر" />

    <title>سایت</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fonts/fontawesome/css/all.css')}}"  rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    <link href="{{asset('css/ticker.css')}}" rel="stylesheet" />
  </head>
  <body>
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
{{--                        @foreach($news as $item)--}}
{{--                        <div>--}}
{{--                            <li><span> {{$item->title}} &ndash; <a href="/news/{{$item->shortlink}}">ادامه خبر</a></span></li>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
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
