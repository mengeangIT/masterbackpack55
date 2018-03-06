<?php
$getSetting = \App\Helpers\ITPC::getSetting();
$lang_file = 'ms_contact';
?>
@extends('ms.layout.front')
@section('title', 'AboutPage')
@section('url'){{url('/contact')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcontact')}}@endsection
    @section('layout-id')
        <div id="contact">
    @endsection
        @section('mobile-content')
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
                                        <li><a href="{{url('/')}}">{{_t('home',$lang_file)}}</a></li>
                                        <li class="active">{{_t('contact',$lang_file)}}</li>
                                    </ul>
                                </div>
                                <div class="titleText">
                                    <div class="textHeaderNoImg">
                                        <div class="linegray">
                                            <h2>{{_t('contact',$lang_file)}}</h2>
                                        </div>
                                        <div class="redbox"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row hidden-lg-up">
                            <h1 class="textHeaderMobile">{{_t('contact',$lang_file)}}</h1>
                        </div>

                    <div class="row">


                            <div class="col-xs-2 hidden-md-down">
                                <div class="sidebarSubMenu">
                                    <ul class="nav">
                                        <li><a class="historySidebarM" href="{{url('/about')}}">{{_t('history',$lang_file)}}</a></li>
                                        <li class="active"><a class="contactSidebatM" href="{{url('/contact')}}">{{_t('contact',$lang_file)}}</a>
                                        <li><a class="careerSidebarM" href="{{url('/career')}}">{{_t('career',$lang_file)}}</a></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                      

                        <div class="col-md-12 col-xs-12 col-lg-10">
                            <div class="contactMap">
                                <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11056.289896135375!2d104.9100743523439!3d11.552661773124036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109511cddad879f%3A0x76255e7ccbe5625e!2sMaster+Suki+Soup+Co.%2C+Ltd+(HO)!5e0!3m2!1skm!2s!4v1491383354147" width="778" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div><br>
                                <div class="clearfix"></div>
                            </div>

                            <div class="data-contact-description m-t">
                                <div class="contantAddress row">
                                    <div class="col-xs-12">
                                        <h3 style="margin-top: 0px; margin-bottom: 0px; color: rgb(237, 28, 36); font-size: 2.188rem; letter-spacing: 0.5px;"><font face="Times New Roman">ADDRESS</font></h3>
                                        <h6>{{ \App\Helpers\ITPC::getSettingKey('company-name',$getSetting) }}</h6>
                                        <p>Address: {{ \App\Helpers\ITPC::getSettingKey('address',$getSetting) }}</p>
                                    </div>
                                </div>

                                <div class="contactDate row">
                                    <div class="col-md-4 col-xs-6 p-r-0">
                                        <div class="dateBox">
                                            <div class="col-xs-12 p-r-0" style="word-wrap: break-word;padding-left: 40px;">
                                                <div class="iconDate iconContact"><img src="{{URL::asset('ms/img/responsive/about/clock-red.png')}}" style="width: 36px; height: 34px;">&nbsp;</div>
                                                <span class="titledate">{{_t('date',$lang_file)}}</span>

                                                <p class="desdate">{{_t('mon_-_sat_08:00_-_17:00',$lang_file)}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-6 p-a-0">
                                        <div class="phoneBox">
                                            <div class="col-xs-12 p-r-0" style="word-wrap: break-word;padding-left: 40px;">
                                                <div class="iconPhone iconContact"><img src="{{URL::asset('ms/img/responsive/about/phone.png')}}" style="width: 36px; height: 34px;">&nbsp;</div>
                                                <span class="titlephone">{{_t('phone',$lang_file)}}</span>

                                                <p class="desphone"><a href="tel:081-288-882">{{_t('081288882',$lang_file)}}</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-12 p-a-0">
                                        <div class="emailBox">
                                            <div class="col-xs-12 p-r-0" style="word-wrap: break-word;padding-left: 55px;">
                                                <div class="iconEmail iconContact">&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{URL::asset('ms/img/responsive/about/letter.png')}}" style="width: 36px; height: 34px;">&nbsp;</div>
                                                <span class="titleemail">{{_t('e-mail',$lang_file)}}</span>
                                                <br>
                                                <a href="mailTo:info@mastersukisoup.com">info@mastersukisoup.com</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="contactform col-xs-12">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form id="contactform" action="{{url('/post/contact')}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="textsubHeader3">
                                            <h3>{{_t('contact_form',$lang_file)}}</h3>
                                            <p>{{_t('fill_the_form_to_contact_ms_restaurant-group_pcl',$lang_file)}}</p>
                                            <div class="sgraybox"></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6 col-xs-12">
                                                <label class="hidden-xs-down" for="inputFullname">
                                                    {{_t('name-surname',$lang_file)}} <span class="fontorange">*</span>
                                                </label>
                                                <input type="text" name="name" class="form-control" id="inputFullname"
                                                       placeholder="{{_t('name_-_surname',$lang_file)}} *" required>
                                            </div>
                                            <div class="form-group col-sm-6 col-xs-12">
                                                <label class="hidden-xs-down" for="inputEmail">
                                                    {{_t('e-mail',$lang_file)}} <span class="fontorange">*</span>
                                                </label>
                                                <input type="email" name="email" class="form-control" id="inputEmail"
                                                       placeholder="{{_t('e-mail',$lang_file)}} *" required>
                                            </div>
                                            <div class="form-group col-sm-6 col-xs-12">
                                                <label class="hidden-xs-down" for="inputPhone">
                                                    {{_t('tel',$lang_file)}}<span class="fontorange">*</span>
                                                </label>
                                                <input type="text" name="phone" class="form-control" maxlength="10" id="inputPhone"
                                                       placeholder="{{_t('tel',$lang_file)}}" required max="10">
                                            </div>
                                            <div class="form-group col-sm-6 col-xs-12">
                                                <label class="hidden-xs-down" for="inputSubject">
                                                    {{_t('subject',$lang_file)}} <span class="fontorange">*</span>
                                                </label>
                                                <input type="text" name="subject" class="form-control" id="inputSubject"
                                                       placeholder="{{_t('subject',$lang_file)}}" required>
                                            </div>
                                            <div class="form-group col-xs-12">
                                                <label class="hidden-xs-down" for="inputDetail">
                                                    {{_t('detail',$lang_file)}} <span class="fontorange">*</span>
                                                </label>
                                                <textarea class="form-control" name="detail" id="inputDetail"
                                                          placeholder="{{_t('detail',$lang_file)}}" required></textarea>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="form-group col-xs-12">
                                                <button type="submit" class="btnRedResponsiveMedium">{{_t('submit',$lang_file)}}</button>
                                            </div>
                                        </div>
                                    </form>


                                    <!-- Modal -->
                                    <div id="loadingModal" class="modal hide fade" tabindex="-1" role="dialog"
                                         aria-labelledby="loadingModalLabel" aria-hidden="true" data-keyboard="false"
                                         data-backdrop="static">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                            </button>
                                            <h3 id="loadingModalLabel" class="contactModal textaligncenter">{{_t('Contact Us')}}</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div id="loading-body" class="textaligncenter">
                                                <p>
                                                    <img src="{{URL::asset('/')}}ms/img/ajax-loader.gif"></p>
                                                <p>{{_t('Please wait, The system are sending your request to our customer
                                                    service')}}.</p>
                                                <p>{{_t('Phone 02-8361000')}}</p>
                                                <p>
                                                    {{_t('E-mail')}}:
                                                    <a href="mailTo:info@msrestaurantgroup.com">info@msrestaurantgroup
                                                        .com </a>
                                                </p>
                                            </div>
                                            <div id="success-body" class="textaligncenter">
                                                <p><strong>{{_t('Thank you for your feedback')}}.</strong>
                                                </p>
                                                <p>
                                                    {{_t(' Customer service call 02-8361000 or e-mail')}} <a
                                                            href="mailTo:info@msrestaurantgroup.com">info@msrestaurantgroup
                                                        .com </a>
                                                </p>
                                                <p>
                                                    <button type="button" class="btn btnCloseModal" data-dismiss="modal"
                                                            aria-hidden="true">{{_t('Close window')}}
                                                    </button>
                                                </p>
                                            </div>
                                            <div id="error-body" align="textaligncenter">
                                                <div class="alert alert-block alert-error fade in">
                                                    <p>{{_t('Oops, something went wrong, please try again')}}.</p>
                                                </div>
                                                <p>
                                                    {{_t('Customer service call 02-8361000 or e-mail')}} <a
                                                            href="mailTo:info@msrestaurantgroup.com">info@msrestaurantgroup
                                                        .com </a>
                                                </p>
                                                <p>
                                                    <button type="button" class="btn btnCloseModal" data-dismiss="modal"
                                                            aria-hidden="true">{{_t('Close window')}}
                                                    </button>
                                                </p>
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