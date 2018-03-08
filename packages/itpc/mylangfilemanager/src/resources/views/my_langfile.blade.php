<li class="treeview">
    <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/my-language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/my-language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
    </ul>
</li>