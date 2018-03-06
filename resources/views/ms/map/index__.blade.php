@php
    $base_map = asset('map');
@endphp

@extends('ms.layout.front')

@section('title', 'BranchPage')

@section('url'){{url('/map')}}@endsection

@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fbranch')}}@endsection
    @section('layout-id')
    <div id="branch">
    @endsection
        @include('ms.layout.delivery')

        @section('map')

            <link href="{{$base_map}}/assets/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
            <link href="{{$base_map}}/assets/slick-1.6.0/slick.css" rel="stylesheet">
            <link href="{{$base_map}}/assets/chosen-1.6.2/chosen.min.css" rel="stylesheet">
            <link href="{{$base_map}}/css/nouislider.min.css" rel="stylesheet">
            <link href="{{$base_map}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
            <link href="{{$base_map}}/css/responsive.css" rel="stylesheet" type="text/css" media="all" />
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

            <div class="boxpage">
                @if(is_m())
                    <div class="container">
                        <div class="row hidden-lg-up">
                            <h1 class="textHeaderMobile">{{_t('MS Branch')}}</h1>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <section class="subheader google-maps">
                    <div @if(!is_m() || is_t()) style="height: 70% !important;" @endif id="map-canvas"></div>
                </section>
            </div>
            {{--<style>--}}


                {{--@if(!is_m() && !is_t())--}}
                {{--.subheader.google-maps {--}}
                    {{--background: #e1e5f1;--}}
                    {{--padding: 0;--}}
                    {{--height: 730px !important;--}}
                    {{--position: static;--}}
                {{--}--}}
                {{--@endif--}}

                {{--@if(is_m())--}}
                {{--.subheader.google-maps {--}}
                    {{--background: #e1e5f1;--}}
                    {{--padding: 0;--}}
                    {{--height: 670px !important;--}}
                    {{--position: static;--}}
                {{--}--}}
                {{--@endif--}}
                {{--#mainmenuHeader > li > a {--}}
                    {{--display: block;--}}
                    {{--font-size: 1.12em !important;--}}
                    {{--padding: 10px 17px 10px 17px;--}}
                {{--}--}}
                {{--.font-menu-top{--}}
                    {{--font-size: 1em !important;--}}
                {{--}--}}
                {{--.boxpage {--}}
                    {{--background: #fefefe;--}}
                    {{--padding-bottom: 0px!important;--}}
                {{--}--}}
                {{--footer {--}}
                    {{--/*background: #5FA022;*/--}}
                    {{--padding: 60px 0px;--}}
                    {{--color: #ffffff;--}}
                    {{--font-size: 13px;--}}
                    {{--position: relative;--}}
                    {{--z-index: 2;--}}
                {{--}--}}
                {{--body {--}}
                    {{--/*font-family: 'Raleway', Arial;*/--}}
                    {{--font-weight: 300;--}}
                    {{--font-size: 15px;--}}
                    {{--color: #ffffff;--}}
                    {{--width: 100%;--}}
                    {{--height: 100%;--}}
                    {{--/*background: #5fa022;*/--}}
                {{--}--}}
                {{--a {--}}
                    {{--color: #ffffff;--}}
                    {{--outline: 0 !important;--}}
                    {{---webkit-transition: all 0.2s linear;--}}
                    {{---moz-transition: all 0.2s linear;--}}
                    {{---ms-transition: all 0.2s linear;--}}
                    {{---o-transition: all 0.2s linear;--}}
                    {{--transition: all 0.2s linear;--}}
                {{--}--}}
            {{--</style>--}}
        @endsection

    @section('layout-id-close')
        </div>
    @endsection
    @section('script')

        @parent

        <script src="{{$base_map}}/assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        {{--<script src="{{$base_map}}/js/bootstrap.min.js"></script>--}}
        <script src="{{$base_map}}/assets/slick-1.6.0/slick.min.js"></script>
        <script src="{{$base_map}}/assets/chosen-1.6.2/chosen.jquery.min.js"></script>
        <script src="{{$base_map}}/js/isotope.min.js"></script>
        <script src="{{$base_map}}/js/wNumb.js"></script>
        <script src="{{$base_map}}/js/nouislider.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&amp;sensor=false"></script>

        <script src="{{$base_map}}/js/map.js"></script>

        <script src="{{$base_map}}/js/global.js"></script>


    @endsection