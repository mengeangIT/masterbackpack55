@extends('ms.layout.front')
@section('title', 'RegisterPage')
@section('layout-id')
    <div id="register">
        @endsection

        {{--<!--========================================--}}
        {{--=            Mobile content lists          =--}}
        {{--=========================================-->--}}

        @section('mobile-content')

        @endsection

        {{--=====  End of Mobile content lists  ======--}}

        @section('content')
            <div class="boxpage">

                <div class="container">
                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="active">Register</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="">
                                    <div class="textHeader">
                                        <div class="linegray">
                                            <h2 id="textHeaderRegistration">Registration</h2>
                                        </div>


                                        <div class="">
                                            <div class="pull-right">
                                                <div class="iconRegister"></div>
                                                <!-- <img src="https://www.mkrestaurant.com/img/member/addressbook/icon-addressbook.png" alt=" "/> -->

                                            </div>
                                        </div>
                                        <div class="clear"></div>

                                        <div class="redbox"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile"><small><i class="fa fa-lock"></i></small> Register</h1>
                    </div>

                    <div class="row" id="registerFormBox">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="registerBox">
                                        <div id="step1Account" class="step-pane step1Account">
                                            <div class="registerDetailBox">
                                                <div class="textHeaderStep">
                                                    <h3><span class="fontred">Account Information</span></h3>
                                                    <p>Once registered, an email is not allowed to be duplicated, as it is crucial for account verification.<br/>
                                                        Please fill in a unique email for registration. However, if your former email is preferred, <br/></p>
                                                </div>
                                                <div class="formCustomerStep">

                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <form action="{{ url('/register') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                        <div class="form-group row">
                                                            <label class="form-control-label hidden-xs-down col-xs-2 p-r-0" for="inputFirstname">User Name <span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                            <div class="col-xs-12 col-sm-5">
                                                                <input type="text" name="name" id="inputFirstname" class="form-control" placeholder="Input Your Name Here*" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-control-label hidden-xs-down col-xs-2 p-r-0 " for="inputPhone">Mobile Number<span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                            <div class="col-xs-12 col-sm-5">
                                                                <input type="text" id="inputPhone" name="phone" maxlength="10" class="form-control" placeholder="Mobile Number *" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-control-label hidden-xs-down col-xs-2 p-r-0" for="inputEmail">Email Address<span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                            <div class="col-xs-12 col-sm-5">
                                                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Input Your Email Address Here *" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-control-label hidden-xs-down col-xs-2 p-r-0" for="inputPassword">Password<span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                            <div class="col-xs-12 col-sm-5">
                                                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password *" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-control-label hidden-xs-down col-xs-2 p-r-0" for="inputConfirmPassword">Confirm Password <span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                            <div class="col-xs-12 col-sm-5">
                                                                <input type="password" name="password_confirmation" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password *" required>
                                                            </div>
                                                        </div>
                                                        <div class="textHeaderStep">
                                                            <h3><span class="fontred">Delivery Information</span></h3>
                                                            <p>Please provide the primary address. If your province and ampher are not in the dropdown list, which means your location is not deliverable.</p>
                                                        </div>
                                                        <div class="row formCustomerStep">
                                                            <div class="col-xs-12 col-md-6 ">
                                                                <div class="form-group row">
                                                                    <label class="form-control-label hidden-xs-down col-xs-4 p-r-0" for="inputProvince">City or Province  <span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                                    <div class="col-sm-8 col-xs-12">
                                                                        <select id="inputProvince" name="province_city" class="form-control" required>
                                                                            <option value="" selected="selected">Select City or Province  *</option>
                                                                            <option value="Phnom-Penh">Phnom Penh</option>
                                                                            <option value="Sihanoukville">Sihanoukville</option>
                                                                            <option value="Seim-Reap">Seim Reap</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="form-control-label hidden-xs-down col-xs-4 p-r-0" for="inputFloor">House Number <span class="semicolonBox">:</span></label>
                                                                    <div class="col-sm-8 col-xs-12">
                                                                        <input type="text" name="house_number" class="form-control" id="inputFloor" placeholder="House Number *" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="form-control-label hidden-xs-down col-xs-4 p-r-0" for="inputFloor">Sangkat <span class="semicolonBox">:</span></label>
                                                                    <div class="col-sm-8 col-xs-12">
                                                                        <input type="text" name="sangkat" class="form-control" id="inputFloor" placeholder="Sangkat *" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="form-control-label hidden-xs-down col-xs-4 p-r-0" for="inputLocationtype">Select Location Type<span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                                    <div class="col-sm-8 col-xs-12">
                                                                        <select id="inputLocationtype" class="form-control" name="location_type" required>
                                                                            <option value="">Location Type *</option>
                                                                            <option value="Single-House">Single House</option>
                                                                            <option value="Town-House">Town House</option>
                                                                            <option value="Commercial-Building">Commercial Building</option>
                                                                            <option value="School">School</option>
                                                                            <option value="Condominium">Condominium</option>
                                                                            <option value="Office-Building">Office Building</option>
                                                                            <option value="Townhouse">Townhouse</option>
                                                                            <option value="Apartment">Apartment</option>
                                                                            <option value="Company">Company</option>
                                                                            <option value="Flat">Flat</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="form-control-label hidden-xs-down col-xs-4 p-r-0" for="inputBuildingName">Road <span class="semicolonBox">:</span></label>
                                                                    <div class="col-sm-8 col-xs-12">
                                                                        <input type="text" name="road" class="form-control" id="inputBuildingName" placeholder="Road *" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="form-control-label hidden-xs-down col-xs-4 p-r-0" for="inputRoomnumber">Khan <span class="semicolonBox">:</span></label>
                                                                    <div class="col-sm-8 col-xs-12">
                                                                        <input name="khan" type="text" class="form-control" id="inputRoomnumber" placeholder="Khan *" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row  hidden-xs-down ">
                                                            <label class="form-control-labelcol-xs-12 p-r-0" for="inputZipcode"><strong>Please describe your address direction in short.</strong></label>
                                                        </div>
                                                        <div class="form-group row directionGuideBox">
                                                            <label class="form-control-label hidden-xs-down col-xs-2 p-r-0" for="inputDirectionGuide">Direction guide  <span class="fontred">*</span> <span class="semicolonBox">:</span></label>
                                                            <div class="col-sm-10 col-xs-12">
                                                                <textarea id="inputDirectionGuide" name="direction_guide" placeholder="Direction guide  *" class="form-control" maxlength="2000" required></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-2">
                                                                <button type="submit" class="btnRedResponsiveMedium">Submit <img src="{{URL::asset('/')}}frontstyle/img/responsive/arrow-right.png" class="btn-arrow-right" alt=""></button>
                                                            </div>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                        {{--========================End of Register Step 1=================--}}
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- registerThanksBox -->
                    {{--<div class="row " id="registerThanksBox">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<div class="registerThanksBox">--}}
                                {{--<div class="lineBottom">--}}
                                    {{--<div class="registerThanksBoxInside">--}}
                                        {{--<div class="smileBox text-center">--}}
                                            {{--<img src="https://mkrestaurant.com/img/member/register/smile.png" alt=" "/>--}}
                                        {{--</div>--}}
                                        {{--<div class="textHeader text-center">--}}
                                            {{--<h3 class="fontgreen">THANKS FOR SIGNING UP</h3>--}}
                                            {{--<p>Please check your email and click Active <br/>--}}
                                                {{--Your Accoount in the email we just sent you.                    </p>--}}
                                            {{--<div class="imageEmail">--}}
                                                {{--<img src="{{URL::asset('/')}}frontstyle/img/responsive/email.svg"  width="163"/>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="clear"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                                {{--<div class="textSendEmail">--}}
                                    {{--<p>You will receive the email within 3-5 minutes.<br/>--}}
                                        {{--If you could not receive it,<br/>--}}
                                        {{--please click resend, or call us: 02-248-5555.</p>--}}
                                    {{--<div class="btnResendBox">--}}
                                        {{--<button id="btnResend" class="btnRedResponsiveMedium">Resend <img src="{{URL::asset('/')}}frontstyle/img/responsive/arrow-right.png" class="btn-arrow-right" alt=""></button>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    <!-- Modal -->
                    <div id="loadingModal" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3 id="loadingModalLabel" class="contactModal textaligncenter">Register</h3>
                                </div>
                                <div class="modal-body">
                                    <div id="loading-body" class="textaligncenter">
                                        <p><img src="https://mkrestaurant.com/img/ajax-loader.gif"></p>
                                        <p>Please wait, we are processing your request.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="loadingModalResend" class="modal hide fade " tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3 id="loadingModalLabel" class="contactModal textaligncenter">Register</h3>
                                </div>
                                <div class="modal-body">
                                    <div id="loading-body" class="textaligncenter">
                                        <p><img src="{{URL::asset('/')}}frontstyle/img/ajax-loader.gif"></p>
                                        <p>Please wait, we will resend you an email again.</p>
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