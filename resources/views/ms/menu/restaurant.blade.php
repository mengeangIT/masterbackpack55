<?php
$lang_file = 'ms_menu';
?>
@extends('ms.layout.front')
@section('title', 'MenuRestaurantPage')
@section('url'){{url('/menu/restaurant')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fmenu%2Frestaurant')}}@endsection

@section('layout-id')
    <div id="healthymenu">
        @endsection
        @section('content')
            <div class="boxpage">
                @if(is_m())
                    @include('ms.menu.restaurant_mobile')
                @endif
                <div class="container">
                    <div class="row hidden-sm-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="#">{{_t('home',$lang_file)}}</a></li>
                                    <li><a href="javascript:">{{_t('menu',$lang_file)}}</a></li>
                                     <li id="breadcrumb-last-title">{{$categoryName}}</li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="titleText col-xs-12">
                                    <div class="">
                                        <div class="textHeader">
                                            <div class="linegray">
                                                <p style="font-family: 'Hanuman','Roboto', serif;  font-size: 1.4rem;  color: #02c477;">{{_t('menu',$lang_file)}}</p>
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
                                    @include('ms.menu.category_restaurant.index')
                                @endif
                            </ul>
                        </div>
                        <div class="row m-t">
                    <div class="productHealthyDelivery col-xs-12">
                        <div class="subHealthymemu hidden-sm-down">
                            <ul id="subHealthymemuList" class="nav nav-tabs">
                                <li class="active text-center">
                                    <a href="{{url('/menu/restaurant')}}">
                                        <h6>
                                            <strong>{{_t('at_restaurant',$lang_file)}}</strong>
                                        </h6>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="{{url('/menu/delivery')}}">
                                        <h6>
                                            <strong>{{_t('online_delivery',$lang_file)}}</strong>
                                        </h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-sub-heathy-menu-full hidden-sm-down">
                            <div class="shadow"></div>
                        </div>

                        <div class="tab-content hidden-sm-down">


                            <div class="tab-pane">


                                <div class="col-xs-6 row textSubHeader m-b-0">
                                    <h3 class="item-rest-category-name">{{$categoryName}}</h3>
                                    <div class="graybox"></div>
                                </div>

                                <div class="show-rest-item-by-category">

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                    </div>
                </div>
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent
    <script type="text/javascript">
        @if(!is_m())
        $(function () {
            $('.rest-item-by-category').on('click', function (e) {
                e.preventDefault();

                var id = $(this).data('id') - 0;
                var prom = $(this).data('prom') - 0;

                $.ajax({
                    url: '{{url('/item/restaurant')}}',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        id: id,
                        prom: prom
                    },
                    success: function (d) {
                        $('.show-rest-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img_rest();
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
                    success: function (d) {
                        $('.show-rest-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img_rest();
                    },
                    error: function () {
                    }
                });

            });


            $('.rest-item-by-category:first').trigger('click');

        });
        @endif
        @if(is_t())
        $(function () {
            $('.rest-item-by-category').on('click', function (e) {
                e.preventDefault();

                var id = $(this).data('id') - 0;
                var prom = $(this).data('prom') - 0;

                $.ajax({
                    url: '{{url('/item/restaurant')}}',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        id: id,
                        prom: prom
                    },
                    success: function (d) {
                        $('.show-rest-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img_rest();
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
                        $('.show-rest-item-by-category').html(d);
                        $('.tab-pane').show(100);
                        my_reload_img_rest();
                    },
                    error: function () {
                    }
                });

            });

                @if($select-0 == 0){
                $('.rest-item-by-category:first').trigger('click');
            }
                @else{
                $('.rest-item-by-category').each(function () {
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
                $('.{{'category'.$select}}').trigger('click', function () {
                    var src = $(this).find('img').prop('src');

                    $('.img-category-list').prop('src', src);
                    var txt = $(this).find('.title-category-list-click').text();
                    $('.title-category-list').text(txt);
                    $('.menu-restaurant-toggle').hide();
                });
                $(".top-menu-restaurant-toggle").click(function () {
                    $('.menu-restaurant-toggle').toggle();
                });
                $('.img-category-list-click').on('click', function () {
                    var src = $(this).find('img').prop('src');
                    $('.img-category-list').prop('src', src);
                    var txt = $(this).find('.title-category-list-click').text();
                    $('.title-category-list').text(txt);
                    $('.menu-restaurant-toggle').hide();
                });
            });
        @endif

        $(function () {
            my_reload_img_rest();
        });

        function my_reload_img_rest() {
            $('.my-reload-img-rest').each(function () {
                var src = $(this).data('src');
                $(this).prop('src',src);
            });
        }
        $(function () {
            @foreach($itemCategories as $itemCategory)
            $('.RZX'+'{{$itemCategory->id}}').on('click', function () {
                var RZX = $(this).data('rzx');
                $('.item-rest-category-name').text(RZX);
                $('#breadcrumb-last-title').text(RZX);
            });
            @endforeach
        });
    </script>
@endsection