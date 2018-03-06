@extends('layouts.front')
@section('title', 'ForgotPasswordtPage')
@section('url'){{url('/customer/forgotpass')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcustomer%2Fforgotpass')}}@endsection
@section('layout-id')
    <div id="forgetpassword">
        @endsection

        @section('content')
            <div class="boxpage">
                <div class="container">
                    @if(!is_m())
                        <div class="row hidden-md-down">
                            <div class="col-xs-12">
                                <div class="breadcrumbList">
                                    <ul class="breadcrumb">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li class="active">Forget Password</li>
                                    </ul>
                                </div>
                                <div class="titleText">
                                    <div class="">
                                        <div class="textHeader">
                                            <div class="linegray">
                                                <h2 id="textHeaderForgetPassword">Forget Password</h2>
                                            </div>

                                            <div class="">
                                                <div class="pull-right">
                                                    <div class="iconForgetPassword"></div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <div class="redbox"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row hidden-lg-up">
                            <h1 class="textHeaderMobile"><img
                                        src="{{URL::asset('/')}}frontstyle/img/responsive/unlock-white.png" alt=""> Forgot
                                Passowrd</h1>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="forgetpasswordBox">
                                    <div class="col-xs-12">
                                        <div id="step1Account" class="step-pane step1Account">
                                            {{--<div class="line1 hidden-md-down"></div>--}}
                                            <div class="forgetpasswordDetailBox">
                                                <div class="textHeaderStep">
                                                    <h3><span class="fontred">Account Information</span></h3>
                                                    <p>| Please fill in your registered email.</p>
                                                </div>
                                                <div class="formCustomerStep">
                                                    @if (session('status'))
                                                        <div class="alert alert-success">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif
                                                    <form class="form-horizontal" role="form" method="POST"
                                                          action="{{ url('/password/email') }}">
                                                        {{ csrf_field() }}
                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                                            <label class="form-control-label col-xs-2 col-lg-2 text-right hidden-md-down"
                                                                   for="inputEmail">Email Address<span
                                                                        class="fontred">*</span></label>
                                                            <div class="col-xs-12 col-lg-10 ">
                                                                <input type="email" id="inputEmail" name="email"
                                                                       class="form-control" placeholder="Email Address"
                                                                       value="{{ old('email') }}" required>
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group row m-t">
                                                            <div class="col-xs-12 col-xs-offset-0 col-lg-offset-2">
                                                                <button type="submit" class="btnRedResponsiveMedium">
                                                                    Submit <img
                                                                            src="{{URL::asset('/')}}frontstyle/img/responsive/arrow-right.png"
                                                                            class="btn-arrow-right" alt=""></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="recoverPasswordBox" class="step3SuccessForgetPassword">
                                            <div class="col-xs-12 text-center">
                                                <div class="smileBox">
                                                    <img src="{{URL::asset('/')}}frontstyle/img/member/forgetpassword/email2.png"
                                                         alt=" "/>
                                                </div>
                                                <div class="">
                                                    <h3 class="fontgreen">RECOVER PASSWORD</h3>
                                                    <p>Please check your email in the email we just sent you,<br/>
                                                        and try to login again.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="passwordBox">
                                                <div class="textRecoverPassword">
                                                    <p>You will receive the email within 3-5 minutes. <br/>
                                                        If you could not receive it, <br/>
                                                        please click resend, or call us: 02-248-5555.</p>
                                                </div>
                                                <button id="btnResend" class="btnResend">RESEND</button>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
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