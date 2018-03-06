<?php
    $getSetting = \App\Helpers\ITPC::getSetting();
    $lang_file = 'ms_about';
?>
@extends('ms.layout.front')
@section('title', 'AboutPage')
@section('url'){{url('/about')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fabout')}}@endsection
    @section('layout-id')
    <div id="history">
    @endsection
        {{--<!--========================================--}}
        {{--=            Mobile content lists          =--}}
        {{--=========================================-->--}}
        @section('mobile-content')
        @endsection
        {{--=====  End of Mobile content lists  ======--}}

            @include('ms.layout.delivery')
      
        @section('content')

            <div class="container">


                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">{{_t('home',$lang_file)}}</a></li>
                                    <li class="active">{{_t('about',$lang_file)}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('about',$lang_file)}}</h2>

                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile">{{_t('about',$lang_file)}}</h1>
                    </div>
                <div class="row">
                    <div class="col-xs-2 hidden-md-down">
                        <div class="sidebarSubMenu">
                            <ul class="nav">

                                <li><a class="historySidebarM" href="{{url('/about')}}">{{_t('history',$lang_file)}}</a></li>
                                <li><a class="contactSidebatM" href="{{url('/contact')}}">{{_t('contact',$lang_file)}}</a></li>
                                <li><a class="careerSidebarM" href="{{url('/career')}}">{{_t('career',$lang_file)}}</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-xs-12">
                        <div class="textDesHistory">
                            {!! \App\Helpers\ITPC::getSettingKey('about-us',$getSetting) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
        @endsection
    @section('layout-id-close')
    </div>
    @endsection

@section('script')
    @parent

@endsection