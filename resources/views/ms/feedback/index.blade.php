<?php
$lang_file = 'ms_feedback';
?>
@extends('ms.layout.front')
@section('title', 'FeedBackPage')
@section('url'){{url('/feedback')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Ffeedback')}}@endsection
<link href="{{asset('/')}}ms/datetime/datepicker.min.css" rel="stylesheet" type="text/css">

@section('layout-id')
    <div id="feedback">
        @endsection
        @if(!is_m())
            @include('ms.layout.delivery')
        @endif
        @section('content')
            <div class="boxpage">
                <div class="container">

                        <div class="row hidden-md-down">
                            <div class="col-xs-12">
                                <div class="breadcrumbList">
                                    <ul class="breadcrumb">
                                        <li><a href="{{url('/home')}}">{{_t('home',$lang_file)}}</a></li>
                                        <li class="active">{{_t('feedback',$lang_file)}}</li>
                                    </ul>
                                </div>
                                <div class="titleText">
                                    <div class="textHeaderNoImg">
                                        <div class="linegray">
                                            <h2>{{_t('feedback',$lang_file)}}</h2>
                                        </div>
                                        <div class="redbox"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row hidden-lg-up">
                            <h1 class="textHeaderMobile">{{_t('feedback',$lang_file)}}</h1>
                        </div>


                    <div class="row">
                        <div class="col-xs-12 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                            <div class="feedbackBox">
                                <div class="textIntro">
                                    <p>Every single feedback will be advantage in developing our service to enhance
                                        client&rsquo;s satisfaction. Please kindly choose a topic and fill in data
                                        below .</p>
                                </div>

                                <form id="fromFeedback" method="POST" action="{{ url('/post-feedback')}}"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col-md-4 col-xs-4 col-sm-12">
                                            <input id="objective1" type="radio" name="objective" value="Suggestion"
                                                   checked="checked">
                                            <label for="objective1">{{_t('suggestion',$lang_file)}}</label>
                                        </div>
                                        <div class="col-md-4 col-xs-4 col-sm-12">
                                            <input id="objective2" type="radio" name="objective" value="Comment">
                                            <label for="objective2">{{_t('comment',$lang_file)}}</label>
                                        </div>
                                        <div class="col-md-4 col-xs-4 col-sm-12">
                                            <input id="objective3" type="radio" name="objective" value="Recommend">
                                            <label for="objective3">{{_t('recommend',$lang_file)}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xs-12 col-sm-6">
                                            <label class="hidden-xs-down" for="inputSubject">
                                                {{_t('subject',$lang_file)}}
                                                <span class="fontorange">*</span>
                                            </label>
                                            <div class="selectSubjectFeedback">
                                                <select id="inputSubject" class="form-control " name="subject" required>
                                                    <option value="">{{_t('choose_subject',$lang_file)}}</option>
                                                    <option value="employee-quality-of-branch">{{_t('employee/Quality_of_the_branch',$lang_file)}}
                                                    </option>
                                                    <option value="delivery">{{_t('home_delivery_service',$lang_file)}}</option>
                                                    <option value="call-center">{{_t('call_center',$lang_file)}}</option>
                                                    <option value="delivery-rider">{{_t('delivery_rider',$lang_file)}}</option>
                                                    <option value="card">{{_t('membership_card',$lang_file)}}</option>
                                                    <option value="voucher">{{_t('gift_voucher',$lang_file)}}</option>
                                                    <option value="promotion">{{_t('activity_and_promotion',$lang_file)}}</option>
                                                    <option value="other">{{_t('others',$lang_file)}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="inputBranch" class="hidden-xs-down">
                                                {{_t('please_specify_the_ms_branch',$lang_file)}}
                                                <span class="fontorange">*</span>
                                            </label>
                                            <div class="selectBranchFeedback">
                                                <select class="form-control" id="inputBranch" name="branch" required>
                                                    <option value="" selected="selected">{{_t('Select City or Province')}} *
                                                    </option>
                                                    <option value="Phnom-Penh">{{_t('Phnom Penh')}}</option>
                                                    <option value="Sihanoukville">{{_t('Sihanoukville')}}</option>
                                                    <option value="Seim-Reap">{{_t('Seim Reap')}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="inputName" class="hidden-xs-down">
                                                {{_t('Name')}}
                                                <span class="fontorange">*</span>
                                            </label>
                                            <input class="col-xs-12 form-control" name="name" type="text" id="inputName"
                                                   placeholder="{{_t('Name')}} *" required>
                                        </div>
                                        <div class="clearfix hidden-sm-up"></div>
                                        <br class="hidden-sm-up">
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="inputLastName" class="hidden-xs-down">
                                                {{_t('Surname')}}
                                                <span class="fontorange">*</span>
                                            </label>
                                            <input class="col-xs-4 form-control" name="surname" type="text"
                                                   id="inputLastName" placeholder="{{_t('Surname')}} *" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="inputPhone" class="hidden-xs-down">
                                                {{_t('Tel')}}
                                                <span class="fontorange">*</span>
                                            </label>
                                            <input type="text" name="phone" class="form-control" id="inputPhone"
                                                   maxlength="9" placeholder="{{_t('Tel')}}." required>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label for="inputDateService" class="hidden-xs-down">{{_t('Time and Date')}} <span class="fontorange">*</span></label>
                                            @php
                                                $mydate =  date('Y-m-d');
                                                $daystomin = '0';
                                                $datemin = date('Y-m-d', strtotime($mydate.' - '.$daystomin.' days'));
                                            @endphp
                                            <div class="form-group">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" value="{{$datemin}}" placeholder="month/date/year *" name = "date" class="form-control pull-right" id="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xs-12">
                                            <label for="inputMassage" class="hidden-xs-down">{{_t('Comment and Recommendation')}}</label>
                                            <textarea class="col-xs-12 form-control" name="comment" id="inputMassage"
                                                      style="min-height: 250px" placeholder="{{_t('Comment and Recommendation')}}"
                                                      required></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="u_id" value="{{Auth::id()}}" required>

                                    <div class="form-group row">
                                        <div class="col-xs-12 col-sm-6">
                                            <button type="submit" class="btnRedResponsiveMedium">Submit
                                                <img src="{{URL::asset('/')}}ms/img/responsive/arrow-right.png"
                                                     class="btn-arrow-right" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
    <script src="{{asset('/')}}ms/datetime/datepicker.js"></script>
    <script src="{{asset('/')}}ms/datetime/datepicker.en.js"></script>
    @parent
    <script>
        var start = new Date(),
            prevDay,
            startHours = 8;
        start.setHours(8);
        start.setMinutes(0);
        if ([12, 0].indexOf(start.getDay()) != -1) {
            start.setHours(8);
            startHours = 8
        }
        $('#datepicker').datepicker({
            timepicker: true,
            language: 'en',
            startDate: start,
            minHours: startHours,
            maxHours: 16,
            onSelect: function (fd, d, picker) {
                if (!d) return;
                var day = d.getDay();
                if (prevDay != undefined && prevDay == day) return;
                prevDay = day;
                console.log('updat')
                if (day == 8 || day == 0) {
                    picker.update({
                        minHours: 8,
                        maxHours: 24
                    })
                } else {
                    picker.update({
                        minHours: 8,
                        maxHours: 24
                    })
                }
            }
        })</script>
@endsection