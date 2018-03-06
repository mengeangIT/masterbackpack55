@section('mobile-slider')
    @if(is_t())
        <script type="text/javascript">
            jssor_1_slider_init = function() {
                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            };
        </script>
        <style>
            .jssorl-oval img {
                animation-name: jssorl-oval;
                animation-duration: 1.2s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            @keyframes jssorl-oval {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                width: 16px;
                height: 16px;
                background: url('./ms/slide/b05.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            .jssora22l, .jssora22r {
                display: block;
                position: absolute;
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url('./ms/slide/a22.png') center center no-repeat;
                overflow: hidden;
            }
            .jssora22l { background-position: -10px -31px; }
            .jssora22r { background-position: -70px -31px; }
            .jssora22l:hover { background-position: -130px -31px; }
            .jssora22r:hover { background-position: -190px -31px; }
            .jssora22l.jssora22ldn { background-position: -250px -31px; }
            .jssora22r.jssora22rdn { background-position: -310px -31px; }
            .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
            .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
        </style>
        <div class="hiddenx-md-up mobile-slide-show" id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1024px;height:303px;overflow:hidden;visibility:hidden;">
            <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('/')}}ms/slide/oval.svg" />
            </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1024px;height:303px;overflow:hidden;">
                    <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
                    <div>
                        <img data-u="image" src="http://mastersukisoup.com/public/uploads/74050_1490281735.png" />
                    </div>
                    <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
                    <div>
                        <img data-u="image" src="http://mastersukisoup.com/public/uploads/74050_1490281735.png" />
                    </div>
                    <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
                    <div>
                        <img data-u="image" src="http://mastersukisoup.com/public/uploads/74050_1490281735.png" />
                    </div>
                </div>

            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
    @endif
    @if(is_m())

        <script type="text/javascript">
            jssor_1_slider_init = function() {
                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            };
        </script>
        <style>
            .jssorl-oval img {
                animation-name: jssorl-oval;
                animation-duration: 1.2s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
            @keyframes jssorl-oval {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url('./ms/slide/b05.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            .jssora22l, .jssora22r {
                display: block;
                position: absolute;
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url('./ms/slide/a22.png') center center no-repeat;
                overflow: hidden;
            }
            .jssora22l { background-position: -10px -31px; }
            .jssora22r { background-position: -70px -31px; }
            .jssora22l:hover { background-position: -130px -31px; }
            .jssora22r:hover { background-position: -190px -31px; }
            .jssora22l.jssora22ldn { background-position: -250px -31px; }
            .jssora22r.jssora22rdn { background-position: -310px -31px; }
            .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
            .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
        </style>
        <div class="hidden-md-up mobile-slide-show" id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:600px;overflow:hidden;visibility:hidden;">
            <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('/')}}ms/slide/oval.svg" />
            </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:600px;overflow:hidden;">
                        <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
                        <div>
                            <img data-u="image" src="{{asset('ms/mslide.png')}}" />
                        </div>
                        <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
                        <div>
                            <img data-u="image" src="{{asset('ms/mslide.png')}}" />

                        </div>
                        <a data-u="any" href="http://www.jssor.com" style="display:none"></a>
                        <div>
                            <img data-u="image" src="{{asset('ms/mslide.png')}}" />

                        </div>
                </div>
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
    @endif
@endsection

@section('mobile-content')
    <div class="hidden-sm-up">
        <div class="col-xs-12 p-a-0">
            <h3 class="red-header" style="font-size: 20px;">{{_t('Online Delivery')}}</h3>
        </div>
    </div>
    <div class="container hidden-sm-up home-product-menu-mobile m-b">
        <div class="row">
            <div class="col-xs-4 p-a-0 text-center promotion">
                <a href="{{url('/menu/delivery/promotion')}}" title="">
                    <img src="{{URL::asset('/')}}ms/img/responsive/menu/promotion.png" alt="Promotion"
                         class="img-responsive img-center">
                    <span>{{_t('Promotion')}}</span>
                </a>
            </div>
            <div class="col-xs-4 p-a-0 text-center vegetable">
                <a href="http://mastersukisoup.com/menu/delivery/29" title="">
                    <img src="http://mastersukisoup.com/public/uploads/43933_1489483580.png" alt="Vegetable and Mushrooms" class="img-responsive img-center">
                    <span style="line-height: 14px;bottom:-19px !important">Vegetable and Mushrooms</span>
                </a>
            </div>
            <div class="col-xs-4 p-a-0 text-center vegetable">
                <a href="http://mastersukisoup.com/menu/delivery/29" title="">
                    <img src="http://mastersukisoup.com/public/uploads/43933_1489483580.png" alt="Vegetable and Mushrooms" class="img-responsive img-center">
                    <span style="line-height: 14px;bottom:-19px !important">Vegetable and Mushrooms</span>
                </a>
            </div>
            <div class="col-xs-4 p-a-0 text-center vegetable">
                <a href="http://mastersukisoup.com/menu/delivery/29" title="">
                    <img src="http://mastersukisoup.com/public/uploads/43933_1489483580.png" alt="Vegetable and Mushrooms" class="img-responsive img-center">
                    <span style="line-height: 14px;bottom:-19px !important">Vegetable and Mushrooms</span>
                </a>
            </div>
            <div class="col-xs-4 p-a-0 text-center vegetable">
                <a href="http://mastersukisoup.com/menu/delivery/29" title="">
                    <img src="http://mastersukisoup.com/public/uploads/43933_1489483580.png" alt="Vegetable and Mushrooms" class="img-responsive img-center">
                    <span style="line-height: 14px;bottom:-19px !important">Vegetable and Mushrooms</span>
                </a>
            </div>
            <div class="col-xs-4 p-a-0 text-center vegetable">
                <a href="http://mastersukisoup.com/menu/delivery/29" title="">
                    <img src="http://mastersukisoup.com/public/uploads/43933_1489483580.png" alt="Vegetable and Mushrooms" class="img-responsive img-center">
                    <span style="line-height: 14px;bottom:-19px !important">Vegetable and Mushrooms</span>
                </a>
            </div>

        </div>
        <div class="col-xs-12 m-t-md p-a-0">
            <a href="{{url('/customer/order-info').'/'.Auth::id()}}">
                <h3 class="green-header" style="font-size: 20px;">
                <img src="{{URL::asset('/')}}ms/img/responsive/icon-tray.png" width="39" height="41" alt="">{{_t('Order Information')}}</h3>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection