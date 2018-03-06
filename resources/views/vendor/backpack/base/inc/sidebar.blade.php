@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
            {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
            <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->
                <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i>  <span>{{ trans('backpack::base.dashboard') }}</span></a></li>


                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>Order</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{ backpack_url('order') }}"><i class="fa fa-cog"></i> <span>Order</span></a></li>
                        <li><a href="{{ url('admin/all-order') }}"><i class="fa fa-cog"></i> <span>All Order</span></a></li>
                        <li><a href="{{ url('admin/new-order') }}"><i class="fa fa-cog"></i> <span>New Order</span></a></li>
                        <li><a href="{{ url('admin/cancel-order') }}"><i class="fa fa-cog"></i> <span>Cancel Order</span></a></li>
                        <li><a href="{{ url('admin/paid-order') }}"><i class="fa fa-cog"></i> <span>Paid Order</span></a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>CUSTOMER</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{ backpack_url('customer') }}"><i class="fa fa-cog"></i> <span>Customer</span></a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>PROMOTION</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{ backpack_url('tblpromotion') }}"><i class="fa fa-cog"></i> <span>Promotion</span></a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>HR</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{ backpack_url('tblposition') }}"><i class="fa fa-circle-o"></i> <span>Position</span></a>  </li>
                        <li><a href="{{ backpack_url('tblpostjob') }}"><i class="fa fa-circle-o"></i> <span>Post Job</span></a>  </li>
                        <li><a href="{{ backpack_url('tblapplyjob') }}"><i class="fa fa-circle-o"></i> <span>Apply Job</span></a>  </li>
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>PRODUCT</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{ backpack_url('tbltype') }}"><i class="fa fa-circle-o"></i> <span>Type</span></a> </li>
                        <li><a href="{{ backpack_url('tblcategory') }}"><i class="fa fa-circle-o"></i> <span>Category</span></a> </li>
                        <li><a href="{{ backpack_url('tblproduct') }}"><i class="fa fa-circle-o"></i> <span>Product</span></a> </li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>CARD</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="{{ backpack_url('tblcardcategory') }}"><i class="fa fa-circle-o"></i> <span>Category</span></a> </li>
                        <li><a href="{{ backpack_url('tblcard') }}"><i class="fa fa-circle-o"></i> <span>Card</span></a> </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">  <i class="fa fa-pie-chart"></i>
                        <span>Setting</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i>  </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
                        <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                        <li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i>  <span>File manager</span></a></li>

                        <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                        <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>


                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
                        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
                    </ul>
                </li>
                <li><a href="{{ backpack_url('admin-user') }}"><i class="fa fa-cog"></i> <span>User List</span></a></li>

                <!-- ======================================= -->
                {{-- <li class="header">Other menus</li> --}}
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
@endif
