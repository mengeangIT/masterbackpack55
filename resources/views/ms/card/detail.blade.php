<?php
$lang_file = 'ms_card';
?>
@extends('ms.layout.front')
@section('title', 'CardDetailPage')
@section('url'){{url('/card-detail')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcard-detail')}}@endsection
    @section('layout-id')
        <div id="carddetaail">
    @endsection

            @include('ms.layout.delivery')
           
        @section('content')
                <div class="boxpage">
                <div class="container">
                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">{{_t('home',$lang_file)}}</a></li>
                                    <li class="active">{{_t('ms_card',$lang_file)}}</li><li class="active">{{$card->title}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('ms_card',$lang_file)}}</h2>
                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile"> {{_t('ms_card',$lang_file)}}</h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="textTitle text-center hidden-xs-down">
                                <h5><strong><span class="fontred ">{{_t('privilege',$lang_file)}}e</span> {{_t('to make you happier than ever')}}.</strong></h5>
                            </div>
                            <div class="mkcardBox">
                                <div class="tabbable">

                                    <div class="textTitle text-center hidden-sm-up">
                                        <p>
                                            <span class="fontred">{{_t('Privilege')}}</span> {{_t('to make you happier than ever')}}.</p>
                                    </div>

                                    <div class="tab-content">
                                        <div class="cardDetail">
                                            <div class="row">
                                                <div class="cardDetailBox">
                                                    <div class="col-xs-12 col-md-5">
                                                        <div class="showLargeCard">

                                                            <img src="{{ asset($card->image)}}" class="img-responsive img-center">

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-7">
                                                        <div class="textDescription">
                                                            {!! $card->content !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buttonBack row">
                                                    <div class="col-xs-6 marginleft0">
                                                        <a class="btnBackWard" href="{{url('/card')}}">Back</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
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

@endsection