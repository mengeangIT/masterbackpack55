<?php
$getSetting = \App\Helpers\ITPC::getSetting();
$lang_file = 'ms_menu';
?>

@extends('ms.layout.front')
@section('title', 'MenuDeliveryPage')
@section('url'){{url('/menu/delivery')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fmenu%2Fdelivery')}}@endsection
@yield('style_css_slide_recommend')

@section('layout-id')
    <div id="healthydelivery">
        @endsection
        @section('content')
            <div class="boxpage">
                @if(is_m())
                    @include('ms.menu.delivery_mobile')
                @endif
                @if(!is_m() || is_t())
                    <div class="container">
                        <div class="row hidden-sm-down">
                            <div class="col-xs-12">
                                <div class="breadcrumbList">
                                    <ul class="breadcrumb">
                                        <li><a href="{{url('/')}}">{{_t('home',$lang_file)}}</a></li>
                                        <li><a href="javascript:">{{_t('menu',$lang_file)}}</a></li>
                                        <li id="breadcrumb-last-title">{{$categoryName}}</li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="titleText col-xs-12">
                                        <div class="">
                                            <div class="textHeader">
                                                <div class="linegray">
                                                    <p style=" font-family: 'Hanuman','Roboto', serif;  font-size: 1.4rem; color: #02c477;">{{_t('menu',$lang_file)}}</p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="redbox"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="healthymenuBox">
                            <div id="mainHealthymemu" class="tabbable hidden-sm-down">
                                <ul id="mainHealthtmenuList" class="nav nav-tabs nav-justified">
                                    @if(!is_m() || is_t())
                                        @include('ms.menu.category_delivery.index')
                                    @endif
                                </ul>
                            </div>
                            <div class="row m-t">
                                <div class="productHealthyDelivery col-lg-9 col-sm-8">
                                    <div class="subHealthymemu hidden-sm-down">
                                        <ul id="subHealthymemuList" class="nav nav-tabs">
                                            <li class="text-center"><a id="" href="{{url('/menu/restaurant')}}"><h6>
                                                        <strong>{{_t('at_restaurant',$lang_file)}}</strong></h6></a></li>
                                            <li class="active text-center"><a id="" href="{{url('/menu/delivery')}}">
                                                    <h6>
                                                        <strong>{{_t('online_delivery',$lang_file)}}</strong></h6></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-sub-heathy-menu-full hidden-sm-down">
                                        <div class="shadow"></div>
                                    </div>
                                    <div class="tab-content hidden-sm-down">
                                        <div class="tab-pane" id="">
                                            <div class="col-xs-6 row textSubHeader m-b-0">
                                                <h3 class="item-category-name">{{$categoryName}}</h3>
                                                <div class="graybox"></div>
                                            </div>

                                            <div class="show-item-by-category">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--==============right side bar ================--}}
                                <div class="sidebarRightDelivery col-lg-3 col-sm-4 hidden-sm-down">
                                    <div class="timeDeliverySetting">
                                        <h3 class="m-a-0">{{_t('home',$lang_file)}} <strong>{{_t('delivery',$lang_file)}}</strong></h3>
                                        <img src="{{URL::asset('/')}}ms/img/responsive/clock.png" width="44"
                                             height="44">
                                        <span class="textOrderFood">{{_t('available_hours',$lang_file)}}</span>
                                        <span class="textTimeSetting text-nowrap">
                                        <strong>09:45 - 21:00</strong>
                                        </span>
                                    </div>

                                    {{--============shopping card============--}}
                                    <div class="billShopDelivery m-t">
                                        <div class="textHeaderBill">
                                            <h3 class="text-center m-a-0">
                                                Your Ordering Food </h3>
                                        </div>
                                        <div id="listProductBillBox" style="position: static; zoom: 1;">
                                            <div class="listProductBill full">
                                                <div id="listProductBill">
                                                    <ul class="Cart-detail">
                                                    </ul>
                                                    <div class="billTotalPrice">
                                                        <div class="boxwidth120">
                                                            <p class="totalItem">You have <span class="totalqty1">0</span>
                                                                items</p>
                                                        </div>
                                                        <div class="subtotalPriceBox">
                                                            <p>Total <span class="subtotalPrice">0</span> $</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="btnbillPrice">

                                                            @if ( !session('customer_name'))
                                                                <div class="boxwidth120 btnConfirmOrderCheckout">
                                                                    <a class="btnconfirmBill btn"
                                                                       href="{{url('/login')}}"
                                                                       type="button"></a>
                                                                </div>
                                                            @else
                                                                <div class="boxwidth120 btnConfirmOrderCheckout">
                                                                    <a class="btnconfirmBill btn"
                                                                       href="{{url('/customer/checkout').'/'.session('customer_id')}}"
                                                                       type="button"></a>
                                                                </div>
                                                            @endif

                                                        <div class="boxwidth90">
                                                            <a class="desktop-destroy-cart" href="#" id="empty-cart">
                                                                Cancel
                                                                Order</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--============end shopping card============--}}
                                    <div class="foodBestSeller m-t">
                                        <div class="textHeaderBestSeller">
                                            <h3>Best Sale</h3>
                                        </div>
                                        <div class="tab-sidebar-right"></div>
                                        <div id="listProductBestSeller">

                                            <div class="listProductBestSeller p-l-0 p-r-0">
                                                <div class="slideshow-product-bestseller">
                                                    <ul class="thumbnails row p-l">
                                                        <div class="">
                                                            <div id="slider1_container"
                                                                 style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 500px; overflow: hidden;">

                                                                <div u="slides"
                                                                     style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 500px; overflow: hidden;">

                                                                    <div>
                                                                        <img u="image"
                                                                             src2="{{URL::asset('/slidebar.png')}}"
                                                                             class="img-responsive"/>
                                                                    </div>
                                                                    <div>
                                                                        <img u="image"
                                                                             src2="{{URL::asset('/slidebar.png')}}"
                                                                             class="img-responsive"/>
                                                                    </div>
                                                                    <div>
                                                                        <img u="image"
                                                                             src2="{{URL::asset('/slidebar.png')}}"
                                                                             class="img-responsive"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="slideshow-product-bestseller-pager"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="foodFavorite m-t">
                                        <div class="textHeaderFavorite">
                                            <h3>{{_t('last_order_menu',$lang_file)}}</h3>
                                        </div>
                                        <div class="tab-sidebar-right"></div>
                                        <div id="listProductFavorite">
                                            <div class="listProductFavorite"><p>Please log in to see your personal<br>
                                                    information.</p></div>
                                        </div>
                                    </div>
                                    <div class="locationDeliveryBox">
                                        <a class="btnlocationDelivery" href="{{url('/branch')}}">
                                            <img src="{{ asset('/uploads/home/'.\App\Helpers\ITPC::get_basename(\App\Helpers\ITPC::getSettingKey('map-home-picture',$getSetting))) }}"
                                                 alt="Location Delivery" width="100%">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent
    @yield('script_js_slide_recommend')

    <script type="text/javascript">
        @if(!is_m())
        $(function () {
            $('.item-by-category').on('click', function (e) {
                e.preventDefault();
                var id = $(this).data('id') - 0;
                var prom = $(this).data('prom') - 0;
                $.ajax({
                    url: '{{url('/item/delivery')}}',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        id: id,
                        prom: prom
                    },
                    success: function (d) {
                        $('.show-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img();
                    },
                        error: function () {
                    }
                });
            });
            $('body').delegate('.paginat-desk ul li a', 'click', function (e) {
                e.preventDefault();
                var url = $(this).prop('href');
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    /*data: {
                     id: id,
                     prom: prom,
                     },*/
                    success: function (d) {
                        $('.show-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img();
                    },
                    error: function () {
                    }
                });
            });
            $('.item-by-category:first').trigger('click');
        });
        @endif

        @if(is_t())
        $(function () {
            $('.item-by-category').on('click', function (e) {
                e.preventDefault();
                var id = $(this).data('id') - 0;
                var prom = $(this).data('prom') - 0;
                $.ajax({
                    url: '{{url('/item/delivery')}}',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        id: id,
                        prom: prom
                    },
                    success: function (d) {
                        $('.show-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img();
                    },
                    error: function () {
                    }
                });
                $('body').delegate('.paginat-desk ul li a', 'click', function (e) {
                    e.preventDefault();
                    var url = $(this).prop('href');
                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'html',
                        /*data: {
                         id: id,
                         prom: prom,
                         },*/
                        success: function (d) {
                            $('.show-item-by-category').html(d);
                            $('.tab-pane').show(100);
                            my_reload_img();
                        },
                        error: function () {
                        }
                    });

                });
            });
                @if($select-0 == 0){
                $('.item-by-category:first').trigger('click');
            }
                @else{
                $('.item-by-category').each(function () {
                    var id = $(this).data('id') - 0;
                    var idx = '{{ $select }}' - 0;
                    if (id == idx) {
                        $(this).trigger('click');
                        return 0;
                    }
                });
            }
            @endif
        });
        @endif

        @if(is_m())
        $(function () {
            @if($keyword)
            $('.my-keyword').on('click', function () {
                var src = $(this).find('img').prop('src');
                $('.img-category-list').prop('src', src);
                var txt = $(this).find('.title-category-list-click').text();
                $('.title-category-list').text(txt);
                $('.menu-restaurant-toggle').hide();
            });
            $('.my-keyword a').trigger('click');

            @else
            $('.{{$select-0!=0?'category'.$select:'promotion'}}').trigger('click', function () {
                var src = $(this).find('img').prop('src');
                $('.img-category-list').prop('src', src);
                var txt = $(this).find('.title-category-list-click').text();
                $('.title-category-list').text(txt);
                $('.menu-restaurant-toggle').hide();
            });
            @endif

            $(".top-menu-delivery-toggle").click(function () {
                $('.menu-delivery-toggle').toggle();
            });

            $('.img-category-delivery-list-click').on('click', function () {
                var src = $(this).find('img').prop('src');
                $('.img-category-delivery-list').prop('src', src);
                var txt = $(this).find('.title-category-delivery-list-click').text();
                $('.title-category-delivery-list').text(txt);
                $('.menu-delivery-toggle').hide();
            });
        });
        @endif


        $(function () {
            my_reload_img();
        });

        function my_reload_img() {
            $('.my-reload-img').each(function () {
                var src = $(this).data('src');
                $(this).prop('src', src);
            });
        }

        $(function () {
            @foreach($itemCategories as $itemCategory)
            $('.ZX' + '{{$itemCategory->id}}').on('click', function () {
                var ZX = $(this).data('zx');
                $('.item-category-name').text(ZX);
                $('#breadcrumb-last-title').text(ZX);
            });
            @endforeach
            $('.ZX01').on('click', function () {
                var ZX = $(this).data('zx');
                $('.item-category-name').text(ZX);
                $('#breadcrumb-last-title').text(ZX);
            });
        });

    </script>
@endsection