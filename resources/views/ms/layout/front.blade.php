@php
    $lang_file = 'ms_layout';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="fb:pages" content="1883679205192840"/>
    <title> Master Suki Soup : Cambodia Master Suki Soup Restaurant </title>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1510500795650942";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language"
          content="en"/>
    <meta name="google" content="notranslate"/>
    <link rel="shortcut icon" href="{{URL::asset('/')}}favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('/')}}favicon.ico" type="image/x-icon">
    <meta name="title" content="@yield('title')"/>
    <meta name="keywords" content="MS, Suki, MS Restaurant, Cambodia Master Suki Soup Restaurant"/>
    <meta name="description"
          content="MS Restaurant : Cambodia Master Suki Soup Restaurant​​ - ភោជនីយដ្ឋានម៉ាស្ទ័រស៊ូគីស៊ុប"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description"
          content="MS Restaurant : Cambodia Master Suki Soup Restaurant​​ - ភោជនីយដ្ឋានម៉ាស្ទ័រស៊ូគីស៊ុប"/>
    <meta property="og:url" content="@yield('url')"/>
    <meta property="og:site_name"
          content="MS Restaurant : Cambodia Master Suki Soup Restaurant​​ - ភោជនីយដ្ឋានម៉ាស្ទ័រស៊ូគីស៊ុប"/>
    <meta property="og:image" content="{{URL::asset('/')}}ms200x200.png"/>


    <script src="{{URL::asset('/')}}ms/js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="{{URL::asset('/')}}ms/css/bootstrap-4/dist/js/bootstrap.min.js"></script>

    <link href="{{URL::asset('/')}}ms/css/bootstrap-4/dist/css/bootstrap.min.css?id=50" rel="stylesheet" type="text/css">

    <link href="{{URL::asset('/')}}ms/js/libs/fancybox/source/jquery.fancybox.css" rel="stylesheet"
          type="text/css">
    <link href="{{URL::asset('/')}}ms/css/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css">

    <link href="{{URL::asset('/')}}ms/css/main.css?v=11" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/')}}ms/css/main2.css?v=11" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/')}}ms/css/gnmenu.css" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/')}}ms/css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('/')}}ms/css/sweetalert.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('/')}}ms/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('/')}}ms/css/font-roboto.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
    <script src="{{URL::asset('/')}}ms/slide/jssor.slider-22.2.16.min.js" type="text/javascript"></script>

    @if(!is_m() || is_t())
        @section('style_css_slide_recommend')
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        @show
        @section('script_js_slide_recommend')
            <script src="{{URL::asset('ms/recommendslide/docs.min.js')}}"></script>
            <script src="{{URL::asset('ms/recommendslide/ie10-viewport-bug-workaround.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('ms/recommendslide/jssor.slider.mini.js')}}"></script>
            <script>
                jQuery(document).ready(function ($) {
                    var options = {
                        $AutoPlay: true,
                        $AutoPlaySteps: 1,
                        $Idle: 2000,
                        $PauseOnHover: 1,
                        $ArrowKeyNavigation: true,
                        $SlideEasing: $JssorEasing$.$EaseOutQuint,
                        $SlideDuration: 800,
                        $MinDragOffsetToSlide: 20,
                        $SlideSpacing: 0,
                        $Cols: 1,
                        $ParkingPosition: 0,
                        $UISearchMode: 1,
                        $PlayOrientation: 1,
                        $DragOrientation: 1,

                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$,
                            $ChanceToShow: 2,
                            $AutoCenter: 2,
                            $Steps: 1,
                            $Scale: false
                        },

                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$,
                            $ChanceToShow: 2,
                            $AutoCenter: 1,
                            $Steps: 1,
                            $Rows: 1,
                            $SpacingX: 12,
                            $SpacingY: 4,
                            $Orientation: 1,
                            $Scale: false
                        }
                    };
                    var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                    function ScaleSlider() {
                        var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                        if (parentWidth) {
                            jssor_slider1.$ScaleWidth(parentWidth - 30);
                        }
                        else
                            window.setTimeout(ScaleSlider, 30);
                    }

                    ScaleSlider();
                    $(window).bind("load", ScaleSlider);
                    $(window).bind("resize", ScaleSlider);
                    $(window).bind("orientationchange", ScaleSlider);
                });
            </script>
        @show
    @endif
</head>
<body >
@yield('layout-id')
<div class="hidden-lg-up logo-responsive">
    <a href="{{url('/home')}}">
        <img src="{{URL::asset('/')}}ms/img/responsive/logo.svg"

        srcset="{{URL::asset('/')}}ms/img/responsive/logo.svg"

        alt="triangle with all three sides equal"
        height="41"
        width="50"/>
    </a>
</div>
<ul class="gn-menu-main hidden-lg-up">
    <style>
        .gn-icon-menu.gn-selected .d2 {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            tranform: rotate(-45deg);
            margin-top: 28px;
        }
        .gn-icon-menu .d2 {
            margin-top: 31px;
            transition: 0.5s;
        }
        .gn-icon-menu .d1, .gn-icon-menu .d2 {
            display: block;
            width: 27px;
            height: 2px;
            background: #f16623;
            position: absolute;
            left: 16.5px;
            z-index: 1;
            -webkit-transition: -webkit-transform 0.2s;
            transition: transform 0.2s;
        }
    </style>
    <li class="menu-2-solid">
        <a class="gn-icon gn-icon-menu">
            <span class="d1"></span>
            <span class="d2"></span>
        </a>
    </li>
    <script>
        $(".gn-icon").click(function(){
            if ( $('.gn-icon').hasClass('gn-selected') ){

                $('.gn-icon').removeClass('gn-selected');

            }else{
                $(".gn-icon-menu").addClass("gn-selected");

            }

        });
    </script>

    <li class="gn-trigger">
        <style>
            #main-nav{float:left;
                clear:left;
                overflow-y: auto;
                overflow-x: hidden;
                list-style:none;
                width:100%;
                height:auto;
                font-size:12px;
                font-family:Arial, Verdana;
                text-align: left;
                font-weight:normal;
                border-top-width:2px;
                border-bottom-width:2px;
            }
            #main-nav a{font-weight:bold;text-decoration:none;}
            #main-nav li{line-height:40px;border-bottom:0px;}
            * html #main-nav li{line-height:26px;height:26px;}
            *:first-child+html #main-nav li{line-height:26px;height:26px;}
            #main-nav li a{display:block;padding-left:10px;color:#fff;font-weight:bold;}

            .mobiletoggle a{background-color:#f16623; font-size: 16px;}

            .mobiletoggle a:hover{background:#f17514; font-size: 16px;}

            #main-nav ul {
                list-style-type:none;
            }
            #main-nav ul li ul {
                display:none;
                margin-left:0;
                /*margin-bottom:9px;*/
                padding-left:0px;
            }
            #main-nav ul {
                margin-left:0;
                /*margin-bottom:9px;*/
            }
            #main-nav ul li:focus ul {
                display:block;
            }
            li[tabindex]>a {pointer-events:none;}
            li[tabindex]:before {
                content:'+';
                float:right;
                padding-right:0.5em;
                font-weight:bold;
                color:white;
                font-size:150%;
                line-height:40px;
            }
            li[tabindex]:focus:before {
                content:'-';
                font-size:150%;
            }
            li:focus {
                pointer-events:none;
            }
            li:focus ul li a {
                pointer-events:auto;
            }
        </style>


        <nav id="main-nav" class="gn-menu-wrapper animated fadeIn">
            <ul style="width: 100%">
                @if ( !session('customer_name'))
                    <li class="nav-lang-login-regis">
                        <div class="col-xs-4 p-a-0">

                            @php
                                $langs = \Backpack\LangFileManager\app\Models\Language::where('active',1)->get();
                            @endphp
                            @foreach($langs as $row)
                                <a href="{{url('/lang?lan'.'='.$row->abbr)}}" class="col-xs-6 text-right">
                                    <img src="{{asset($row->flag)}}" width="28" height="18" alt="">
                                </a>
                            @endforeach

                        </div>




                        <div class="col-xs-4 p-a-0 text-center" style="border-right: 1px solid #20c389;border-left: 1px solid #027646;height:50px">
                            <a href="{{url('/login')}}">
                                <i class="fa fa-unlock-alt" style="font-size: 1rem"></i> {{ _t('login',$lang_file) }}</a>
                        </div>
                        <div class="col-xs-4 p-a-0 text-center" style="border-left: 1px solid #027646;height:50px">
                            <a href="{{url('/register')}}">
                                <i class="fa fa-user" style="font-size: 1rem"></i> {{ _t('register',$lang_file)}}</a>
                        </div>
                    </li>
                @else
                    {{--======================= member login show master bar home page===============================--}}
                    <li class="nav-lang-login-regis">
                        <div class="col-xs-4 p-a-0 text-center switch-lang">
                            @php
                                $langs = \Backpack\LangFileManager\app\Models\Language::where('active',1)->get();
                            @endphp
                            @foreach($langs as $row)
                                <a href="{{url('/lang?lan'.'='.$row->abbr)}}" class="col-xs-6 text-right">
                                    <img src="{{asset($row->flag)}}" width="28" height="18" alt="">
                                </a>
                            @endforeach
                        </div>




                        <div class="col-xs-8 p-a-0 text-left p-l"
                             style="border-right: 1px solid #20c389;border-left: 1px solid #027646;height:50px">
                            <a class="customerUser" href="{{url('/customer/profile')}}">
                                <i class="fa fa-lock fa-fw" style="font-size: 1rem"></i>
                                {{session('customer_name')}}
                            </a>
                        </div>
                    </li>

                    <li class="mobiletoggle" tabindex="0"><a href="#" title="#">{{ _t('your_profile',$lang_file) }}</a>
                        <ul>
                            <li><a href="{{url('/customer/profile')}}" class="gn-icon">{{ _t('update',$lang_file) }}</a></li>
                            <li>
                                <a href="{{url('/customer/address-book')}}"
                                   class="gn-icon">{{ _t('manage_address_book',$lang_file) }}</a>
                            </li>
                            <li>
                                <a href="{{url('customer/order-info').'/'.Auth::id()}}"
                                   class="gn-icon">{{ _t('order_information',$lang_file) }}</a>
                            </li>

                            <li>
                                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}" class="gn-icon">{{ _t('logout',$lang_file) }}</a>
                            </li>
                        </ul>
                        <div class="line_end"></div>
                    </li>
                    {{--=======================end member login show master bar home page===============================--}}
                @endif
                @if(is_m() || is_t())
                    @include('ms.layout.front_mobile')
                @endif

                <li class="mobiletoggle" tabindex="0"><a href="#" title="#">{{ _t('about_ms',$lang_file) }}</a>
                    <ul>
                        <li><a href="{{url('/about')}}">{{ _t('history',$lang_file) }}</a></li>
                        <li><a href="{{url('/career')}}">{{ _t('career',$lang_file) }}</a></li>
                        <li><a href="{{url('/contact')}}">{{ _t('contact',$lang_file) }}</a></li>
                    </ul>
                    <div class="line_end"></div>
                </li>
                <li class="mobiletoggle" tabindex="0"><a href="#" title="#">{{ _t('concept',$lang_file) }}</a>
                    <ul>
                        <li><a href="{{url('/concept')}}">{{ _t('we_care_about_your_health',$lang_file) }}</a></li>
                        <li><a href="{{url('/concept')}}">{{ _t('excellent_source_of_protein',$lang_file) }}</a></li>
                    </ul>
                    <div class="line_end"></div>
                </li>
                <li class="mobiletoggle"><a href="{{url('/career')}}" title="#">{{ _t('career',$lang_file) }}</a></li>
                <li class="mobiletoggle"><a href="{{url('/promotion')}}" title="#">{{ _t('promotion',$lang_file) }}</a></li>
                <li class="mobiletoggle"><a href="{{url('/card')}}" title="#">{{ _t('ms_card',$lang_file) }}</a></li>
                <li class="mobiletoggle"><a href="{{url('/branch')}}" title="#">{{ _t('ms_branch',$lang_file) }}</a></li>
                <li class="mobiletoggle"><a href="{{url('/feedback')}}" title="#">{{ _t('feedback',$lang_file) }}</a></li>
            </ul>
        </nav>
    </li>

    <li class="cart" id="cart_items">
        <a class="animated ">
            <img src="{{URL::asset('/')}}ms/img/responsive/cart.svg" alt="" width="31" height="30">
            <span class="totalProduct totalqty1" style=" background: #f06927;
                border-radius: 50px;
                position: absolute;
                padding: 0 7px;
                font-size: 13px;
                bottom: 9%;
                right: 48%;"></span>
        </a>
    </li>


</ul>
@if(!is_m() || is_t())
    @include('ms.layout.front_desktop')
@endif
@if(is_m()|| is_t())
    @yield('mobile-slider')
    @yield('mobile-content')
@endif
@if(!is_m())
    @yield('home-slider')
@endif
{{--<!--========================================--}}
{{--=            Cart product lists            =--}}
{{--=========================================-->--}}
<div class="container hidden-lg-up cart_items_list animated">
    <div class="row">
        <h1 class="textHeaderMobile">{{ _t('shopping_cart',$lang_file) }}</h1>
        <div class="cart-list-responsive col-xs-12 full " style="zoom: 1;">
            <div class="row hidden-lg-up checkout-summary-header">

                <div class="col-xs-6 text-left">{{ _t('total',$lang_file) }}</div>
                <div class="col-xs-6 text-right"><span class="subtotalPrice"></span> $</div>
                <div class="col-xs-12">
                    <div class="checkout_line_end"></div>
                </div>

            </div>
            <div class="mobile-cart-detail">
            </div>
            <a class="btnRedResponsiveMedium  text-center m-t btnOrderMore"
               href="{{URL::asset('/menu/delivery')}}">{{ _t('continue_order',$lang_file) }}
            </a>
            @if ( !session('customer_name'))
                <a class="btnGreenResponsive text-center m-t"
                   href="{{url('/login')}}">{{ _t('confirm_order',$lang_file) }}
                </a>
            @else
                <a class="btnGreenResponsive text-center m-t"
                   href="{{url('/customer/checkout').'/'.session('customer_id')}}">{{ _t('confirm_order',$lang_file) }}
                </a>
            @endif
        </div>
    </div>
</div>
{{--<!--====  End of Cart product lists  ====-->--}}

{{--<!--========================================--}}
{{--=            Destop Home sub bar           =--}}
{{--=========================================-->--}}
@yield('tablet-slider')

@yield('home-sub-bar')

@section('map')
@show

<section class="yield-content">
    @yield('content')
    <div class="footer-content">
        <footer class="hidden-md-up">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer">
            <div class="container">
                <div class="row" id="navFooter">

                    <div class="col-xs-12">
                        <ul class="nav nav-tabs nav-justified hidden-sm-down">

                            <li class="nav-item" style="">
                                <div class="btnHome nav-link">
                                    <a href="{{url('/home')}}" title="MS Restaurant"><h3>{{ _t('home',$lang_file) }}</h3></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/about')}}" class="aboutFooter nav-link"><h4>{{ _t('about_ms',$lang_file) }}</h4>
                                </a>
                                <ul class="nav">
                                    <li><a href="{{url('/about')}}">- {{ _t('history',$lang_file) }}</a></li>
                                    <li><a href="{{url('/career')}}">- {{ _t('career',$lang_file) }}</a></li>
                                    <li><a href="{{url('/contact')}}">- {{ _t('contact',$lang_file) }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/branch')}}" class="branchFooter nav-link">
                                    <h4>{{ _t('ms_branch',$lang_file) }}</h4></a>
                                <ul class="nav">
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_bak_touk',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_sorya_6-8f',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_sovanna_4f',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_bokor',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_sothearos',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_tk_avenue',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('ms_rattana_plaza_3f',$lang_file) }}</a></li>
                                    <li><a href="{{url('/branch')}}">- {{ _t('view_more',$lang_file) }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/concept')}}" class="investorFooter nav-link"><h4>{{ _t('concept',$lang_file) }}</h4></a>
                                <ul class="nav">
                                    <li><a href="{{url('/concept')}}">- {{ _t('we_care_about_your_health',$lang_file) }}</a></li>
                                    <li><a href="{{url('/concept')}}">- {{ _t('excellent_source_of_protein',$lang_file) }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/career')}}" class="activityFooter nav-link">
                                    <h4>{{ _t('career',$lang_file) }}</h4></a>
                            </li>
                            <li class="nav-item" style="width:0.5%">
                                <a href="{{url('/promotion')}}" class="promnavFooterotionFooter nav-link">
                                    <h4>{{ _t('promotion',$lang_file) }}</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/menu/restaurant')}}" class="healthymenuFooter nav-link">
                                    <h4>{{ _t('menu',$lang_file) }}</h4></a>
                                <ul class="nav">
                                    <li><a href="{{url('/menu/restaurant')}}">- {{ _t('menu_in_restaurant',$lang_file) }}</a></li>
                                    <li><a href="{{url('/menu/delivery')}}">- {{ _t('online_delivery',$lang_file) }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/card')}}" class="cardFooter nav-link"><h4>{{ _t('ms_card',$lang_file) }}</h4></a>
                            </li>
                        </ul>



                        <div class="followfooterBox">
                            <span class="m-l-0">{{ _t('e_mail_exclusives',$lang_file) }}</span>
                            <div class="formEmailfooter">
                                <div class="input-append">


                                    <form id="formNewsletter" action="{{url('/email-exclusive')}}" method="POST"
                                          enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                            <input id="inputEmailNewsletter" type="email" name="email_exclusive"
                                                   placeholder="E-Mail Address">

                                            <span class="input-group-btn">
                                                 <button class="btn" id="btnNewsletter" type="submit" style="position: static !important;">
                                                     <span  style="position: static !important;">
                                                         <img src="{{URL::asset('/')}}ms/img/responsive/arrow-right.png"
                                                              class="btn-arrow-right" alt="">GO
                                                     </span>
                                                 </button>
                                            </span>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <p class="m-l-0">{{ _t('sign_up_to_receive_special_offers_and',$lang_file) }}
                                <br>{{ _t('promotions_from_ms_restaurants',$lang_file) }} </p>
                            <div class="listFollowUs">
                                <ul id="ullistFollowUs" class="nav nav-pills m-l-0">


                                    <li><span>{{ _t('follow_us',$lang_file) }}</span></li>

                                    <li><a class="followx-facebook"
                                           href="https://www.facebook.com/mastersukisoup/?hc_ref=SEARCH"
                                           target="_blank"> <img
                                                    src="{{URL::asset('ms/img/responsive/socials/facebook.png')}}"
                                                    style="text-indent: -9999px;width: 32px; height: 39px;">
                                        </a>
                                    </li>
                                    <li><a class="followx-facebook" href="https://youtu.be/ylsgofIBk0A"
                                           target="_blank"> <img
                                                    src="{{URL::asset('ms/img/responsive/socials/youtube.png')}}"
                                                    style="text-indent: -9999px;width: 32px; height: 39px;">
                                        </a>
                                    </li>

                                    <li>
                                        <a class="followx-facebook" href="https://www.instagram.com/mastersukisoup/"
                                           target="_blank">
                                            <img src="{{URL::asset('ms/img/responsive/socials/instagram.png')}}"
                                                 style="text-indent: -9999px;width: 32px; height: 39px;">
                                        </a>
                                    </li>
                               </ul>
                            </div>
                            <div class="row hidden-md-up m-b">
                                <div class="col-md-12 delivery-service-footer">
                                    <div class="col-md-6">
                                        <img src="{{URL::asset('/')}}ms/img/responsive/phone.svg" height="23"
                                             alt="phone" style="margin-top: -10px"> {{ _t('delivery_service',$lang_file) }}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <span>&nbsp;{{ _t('081288882',$lang_file) }}</span>
                                        </div>
                                        <div class="col-md-12">
                                            <span>&nbsp;{{ _t('023222230',$lang_file) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row listFooter m-t-md hidden-md-down">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li><a href="{{url('/contact')}}">{{ _t('contact',$lang_file) }}<span
                                            class="border-right-footer">|</span></a>
                            </li>
                            <li><a href="{{url('/career')}}">{{ _t('career',$lang_file) }}<span
                                            class="border-right-footer">|</span></a>
                            </li>
                            <li><a href="{{url('/feedback')}}">{{ _t('consumer_feedback',$lang_file) }}<span
                                            class="border-right-footer">|</span> </a></li>
                            <li><a href="{{url('/copyright')}}">{{ _t('copyright',$lang_file) }}<span
                                            class="border-right-footer">|</span>
                                </a></li>
                            <li><a href="{{url('/term-condition')}}">{{ _t('terms_conditions',$lang_file) }}  </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="borderRed" style="background: #08a35d"></div>
            <div class="listFooter listFooter-xs m-t hidden-sm-up">
                <div class="col-xs-11 col-xs-offset-1 p-a-0">
                    <ul class="nav nav-pills m-b-0">
                        <li><a href="{{url('/contact')}}">{{ _t('contact',$lang_file) }}<span class="border-right-footer">|</span></a>
                        </li>
                        <li><a href="{{url('/career')}}">{{ _t('career',$lang_file) }}<span
                                        class="border-right-footer">|</span></a></li>
                        <li><a href="{{url('/feedback')}}">{{ _t('consumer_feedback',$lang_file) }} <span
                                        class="border-right-footer"></span> </a></li>
                    </ul>
                </div>
                <div class="col-xs-11 col-xs-offset-1 p-a-0">
                    <p class="copyright text-left" style="margin-bottom: 18px;"><span>© 2017 MS Restaurant Group IT. All rights reserved. </span>
                    </p>
                </div>
            </div>
            <div class="container copyright-bar hidden-md-down">
                <div class="row listFooter">
                    <div class="col-md-6 col-sm-12">
                        <ul class="nav nav-pills">
                            <li><a href="{{url('/menu/delivery')}}">{{ _t('online_delivery',$lang_file) }}<span
                                            class="border-right-footer">|</span></a></li>
                            <li>
                                <a href="https://www.facebook.com/pages/Master-Gold-Restaurant/366935650165043?fref=ts"
                                   target="_blank">{{ _t('master_gold_restaurant',$lang_file) }}<span
                                            class="border-right-footer">|</span></a>
                            </li>
                            <li><a href="https://www.facebook.com/sakurabuffetcambodia/?fref=ts" target="_blank">{{ _t('sakura_buffet_bbq_soup',$lang_file) }}  </a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="copyright text-right"><a href="{{url('/copyright')}}"><span>© 2017 MS Restaurant Group IT. All rights reserved. </span></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</section>

@section('layout-id-close')
@show
@section('script')
    <script type="text/javascript">
        function updateClock() {
            var currentTime = new Date();
            var currentHours = currentTime.getHours();
            var currentMinutes = currentTime.getMinutes();
            var currentSeconds = currentTime.getSeconds();
            currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
            currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
            var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
            currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
            currentHours = ( currentHours == 0 ) ? 12 : currentHours;
             var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
            $("#timezone").html(currentTimeString);
        }
        $(document).ready(function () {
            setInterval('updateClock()', 1000);
        });
        var tgg = true;
        $(function () {
            @if(!is_m() || is_t())

            $(".slideUpbox").click(function () {
                $(this).slideUp(2000);
            });
            $('.active-bar').remove();
            $(".menu-slide-do").on('click', function () {
                if (tgg) {
                    $('.menu-slide-content').show(500);

                } else {
                    $('.menu-slide-content').hide(500);
                }
                tgg = !tgg;
            });
            $(".btnlogin").click(function () {
                $('#formLoginDetail').toggle();
            });
            @endif
            $(".btnConfirmOrderCheckout").click(function () {
                $('#formLoginDetail').toggle();
            });

            @if(!is_m() || is_t())
            $(".btncustomer").click(function () {
                $('.customerinfo').toggle();
            });
            $("div.slide-share-link").mouseover(function () {
                $('.slide-share').show();
            }).mouseout(function () {
                $('.slide-share').hide();
            });
            $('.menu-slide-close').on('click', function () {
                $('.menu-slide-content').hide(500);
                tgg = true;
            });
            //                Desktop Sub Menu Mouse Enter
            $(".submenu").mouseenter(function () {
                $(this).find('.mainsubmenu').show();
            }).mouseleave(function () {
                $(this).find('.mainsubmenu').hide();
            });
            @endif

            @if(is_m() || is_t())
            //                Mobile Responsive Menu Bar
            $(".gn-icon-menu").on('click', function () {
                if (tgg) {
                    $('.fadeIn').show();
                    $('.cart').fadeOut('slow');
                } else {
                    $('.fadeIn').hide();
                    $('.cart').hide().fadeIn(1000);
                }
                tgg = !tgg;
            });
            //                  Mobile Responsive Shopping Card
            $(".cart").on('click', function () {
                if (tgg) {
                    $('.home-product-menu-mobile').hide();
                    $('.yield-content').hide();
                    $('.desktop-home-slide').hide();
                    $('.mobile-slide-show').hide();
                    $('.cart_items_list').show();

                } else {
                    $('.cart_items_list').hide();
                    $('.desktop-home-slide').show();
                    $('.home-product-menu-mobile').show();
                    $('.mobile-slide-show').show();
                    $('.yield-content').show();
                }
                tgg = !tgg;
            });

            @endif

        });

//  =============================shopping to card ====================

        function totalQty() {
            $.ajax({
                url: '{{url('/total-qty')}}',
                type: 'GET',
                dataType: 'json',
                async: true,
                data: {},
                success: function (data) {
                    $('.totalqty1').text(data);
                },
                error: function () {
                }
            });

        }
        $(function () {
            $.ajax({
                url: '{{url('/get-cart')}}',
                type: 'GET',
                dataType: 'json',
                async: true,
                data: {},
                success: function (data) {
                    mobileAddCart(data);
                    add_cart(data);
                    checkout_addcart(data)
                },
                error: function () {
                }
            });
            $('body').delegate('.desktop-addCart', 'click', function (e) {
                e.preventDefault();
                //                alert('123');
                var id = $(this).data('id') - 0;
                var name = $(this).data('name');
                var price = $(this).data('price') - 0;
                var image = $(this).data('image');
                $.ajax({
                    url: '{{url('/add-cart')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    data: {
                        id: id,
                        name: name,
                        price: price,
                        image: image
                    },
                    success: function (data) {
                        add_cart(data);
                        mobileAddCart(data);
                        checkout_addcart(data)
                    },
                    error: function () {
                    }
                });
            });
            $('body').delegate('.desktop-delete-cart', 'click', function (e) {
                e.preventDefault();
                var rowid = $(this).data('rowid');
                $.ajax({
                    url: '{{url('/remove-cart')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    data: {
                        rowid: rowid
                    },
                    success: function (data) {
                        add_cart(data);
                        mobileAddCart(data);
                        checkout_addcart(data)
                    },
                    error: function () {
                    }
                });
            });
            $('body').delegate('.update-card', 'click', function (e) {
                e.preventDefault();
                var rowidz = $(this).data('row');
                var ty = $(this).data('ty');
                $.ajax({
                    url: '{{url('/update-cart')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    data: {
                        rowid: rowidz,
                        ty: ty
                    },
                    success: function (data) {
                        add_cart(data);
                        mobileAddCart(data);
                        checkout_addcart(data)
                    },
                    error: function () {
                    }
                });
            });
            $('body').delegate('.desktop-destroy-cart', 'click', function (e) {
                e.preventDefault();
                var rowid = $(this).data('rowid');
                $.ajax({
                    url: '{{url('/destroy-cart')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    data: {
                        rowid: rowid
                    },
                    success: function (data) {
                        add_cart(data);
                        mobileAddCart(data);
                        checkout_addcart(data)
                    },
                    error: function () {
                    }
                });
            });
            $('body').delegate('.mobile-update-cart', 'change', function (e) {
                e.preventDefault();
                var rowidz = $(this).data('rowid');
                var qty = $(this).val() - 0;

                $.ajax({
                    url: '{{url('/update-cart1')}}',
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    data: {
                        rowid: rowidz,
                        qty: qty
                    },
                    success: function (data) {
                        add_cart(data);
                        mobileAddCart(data);
                        checkout_addcart(data)

                    },
                    error: function () {
                    }
                });
            });
        });
        function add_cart(data) {
            var html = '';
            var total = 0;
            var totalqty = 0;
            $.each(data, function (i, it) {
                total += (it.price * it.qty);
                totalqty += (it.qty);
                html += '<li class="row">' +
                    '<div class="col-xs-9 p-r-0 productname-price">' +
                    '<span>' + it.name + '</span>' +
                    '</div>' +
                    '<div class="col-xs-3 text-right p-l-0 productname-price">' +
                    '<span>' + (it.price * it.qty).toFixed(2) + ' $</span>' +
                    '</div>' +
                    '<div class="col-xs-12 m-t">Qty.</div>' +
                    '<div class="number-btnremove delete-cart-item">' +
                    '<div class="number col-xs-8 p-r-0">' +
                    '<input type="text" value="' + (it.qty) + '" readonly  class="spin-edit cart-item-text spinedit noSelect input-number" data-rowid="' + it.rowId + '" data-qty="' + it.qty + '" >' +
                    '<div class="spinedit" style="display: inline-block; position: relative;">' +
                    '<a href="#" class="fa fa-chevron-up update-card" data-ty="up" data-row="' + it.rowId + '" style="top: -8px !important;cursor: pointer;width: 12px; left: 8px;">' +
                    '</a>' +
                    '<a href="#" class="fa fa-chevron-down update-card" data-ty="down"  data-row="' + it.rowId + '" style=" cursor: pointer;width: 12px;top: 6px !important;left: -4px !important;">' +
                    '</a>' +
                    '</div>' +
                    '<span class="productPriceItem" style="position: relative";>X ' + it.price + ' $</span>' +
                    '</div>' +
                    '<div class="btnremove col-xs-4 text-right p-l-0">' +
                    '<a href="#" class="delete-cart-item desktop-delete-cart" data-rowid="' + it.rowId + '"></a>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-xs-12 m-t m-b">' +
                    '<div class="checkout_line_end"></div>' +
                    '</div>' +
                    '</li>';
            });
            if (html == '') {
                $('.Cart-detail').html('<p style="text-align: center;">No added item in your cart. </p><p style="text-align: center;">Click <strong>Add to Cart</strong> button on the dish to begin your order</p>');
            } else {
                $('.Cart-detail').html(html);
            }
            // $('.subtotalPrice').text(total.toFixed(2));
            $('.subtotalPrice').val(total.toFixed(2));
            totalQty();
        }
        function mobileAddCart(data) {
            var mobileHtml = '';
            var totalqty = 0
            $.each(data, function (i, it) {
                totalqty += (it.qty);
                mobileHtml += '<div class="row m-t" data-id="285">' +
                    '<div class="col-xs-3 p-r-0"><img src="' + it.options.image + '" alt="" class="img-responsive img-center"></div>' +
                    '<div class="col-xs-5" style="padding: 0 2px;font-weight: bold">' + it.name + '' +
                    '&nbsp;&nbsp;<span class="productPrice" style="color:#009966">' + it.price + ' $.</span><br>' +
                    '</div>' +
                    '<div class="col-xs-4 p-l-0">' +
                    '<a href="#" class="delete-cart-item-mobile desktop-delete-cart" data-rowid="' + it.rowId + '"></a>' +
                    '<select class="cart-item-text-mobile mobile-update-cart" data-rowid="' + it.rowId + '">' +
                    select(it.qty) +
                    '</select>' +
                    '</div>' +
                    '<div class="col-xs-12"><div class="checkout_line_end"></div></div>' +
                    '</div>';
            });
            if (mobileHtml == '') {
                $('.mobile-cart-detail').html('<p class="m-t m-b-0" style="text-align: center;">Click <span style="color:#ff3333">Add to Cart</span> button on the dish<br> to begin your order</p><p class="m-a-0" style="text-align: center;">your can click on proceed check out or continue order</p>');
            } else {
                $('.mobile-cart-detail').html(mobileHtml);
            }
            totalQty();
        }
        function select(num) {
            var selectHtml = '';
            var select = '';
            for (i = 1; i < 100; i++) {
                if (i == num) {
                    select = 'selected';
                } else {
                    select = '';
                }
                selectHtml += '<option ' + select + ' value="' + i + '">' + i + '</option>';
            }
            return selectHtml;
        }
        function checkout_addcart(data) {
            var checkoutHTML = 0;
            var totalqty = 0;
            $.each(data, function (i, it) {
                totalqty += (it.price * it.qty);
                checkoutHTML += '<tr valign="top" data-id="160">' +
                    '<td class="thumbnailProduct col-xs-2">' +
                    '<img src="' + it.options.image + '" class="img-responsive">' +
                    '</td>' +
                    '<td class="detailProduct col-xs-8">' +
                    '<h4 class="fontred titleProduct">' + it.name + '</h4>' +

                    '<div class="qtyProduct">' +
                    '<div class="dataProductItem">' +
                    '<label class="" for="inputQTY">Qty.</label>' +
                    '<div class="">' +
                    '<input type="text" id="inputQTY" readonly value="' + (it.qty) + '" class="spin-edit cart-item-text form-control" data-rowid="' + it.rowId + '" data-qty="' + it.qty + '">' +
                    '<div class="spinedit">' +
                    '<i class="fa fa-chevron-up update-card" data-ty="up" data-row="' + it.rowId + '" style="top: -8px !important;cursor: pointer;width: 12px; left: 8px;"></i>' +
                    '<i class="fa fa-chevron-down update-card" data-ty="down"  data-row="' + it.rowId + '" style=" cursor: pointer;width: 12px;top: 6px !important;left: -4px !important;"></i>' +
                    '<span class="productPrice">x ' + it.price + ' $</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="btnDeleteProduct">' +
                    '<a href="#" class="delete-cart-item desktop-delete-cart" data-rowid="' + it.rowId + '">Delete</a></div>' +
                    '</td>' +
                    '<td class="productPrice col-xs-2">' + (it.price * it.qty).toFixed(2) + ' $</td>' +
                    '</tr>';
            });
            $('.checkout-cart-detail').html(checkoutHTML);
            var _subtotalPrice = $('.subtotalPrice').val() -0;
            $('.tax_all').val((_subtotalPrice*0.1).toFixed(2));
            $('.total_all').val((_subtotalPrice*1.1).toFixed(2));
            totalQty();
        }
    </script>
@show
</body>
</html>