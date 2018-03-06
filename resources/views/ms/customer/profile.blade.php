@extends('ms.layout.front')
@section('title', 'ProfilePage')
@section('url'){{url('/customer/profile')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcustomer%2Fprofile')}}@endsection
@section('layout-id')
    <div id="yourprofile">
        @endsection
        @section('content')
            <div class="container">
                @if(!is_m())
                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="active">Your Profile</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>Your Profile</h2>

                                        <div class="iconProfile"></div>
                                        <div class="clearfix"></div>

                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile"> Your Profile</h1>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="descriptionProfile">
                            <p>Importantly, the email address is for receiving order confirmation, password recovery, and our updated promotions. Once you have updated your email address, you will receive an email activation to verify your account again. Please make sure that you entered active email address. Your birth date is essential for recovering your password. It is not allowed to change.</p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="yourPoints pull-right">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="lineYourProfile"></div>
                </div>
                <div id="formYourProfile">
                    <div class="row">
                        <div class="col-xs-12">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="form-horizontal" action="{{ url('/customer/post-profile') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" id="{{'id',$customer->id}}">
                                <div class="accountInfo row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group row">
                                            <div class="col-xs-12"><h4 class="fontred">Account Information</h4></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="form-control-label hidden-xs-down  p-r-0 col-xs-12 col-sm-4" for="inputFirstname">User Name  <span class="fontred">*</span> <span class="semicolonBox pull-right m-a-0 hidden-xs-down">:</span></label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" type="text" id="inputFirstname" name="name" value="{{$customer->name}}" placeholder="User Name " >

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-control-label hidden-xs-down  p-r-0 col-xs-12 col-sm-4" for="inputPhone">Mobile Number <span class="fontred">*</span> <span class="semicolonBox pull-right m-a-0 hidden-xs-down">:</span></label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" type="text" id="inputPhone" name="phone" value="{{$customer->phone}}" placeholder="Mobile Number" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-control-label hidden-xs-down  p-r-0 col-xs-12 col-sm-4" for="inputEmail">Email Address <span class="fontred">*</span> <span class="semicolonBox pull-right m-a-0 hidden-xs-down">:</span></label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" type="email" id="inputEmail" name="email" value="{{$customer->email}}" placeholder="Email Address" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="form-control-label hidden-xs-down  p-r-0 col-xs-12 col-sm-4" for="inputNewPassword">Password <span class="fontred">*</span> <span class="semicolonBox pull-right m-a-0 hidden-xs-down">:</span></label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" type="password" name="password" value="{{$customer->password}}" id="inputNewPassword" placeholder="New Password" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group row">
                                            <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-4 col-md-offset-2">
                                                <button type="submit" class="inputSaveDataProfile btnRedResponsiveMedium text-uppercase">Save Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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