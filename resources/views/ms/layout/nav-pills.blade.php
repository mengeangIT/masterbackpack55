@php
    $lang_file = 'ms_layout';
@endphp
<ul id="mainmenuHeader" class="nav nav-pills">
    <li {{isset($select1)?$select1=='home'?'class=active':'':''}}>
        <a href="{{url('/home')}}" title="MS Restaurant" class="homemenu"
           style="width: 33.99px !important;">{{ _t('home_page',$lang_file) }}</a>
    </li>
    <li class="submenu submenuInvestor {{isset($select1)?$select1=='About MS'?'active':'':''}}">
        <a class="investorMN" href="{{url('/about')}}"
           style="font-size: 1.31em !important;">{{ _t('about_ms',$lang_file) }}</a>
        <div class="mainsubmenu">
            <div class="active-bar"><img
                        src="{{URL::asset('/')}}ms/img/header/menu/sub_menu_bar_active.png"
                        alt=" "/></div>
            <div class="container">
                <ul class="inline">
                    <li><a href="{{url('/about')}}"
                           style="font-size: 1.31em !important;">&bull;{{ _t('history',$lang_file) }}</a>
                    </li>
                    <li><a href="{{url('/contact')}}"
                           style="font-size: 1.31em !important;">&bull; {{ _t('contact',$lang_file) }}</a>
                    </li>
                    <li><a href="{{url('/career')}}"
                           style="font-size: 1.31em !important;">&bull; {{ _t('career',$lang_file) }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li class="submenu submenuInvestor {{isset($select1)?$select1=='MS Concept'?'active':'':''}}">
        <a class="investorMN" href="{{url('/concept')}}"
           style="font-size: 1.31em !important;">{{ _t('concept',$lang_file) }}</a>
        <div class="mainsubmenu">
            <div class="active-bar"><img
                        src="{{URL::asset('/')}}ms/img/header/menu/sub_menu_bar_active.png"
                        alt=" "/></div>
            <div class="container">
                <ul class="inline">
                    <li><a href="{{url('/concept')}}"
                           style="font-size: 1.31em !important;">&bull;{{ _t('we_care_about_your_health',$lang_file) }}</a>
                    </li>
                    <li><a href="{{url('/concept')}}"
                           style="font-size: 1.31em !important;">&bull; {{ _t('excellent_source_of_protein',$lang_file) }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li {{isset($select1)?$select1=='Promotion'?'class=active':'':''}}><a class="promotionMN" href="{{url('/promotion')}}"
           style="font-size: 1.31em !important;">{{ _t('promotion',$lang_file) }}</a></li>

    <li class="submenu submenuHealthymenu {{isset($select1)?$select1=='Healthy Menu'?'active':'':''}}">
        <a class="healthymenuMN" href="{{url('/menu/restaurant')}}"
           style="font-size: 1.31em !important;">{{ _t('menu',$lang_file) }}</a>
        <div class="mainsubmenu">
            <div class="active-bar"><img
                        src="{{URL::asset('/')}}ms/img/header/menu/sub_menu_bar_active.png"
                        alt=" "/></div>
            <div class="container">
                <ul class="inline">
                    <li><a href="{{url('/menu/restaurant')}}"
                           style="font-size: 1.31em !important;">&bull; {{ _t('menu_in_restaurant',$lang_file) }}</a>
                    </li>
                    <li><a href="{{url('/menu/delivery')}}"
                           style="font-size: 1.31em !important;">&bull; {{ _t('online_delivery',$lang_file) }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li {{isset($select1)?$select1=='MS Card'?'class=active':'':''}}><a class="cardMN" href="{{url('/card')}}"
           style="font-size: 1.31em !important;">{{ _t('ms_card',$lang_file) }}</a></li>
    <li {{isset($select1)?$select1=='MS Branch'?'class=active':'':''}}><a class="MSbranch-mn branchMN" href="{{url('/branch')}}"
           style="font-size: 1.31em !important;">{{ _t('branch',$lang_file) }}</a></li>

    <li {{isset($select1)?$select1=='MS Career'?'class=active':'':''}}><a class="activityMN" href="{{url('/career')}}"
           style="font-size: 1.31em !important;">{{ _t('career',$lang_file) }}</a></li>
    <li class="pull-right {{isset($select1)?$select1=='Feedback'?'active':'':''}}"><a href="{{url('/feedback')}}" style="display:table"><i
                    class="fa fa-heart"
                    style="display:table-cell;vertical-align: middle;padding-right: 5px; font-size: 1.31em !important;"></i>{{ _t('feedback',$lang_file) }}
        </a></li>
</ul>