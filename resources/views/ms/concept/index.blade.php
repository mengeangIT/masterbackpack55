<?php
    $getSetting = \App\Helpers\ITPC::getSetting();
    $row = \Backpack\PageManager\app\Models\Page::where('template','concept')->get();
?>
@extends('ms.layout.front')
@section('title', 'ConceptPage')
@section('url'){{url('/concept')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fconcept')}}@endsection
    @section('layout-id')
        <div id="concept">
    @endsection
        @section('mobile-content')
        @endsection
            @if(!is_m())
                @include('ms.layout.delivery')
            @endif
        @section('content')
            <div class="container">

                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/home')}}">{{_t('Home')}}</a></li>
                                    <li class="active">{{_t('Master Concept')}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('Master Concept')}}</h2>

                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row hidden-lg-up">
                    <h1 class="textHeaderMobile">{{_t('Master Concept')}}</h1>
                </div>
                <div class="row">
                    @if(!is_m())
                    <div class="col-xs-2 hidden-md-down">
                        <div class="sidebarSubMenu">
                            <ul class="nav">
                                <img style="opacity: 0.3;" src="{{URL::asset('/')}}ms/img/healthymenu/concept.png"
                                     alt=" "/>
                            </ul>
                        </div>
                    </div>
                    @endif
                        <div class="col-md-12 col-lg-10">
                            <div class="textDesHistory">

                                @if($row != null)
                                    @foreach($row as $r)
                                    {!! $r->content !!}
                                    @endforeach
                                @endif

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