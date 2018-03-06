<?php
$lang_file = 'ms_promotion';
?>
@extends('ms.layout.front')
@section('title', 'PromotionPage')
@section('url'){{url('/promotion')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fpromotion')}}@endsection
    @section('layout-id')
        <div id="promotion">
    @endsection
            @if(!is_m())
                @include('ms.layout.delivery')
            @endif
        @section('content')
                @if(count($promotions) > 0)
                    <div class="boxpage">
                        <div class="container">
                            <div class="row hidden-md-down">
                                <div class="col-xs-12">
                                    <div class="breadcrumbList">
                                        <ul class="breadcrumb">
                                            <li><a href="{{url('/')}}">{{_t('home',$lang_file)}}</a></li>
                                            <li class="active">{{_t('promotion',$lang_file)}}</li>
                                        </ul>
                                    </div>
                                    <div class="titleText">
                                        <div class="textHeaderNoImg">
                                            <div class="linegray">
                                                <h2>{{_t('promotion',$lang_file)}}</h2>
                                            </div>
                                            <div class="redbox"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row hidden-lg-up">
                                <h1 class="textHeaderMobile">{{_t('promotion',$lang_file)}}</h1>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme owl-loaded container">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item active">
                                        @php
                                            $pro_top = \App\Models\TblPromotion::where('status','=','ACTIVE')->orderBy('id', 'desc')->first();
                                        @endphp
                                        <div class="item">
                                            <a href="{{url('/promotion/detail'.'/'.$pro_top->id)}}" title="">

                                                <img src="{{ url('img/cache/image940x350/'.\App\Helpers\ITPC::get_basename($pro_top->image)) }}" alt=" : " style="width: 100%;">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="promotionAll ">
                                <div class="row hidden-sm-down m-t-md">
                                    <div class="col-xs-12">
                                        <div class="row textSubHeader">
                                            <div class="col-xs-12 ">
                                                <h3 style="font-size: 24px;">{{_t('all_promotion',$lang_file)}}</h3>
                                                <div class="graybox"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="promotionList m-t">
                                    <div class="row">

                                        @foreach($promotions as $promotion)
                                            <div class="col-xs-12 col-sm-12 col-md-3">
                                                <div class="activityListBox">
                                                    <span class="none"></span>
                                                    <a href="{{url('/promotion/detail'.'/'.$promotion->id)}}">


                                                        <img src="{{ url('img/cache/image940x350/'.\App\Helpers\ITPC::get_basename($promotion->image)) }}" alt=" " class="hidden-sm-down img-responsive img-center">

                                                        <img src="{{ url('img/cache/image940x350/'.\App\Helpers\ITPC::get_basename($promotion->image)) }}" alt=" " class="hidden-md-up img-responsive img-center" style="width: 95%; height: 150px;">

                                                    </a>
                                                </div>
                                                <div class="caption">
                                                    <a href="{{url('/promotion/detail'.'/'.$promotion->id)}}">


                                                        <h4>{{$promotion->title}}</h4>


                                                    </a>
                                                    <p class="postdateNews">
                                                        <time class="activity_start_date postdateNews" datetime="{{$promotion->start_date}}"></time> - <time class="activity_end_date" datetime="{{$promotion->last_date}}"></time></p>
                                                    <p><a class="readmore" href="{{url('/promotion/detail'.'/'.$promotion->id)}}">more...</a></p>
                                                </div>
                                            </div>
                                        @endforeach


                                            <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
    @endsection
    @section('layout-id-close')
        </div>
    @endsection
@section('script')
    @parent

@endsection