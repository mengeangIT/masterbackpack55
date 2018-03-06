@extends('ms.layout.front')
@section('title', 'CardPage')
@section('url'){{url('/card')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcard')}}@endsection
        @section('layout-id')
            <div id="card">
        @endsection

        @section('mobile-content')
        @endsection

        @include('ms.layout.delivery')

        @section('content')

            <?php
            function select1($card_category_id)
            {
                $card = \App\Models\TblCard::where('status','=','ACTIVE')->where('card_cate','=',$card_category_id)->get();
                return $card;
//                return 'SELECT * FROM tbl_cards WHERE tbl_cards.status = "ACTIVE"  AND  tbl_cards.card_cate = ' . $card_category_id;
            }
            $i = 1;
            ?>
            <div class="boxpage">
                <div class="container">

                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">{{_t('Home')}}</a></li>
                                    <li class="active">{{_t('MS Card')}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('MS Card')}}</h2>
                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile">{{_t('MS Card')}}</h1>
                    </div>
                    @if(count($card_categories) > 0)
                        <div class="row">
                        <div class="col-xs-12">
                            @if(!is_m() || is_t())
                                <div class="textTitle text-center xhiddenx-xs-down linegray">
                                    <p>
                                        <span class="fontred ">{{_t('Privilege')}}</span> {{_t('to make you happier than ever')}}
                                        .</p>
                                </div>
                            @endif
                            <br>
                            <div class="MScardBox">
                                <div class="tabbable">
                                    {{--================ mobile category--}}
                                    @if(is_m() || is_t())
                                        @include('ms.card.index_mobile')
                                    @endif

                                    {{--================ end mobile category--}}
                                    @if(is_m())
                                        <div class="textTitle text-center hidden-sm-up">
                                            <p>
                                                <span class="fontred">{{_t('Privilege')}}</span> {{_t('to make you happier than ever')}}
                                                .
                                            </p>
                                        </div>
                                    @endif
                                    {{--================ desktop category--}}
                                    @if(!is_m())
                                        @include('ms.card.index_desk')
                                    @endif
                                    {{--================ end desktop category--}}
                                    <div class="tab-content">
                                        @foreach($card_categories as $card_category)
                                            <div id="card{{$card_category->id}}"
                                                 class="tab-pane x-hide card{{$card_category->id}}">
                                                <?php $i++; ?>
                                                <div class="row">
                                                    @foreach ( collect(select1($card_category->id))->chunk(3) as $chunk)
                                                        @foreach($chunk as $card)
                                                            <div class="col-xs-12 col-sm-4 text-center">
                                                                <div class="m-t">
                                                                    <a
                                                                            href="{{url('/card/detail/'.$card->id)}}">

                                                                            <img src="{{ asset($card->image)}}"
                                                                                 class="img-responsive img-center"/>

                                                                    </a>

                                                                        <a class="cardTitleCol"
                                                                           href="{{url('/card/detail/'.$card->id)}}">
                                                                            {{$card->title}} </a>


                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="lineCardRow hidden-xs-down text-center">
                                                            <img src="{{asset('/ms/')}}/img/card/linebg-card.png"
                                                                 alt=" "/>
                                                        </div>
                                                        <div class="clearfix hidden-sm-down"></div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent
    <script type="text/javascript">
        $(function () {
            @if(!is_m())
            $('.my-activemenu-card').bind('click',function (e) {
                e.preventDefault();
                var txt = $(this).html();
                $('.ms-select-card').html(txt);
            });
            $('.my-activemenu-card:first').trigger('click');
            @endif
            @if(is_m() || is_t())
            $('.my-activemenu-card-m').on('click', function (e) {
                e.preventDefault();
                var id = $(this).data('id') - 0;
                $('.x-hide').hide();
                $('.card' + id).show();
                var txt = $(this).html();
                $('.ms-select-card').html(txt);
            });
            $('.my-activemenu-card-m:first').trigger('click');
            $('.toggle-mobile-card').show();
            $('.toggle-mobile-card').toggle();
            $(".toggle-mobile-card").click(function () {
                $('.toggle-mobile-card').toggle();
            });
            $(".top-toggle-mobile-card").click(function () {
                $('.toggle-mobile-card').toggle();
            });
            @endif
        });
    </script>
@endsection