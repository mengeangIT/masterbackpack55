<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->

    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- ========================================================= -->
      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-globe"></i> Translations<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li class=""><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
                <li class=""><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
            </ul>
        </li>
      <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning count-order-notification"></span>
            </a>
            <ul class="dropdown-menu">
                <li class="header">You have <span class="count-order-notification" style="color: red;"></span> notifications</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">

                        <ul class="menu alert-new-order-class" style="overflow: hidden; width: 100%; height: 200px;">
                            {{--==============data===========--}}
                        </ul>

                        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 195.122px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                </li>
                <li class="footer"><a href="{{url('/admin/all-order')}}">View all</a></li>
            </ul>
        </li>
      @if (config('backpack.base.setup_auth_routes'))
        @if (Auth::guest())
            <li><a href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
            <li><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else

            <li><a href="{{ route('backpack.auth.logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
        @endif
       @endif
       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
