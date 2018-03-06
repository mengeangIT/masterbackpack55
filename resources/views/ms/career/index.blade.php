<?php
$getSetting = \App\Helpers\ITPC::getSetting();
$lang_file = 'ms_career';
?>
@extends('ms.layout.front')
@section('title', 'CareerPage')
@section('url'){{url('/career')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcareer')}}@endsection
<link href="{{asset('/')}}ms/datetime/datepicker.min.css" rel="stylesheet" type="text/css">
@section('layout-id')
    <div id="career">
        @endsection
        @if(!is_m())
            @include('ms.layout.delivery')
        @endif

        @section('content')
            <style type="text/css" media="screen">
                .hide {
                    display: none;
                }
            </style>
            <div class="boxpage">
                <div class="container">

                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">{{_t('home',$lang_file)}}</a></li>
                                    <li class="active">{{_t('career',$lang_file)}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('career',$lang_file)}}</h2>
                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile"> {{_t('career',$lang_file)}}</h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 hidden-md-down">
                            <div class="sidebarSubMenu">
                                <ul class="nav">
                                    <li><a class="historySidebarM" href="{{url('/about')}}">{{_t('history',$lang_file)}}</a>
                                    </li>
                                    <li><a class="contactSidebatM" href="{{url('/contact')}}">{{_t('contact',$lang_file)}}</a></li>
                                    <li class="active"><a class="careerSidebarM"
                                                          href="{{url('/career')}}">{{_t('career',$lang_file)}}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12 col-xs-12">
                            <div class="row-fluid">
                                <div class="careerTextDes ">
                                    <div class="span12">
                                        <div class="textDesGroup">
                                            <p class="fontred" style="margin-bottom: 0px; line-height: 22px; color: rgb(237, 28, 36); font-family: Tahoma, sans-serif; background-color: rgb(254, 254, 254); font-size: 18px;">
                                                Master Suki Soup Restaurant has been emphasizing on developing our personnel within the organization to enhance our qualities and stabilities.</p>
                                            <p style="margin-bottom: 1rem; line-height: 18px; color: rgb(102, 102, 102); font-family: Tahoma, sans-serif; font-size: 12px; background-color: rgb(254, 254, 254);">
                                                {!! \App\Helpers\ITPC::getSettingKey('career',$getSetting)  !!}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="clear" style="border-bottom:thin solid #d9dcd8;">&nbsp;</div>
                            <div class="row-fluid">
                                <div class="careerTextPosition ">
                                    <div class="span12">
                                        <p class="fontgreen">&nbsp;</p>

                                        <p class="fontgreen">{{_t('apply_for_jobs_via_online',$lang_file)}}</p>
                                        <p class="texthumanResources">Human Resource Department</p>
                                        <p>{{ \App\Helpers\ITPC::getSettingKey('company-name',$getSetting) }}<br></p>
                                    </div>

                                    <div class="clear">&nbsp;</div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <div class="contactDate row">
                                <div class="col-md-4 col-xs-6 p-r-0">
                                    <div class="dateBox">
                                        <div class="col-xs-12 p-r-0" style="word-wrap: break-word;padding-left: 40px;">

                                            <a class="iconDate iconContact"><img
                                                        src="{{URL::asset('ms/img/responsive/about/clock-red.png')}}"
                                                        style="width: 36px; height: 34px;">&nbsp;</a>
                                            <span class="titledate">{{_t('date',$lang_file)}}</span>

                                            <p class="desdate">{{_t('mon_-_Sat_08:00_-_17:00',$lang_file)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6 p-a-0">
                                    <div class="phoneBox">
                                        <div class="col-xs-12 p-r-0" style="word-wrap: break-word;padding-left: 40px;">
                                            <div class="iconPhone iconContact"><img
                                                        src="{{URL::asset('ms/img/responsive/about/phone.png')}}"
                                                        style="width: 36px; height: 34px;">&nbsp;</div>
                                            <span class="titlephone">{{_t('phone',$lang_file)}}</span>

                                            <p class="desphone"><a href="tel:015-666-574">{{_t('015666574/015666547',$lang_file)}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-xs-12 p-a-0">
                                    <div class="emailBox">
                                        <div class="col-xs-12 p-r-0" style="word-wrap: break-word;padding-left: 55px;">
                                            <div class="iconEmail">&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="{{URL::asset('ms/img/responsive/about/letter.png')}}"
                                                        style="width: 36px; height: 34px;">&nbsp;</div>
                                            <span class="titleemail">{{_t('e-mail',$lang_file)}}</span>
                                            <br>
                                            <a href="mailTo:hr@mastersukisoup.com">hr@mastersukisoup.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="contactform "></div>
                            </div>
                        </div>
                    </div>
                    <div class="positionWork">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 hidden-md-down"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="careerUnemploymentBox ">
                                                    <div class="row">
                                                        <div class="careerUnemployment col-md-6">
                                                            <h3 class="fontgreen m-a-0">{{_t('apply_for_this_job',$lang_file)}}</h3>
                                                        </div>
                                                        <div class="paginationNews col-md-6">
                                                            <div class="paginationBox">
                                                                <div class="paginationList ">
                                                                    {{ $careers->links('vendor.pagination.pagination_desk') }}
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="applyPositionWork">
                                    <br>
                                    {{--===========job description===========--}}
                                    <div class="applyPositionWork ">
                                        <div class="row">
                                            <div class="col-lg-2 hidden-md-down"></div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                <div class="">

                                                    @foreach($careers as $career)
                                                        @php
                                                            $position = \App\Models\TblPosition::where('id','=',$career->position_id)->select('title')->first();
                                                        @endphp
                                                        <div class="row applyPositionDetail">
                                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                                <p class="fontred textApplyPosition">
                                                                    {{$position->title}}
                                                                </p>
                                                                <p class="textApplyCareerType"></p>
                                                                <p>
                                                                    {!! $career->content !!}
                                                                </p>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                                <div class="btnApplyPosition">
                                                                    <a data-toggle="modal" data-target="#postJobModel{{$career->id}}"
                                                                       class=" btnRedResponsiveMedium">{{_t('apply_for_this_job',$lang_file)}}
                                                                        <img src="{{URL::asset('/')}}ms/img/responsive/arrow-down.png"
                                                                             alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>



                                                        {{--=============  Form apply for job   ========================================--}}

                                                        <div class="modal fade" id="postJobModel{{$career->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModal" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">
                                                                            <span aria-hidden="true">
                                                                            <i class="fa fa-2x">×</i></span><span class="sr-only">{{_t('Close')}}</span>
                                                                        </button>
                                                                        <h4 class="modal-title" id="payModalLabel">{{_t('Finalize Sale')}}</h4>
                                                                    </div>
                                                                    <div class="modal-body" id="payment_content">
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                                                @if (count($errors) > 0)
                                                                                    <div class="alert alert-danger">
                                                                                        <ul>
                                                                                            @foreach ($errors->all() as $error)
                                                                                                <li>{{ $error }}</li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                @endif

                                                                                <form class="careerform" method="post" action="{{url('/post-apply-job')}}"
                                                                                      enctype="multipart/form-data">

                                                                                    {{ csrf_field() }}
                                                                                    <input type="hidden" name="position_id" value="{{$career->position_id}}">

                                                                                    <div class="row">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">{{_t('Name - Surname')}}<span class="fontred">*</span></label>
                                                                                                <div class="col-xs-12">
                                                                                                    <input name="name" type="text" class="form-control" id="inputFullname" required>
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">{{_t('Email')}}</label>
                                                                                                <div class="col-xs-12">
                                                                                                    <input name="email" type="email" class="form-control" id="inputEmail" >
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">{{_t('Tel')}}<span
                                                                                                            class="fontred">*</span></label>
                                                                                                <div class="col-xs-12">
                                                                                                    <input name="phone" maxlength="10" type="text" class="form-control" id="phonenumber" required>
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">{{_t('National ID')}}
                                                                                                    (9 {{_t('digit')}})<span
                                                                                                            class="fontorange">*</span></label>
                                                                                                <div class="col-xs-12">
                                                                                                    <input name="national_id" type="text" maxlength="9" class="form-control numeric" id="inputIDCard"
                                                                                                           required>
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">
                                                                                                    {{_t('Expected Salary')}} ($) <span class="fontred">*</span>
                                                                                                </label>
                                                                                                <div class="col-xs-12">
                                                                                                    <input name="salary" type="text" id="inputMoney"
                                                                                                           class="form-control" required>
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">{{_t('Expected Start date')}}</label>
                                                                                                <div class="col-xs-12">

                                                                                                    <input type="text" id="inputResume"  name="start_work"  style="width: 100% !important;" class="minMaxExample" placeholder="&nbsp;&nbsp;&nbsp;{{_t('month/date/year')}} *" required>
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="col-xs-12">{{_t('Resume')}}</label>
                                                                                                <div class="col-xs-12">
                                                                                                    <input name="resume" type="file" id="inputResume"
                                                                                                           class="form-control"></div>
                                                                                                <div class="clearfix"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-xs-12">
                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input name="agree" id="agree-87" type="checkbox"
                                                                                                       value="agree">
                                                                                                {{_t('I hereby confirm that the information above is true')}}
                                                                                                .
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-xs-12">
                                                                                        <button type="submit" id="btnCareer"
                                                                                                class=" btnSendData btnRedResponsiveMedium">{{_t('Submit')}}
                                                                                            <img
                                                                                                    src="{{URL::asset('/')}}ms/img/responsive/arrow-right.png"
                                                                                                    class="btn-arrow-right" alt="">
                                                                                        </button>
                                                                                    </div>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{--=============  End of Form apply for job   ========================================--}}
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--===========end job description===========--}}

                                    <div class="row">
                                        <div class="col-xs-2"></div>
                                        <div class="col-xs-12 col-lg-10">
                                            <br class="hidden-sm-up">
                                            <div class="underCareerPosition"></div>
                                        </div>
                                    </div>
                                    <div class="btnBackToTop-Pagination m-t">
                                        <div class="row">
                                            <div class="col-lg-2 hidden-md-down"></div>
                                            <div class="col-xs-12 col-lg-10">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-5">
                                                        <div class="btnBackToTop">
                                                            <a style="float:none" class="btnBackToTop"
                                                               href="#career"> {{_t('go_top',$lang_file)}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="paginationBox col-sm-7 col-xs-12 p-l-0">
                                                        <div class="paginationList ">
                                                            {{ $careers->links('vendor.pagination.pagination_desk')  }}
                                                        </div>
                                                        <div class="clear">
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
                </div>
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
  	<script src="{{asset('/')}}ms/datetime/datepicker.js"></script>
    	<script src="{{asset('/')}}ms/datetime/datepicker.en.js"></script>
    @parent
    <script>
        $('.minMaxExample').datepicker({
            language: 'en',
            minDate: new Date() // Now can select only dates, which goes after today

        })
    </script>
@endsection