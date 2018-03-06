@php
    $lang_file = 'ms_layout';
@endphp
@if(!is_m() || is_t())
    @section('online-delivery')
        <div class="menu-slide templateLayout1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-slide-content">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="deliveryTop">
                                        <div class="textDeliveryOrder">
                                            <a href="{{url('/menu/delivery')}}">
                                                <span>{{_t('click_online_delivery',$lang_file)}}</span>
                                            </a>
                                            <p class="dateOrder">{{_t('you_can_order_food_at_10:00_-_22:00',$lang_file)}}</p>
                                        </div>
                                        <div class="btnOrderDelivery"><a href="{{url('/menu/delivery')}}">{{_t('order_now',$lang_file)}}</a></div>
                                        <div class="telDeliveryService">{{_t('delivery_service_081_288_882',$lang_file)}}</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <p class="time">
                                        <img src="{{URL::asset('/')}}ms/img/header/online_menu/clock_icon.png"
                                             alt=" "/> <span id="timezone"></span>
                                    </p>
                                    <p class="menu-slide-close  pull-right">{{_t('close',$lang_file)}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="menu-slide-do"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="linegreen hidden-sm-down"></div>
    @endsection
@endif