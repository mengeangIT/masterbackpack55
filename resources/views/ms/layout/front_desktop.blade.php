@php
    $lang_file = 'ms_layout';
@endphp
<header class="header hidden-md-down">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="langHeader pull-right">
                    <ul class="nav nav-pills">
                        @php
                            $langs = \ITPC\MyLangFileManager\app\Models\Language::where('active',1)->get();
                        @endphp
                        @foreach($langs as $row)
                            <li>
                                <a class="" href="{{url('/lang?lan'.'='.$row->abbr)}}">
                                    <img src="{{asset($row->flag)}}" width="28" height="18"
                                         alt="">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="logo pull-left">
                    <div class="mainLogo">
                        <a href="{{url('/home')}}"><h1 title="MS Restaurant">{{ _t('ms_restaurant',$lang_file) }}</h1></a>
                    </div>
                    <div class="desLogo">
                        <span>logo</span>
                    </div>
                </div>
                <div class="formUserlogin  pull-right">
                    <div class="pull-right">
                        <div class="btnShare slide-share-link">
                            <div class="lineBorder slide-share-box">
                                <a href="#" class="btn btn-link slide-share-link">
                                    <img src="{{URL::asset('/')}}ms/img/header/menu/icon_plus.png" alt=" "/>
                                    Share
                                </a>
                                <div class="slide-share">
                                    <ul id="btnShareHeaderTop" class="addthis_toolbox ">
                                        <li>  <div class="fb-share-button" data-href="@yield('url')" data-layout="button" data-size="large" data-mobile-iframe="true">
                                                <a class="fb-xfbml-parse-ignore addthis_button_facebook btn-facebook" target="_blank" href="@yield('sharefb')&amp;src=sdkpreparse">
                                                </a>
                                            </div>
                                        </li>
                                        <li><a href="#" class="addthis_button_twitter btn-twitter">tw</a></li>
                                        <li><a href="#" class="addthis_button_google_plusone_share btn-gplus">g+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="deliveryService">
                            <div class="deliveryPhoneNumber">
                                <p><a class="desDelivery"
                                      href="{{url('/menu/delivery')}}">{{ _t('delivery_service',$lang_file) }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="formLogin">
                            @if ( !session('customer_name'))
                                <ul id="loginBox" class="inline">
                                    <li>
                                        <a class="btnlogin" href="#">
                                            <img src="{{URL::asset('/')}}ms/img/member/login/icon-login2.png"
                                                 alt=" "/> Login
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btnregister" href="{{url('/register')}}">
                                            <img src="{{URL::asset('/')}}ms/img/member/login/icon-user.png"
                                                 width="14" height="15" alt=" "/>{{ _t('register',$lang_file) }}
                                        </a>
                                    </li>
                                    <li><a class="btnforgetpassword"
                                           href="{{url('/customer/forgotpass')}}">{{ _t('forget_password',$lang_file) }}</a>
                                    </li>
                                </ul>
                                {{--=====================Customer Form login Pull Down======================--}}
                                <div id="formLoginDetail" class="formLoginDetail">
                                    <form method="POST" action="{{ url('/login') }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="control-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                            <div class="controls">
                                                <input type="text" id="inputPhone" name="phone" placeholder="phone"
                                                       value="{{ old('phone') }}" required autofocus>
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="control-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="controls">
                                                <input type="password" id="inputPassword" name="password"
                                                       placeholder="PASSWORD" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" id="btnLoginFS"
                                                        class="btn">{{ _t('Login') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @else
                                {{--=====================Member Login Show======================--}}
                                <ul id="logoutBox" class="inline">
                                    <li class="customerUserBox">
                                        <a class="customerUser btncustomer" href="#">
                                            <span class="customerFullname">{{ session('customer_name') }}</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="btnlogout" href="{{ url('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{url('logout')}}" method="get" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>

                                </ul>
                                {{--=====================End Member Login Show======================--}}
                                {{--=====================Member Login Show======================--}}
                                <div id="loginSuccessLinkBox" class="formLoginDetail customerinfo">
                                    <ul id="loginSuccessLink" class="">
                                        <li>
                                            <a class="profileCL"
                                               href="{{url('/customer/profile')}}">{{ _t('your_profile',$lang_file) }}</a></li>
                                        <li>
                                            <a class="addressbookCL"
                                               href="{{url('/customer/address-book')}}">{{ _t('address_book',$lang_file) }}</a>
                                        </li>
                                        <li>
                                            <a class="yourorderCL"
                                               href="{{url('/customer/order-info').'/'.session('customer_id')}}">{{ _t('your_orders',$lang_file) }}</a>
                                        </li>
                                    </ul>
                                </div>
                                {{--=====================End Member Login Show======================--}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mainmenu templateLayout1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-r-0" style="position: static !important">
                    @include('ms.layout.nav-pills')
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    @yield('online-delivery')
</header>

