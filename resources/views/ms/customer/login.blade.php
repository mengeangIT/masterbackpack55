@extends('ms.layout.front')
@section('title', 'SignInPage')
@section('layout-id')
    <div id="login">
        @endsection
        @section('mobile-content')
        @endsection
        @section('content')
            <div class="container">

                <div class="row hidden-md-down">
                    <div class="col-xs-12">
                        <div class="breadcrumbList">
                            <ul class="breadcrumb">
                                <li><a href="{{url('/home')}}">Home</a></li>
                                <li class="active">Login</li>
                            </ul>
                        </div>
                        <div class="titleText">
                            <div class="">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>Login</h2>
                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hidden-lg-up">
                    <h1 class="textHeaderMobile"><small><i class="fa fa-lock"></i></small>  Login</h1>
                </div>
                <div class="row text-center">
                    <div class="col-xs-12 col-lg-4 col-lg-offset-4">
                        <form method="POST" action="{{ url('/login') }}" accept-charset="UTF-8" class="form-login-mobile">
                            {{ csrf_field() }}}}
                            <div class="form-group row {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <input id="phone" class="form-control" placeholder="phone" name="phone" type="text" value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <input class="form-control" placeholder="Password *" name="password" type="password" value="" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <button type="submit">Login</button>
                                    <hr style="margin-bottom: 5px;">
                                    <a href="{{url('/customer/forgotpass')}}" title="" class="btnForgotPasswordMobile"><i class="fa fa-unlock-alt" style="font-size: 1rem"></i> Forgot Passowrd</a> |
                                    <a href="{{asset('/customer/register')}}" title="" class="btnForgotPasswordMobile"><i class="fa fa-user" style="font-size: 1rem"></i> Register</a>
                                </div>
                            </div>

                        </form>


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