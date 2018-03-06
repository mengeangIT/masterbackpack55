<?php
    $getSetting = \App\Helpers\ITPC::getSetting();
    $id = \App\Helpers\ITPC::getSettingKey('map-home-picture', $getSetting);
?>
@extends('ms.layout.front')
@section('title', 'HomePage')
@section('url'){{url('/home')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fhome')}}@endsection
    @section('layout-id')
    <div id="home">
    @endsection
        @if(is_m() || is_t())
            @include('ms.home.index_mobile')
        @endif
        @if(!is_m() || is_t())
            @include('ms.layout.delivery')
        @endif

        @if(!is_m())
            @include('ms.home.index_desktop')
        @endif
        @section('home-sub-bar')
            <div class="container hidden-xs-down" id="slideshowsubbanner">
                <div class="row">
                    <div class="col-md-1"><div class="slideshow-prev">prev</div></div>
                    <div class="col-md-10">
                        <div class="slideshow"
                             data-cycle-fx="scrollHorz"
                             data-cycle-loader=true
                             data-cycle-timeout="0"
                             data-cycle-slides="div.slideItem"
                             data-cycle-prev=".slideshow-prev"
                             data-cycle-next=".slideshow-next">
                            <div class="slideItem">
                                <div class="row">


                                            <div class=" col-md-4 col-sm-4 col-xs-12 hidden-xs-down each-box">
                                                <a href="https://youtu.be/ylsgofIBk0A" data-lity>
                                                    <iframe id="existing-iframe-example"
                                                            width="239" height="135.5"
                                                            src="{{ \App\Helpers\ITPC::getSettingKey('video-home-iframe-src',$getSetting) }}"
                                                            allowfullscreen>

                                                    </iframe>
                                                   
                                                    <div class="radial-shadow"></div>
                                                </a>
                                            </div>
                                            <div class=" col-md-4 col-sm-4 col-xs-12 hidden-xs-down">
                                                <a href="{{url('/branch')}}">
                                                    <img class="img-responsive" style="height: 119px; width: 239.44px;" src="{{ asset('/uploads/home/'.\App\Helpers\ITPC::get_basename(\App\Helpers\ITPC::getSettingKey('map-home-picture',$getSetting))) }}" alt=" " />

                                                    <div class="radial-shadow"></div>
                                                </a>
                                            </div>

                                            <div class=" col-md-4 col-sm-4 col-xs-12 hidden-xs-down">

                                                <div class="slideshow-sub" data-cycle-fx="scrollHorz" data-cycle-pager=".slideshow-sub-pager" data-cycle-slides="> a" data-cycle-timeout="0" >
                                                <?php
                                                    $promotion_new = \App\Models\TblPromotion::orderBy('id', 'desc')->first();
                                                ?>
                                                    @if(count($promotion_new) > 0)
                                                        <a href="{{url('promotion/detail/'.$promotion_new->id)}}" style="" class="carousel-shown">

                                                                <img class="img-responsive" style="height: 130px; width: 239.44px;"
                                                                     src="{{ url('img/cache/image940x350/'.\App\Helpers\ITPC::get_basename($promotion_new->image)) }}" alt=" " />

                                                            <div class="slideshow-sub-description">
                                                                <div class="bg">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="radial-shadow"></div>
                                                <div class="slideshow-sub-pager"></div>
                                            </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"><div class="slideshow-next">next</div></div>
                </div>
            </div>
        @endsection
    @section('layout-id-close')
    </div>
    @endsection
@section('script')

    <script type="text/javascript">
        var tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('existing-iframe-example', {
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }
        function onPlayerReady(event) {
            event.target.setVolume(50);
            event.target.playVideo();
        }
        function onPlayerStateChange(event) {
//            changeBorderColor(event.data);
        }
    </script>
    @parent
@endsection