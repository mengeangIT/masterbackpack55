@extends('ms.layout.front')
@section('title', 'CopyRightPage')
@section('url'){{url('/copyright')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcopyright')}}@endsection
    @section('layout-id')
        <div id="copyright">
    @endsection
        @section('mobile-content')

        @endsection
            @if(!is_m())
                @include('ms.layout.delivery')
            @endif
        @section('content')
            <div class="boxpage">

                <div class="container">
                    <div class="row">
                        <div class="span12">

                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">{{_t('Home')}}</a></li>
                                    <li class="active">{{_t('Copyright')}}</li>
                                </ul>
                            </div>
                            <div class="row-fluid">
                                <div class="titleText">
                                    <div class="">
                                        <div class="textHeader">
                                            <div class="linegray">
                                                <h2 id="textHeaderCopyright">{{_t('Copyright')}}</h2>


                                                <div class="">
                                                    <div class="pull-right">
                                                        <div class="iconCopyright"></div>
                                                        <!-- <img src="https://www.mkrestaurant.com/img/member/addressbook/icon-addressbook.png" alt=" "/> -->
                                                    </div>
                                                </div>
                                                <div class="clear"></div>

                                            </div>

                                            <div class="redbox"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <div id="privacy">
                                <ul>
                                    <li>Unless there are other conditions applied, the license of messages, photographs, audio/visual, and other contents displayed on this website (Multimedia) belong to the company. Other forms of multimedia the company allowed to use with the consent of the author, the viewers are able to access the media through computer screen, print out, download, or post in Social Community within conditions below;</li>
                                    <li>The content will not be reproduced, adapted, communicated the work to the public, let the copies sold, distributed or imported such work without the prior consent of the author except for personal benefit.</li>
                                    <li>By using information on this website, you are acknowledged and agreed that the Company will not be responsible for anything caused by accessing this website.</li>
                                    <li>Any contexts on this website are not allowed to be adapted or corrected.</li>
                                    <li>The company&rsquo;s ownership of license and the conditions applied to the multimedia usage are required to inform and acknowledge other viewers. In case there is a copy of work, reference is required to display and indicate the ownership of the license or copyrights of the work. &nbsp;&nbsp;&nbsp;</li>
                                    <li>Any forms of multimedia on this website are not allowed to use unless there is written permission from the company.&nbsp;</li>
                                </ul>
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