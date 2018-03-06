<?php
$lang_file = 'ms_layout';
$postCategories = \Illuminate\Support\Facades\DB::table('item_categories')->where('status', '=','ACTIVE')->get()
?>
<li class="mobiletoggle" tabindex="0">
    <a href="#" title="#">{{ _t('online_delivery',$lang_file) }} (10:00 - 21:00)</a>
    <ul>
        <li><a href="{{ url("/menu/delivery/0") }}" class="xitem-by-categoryx" data-id="0" data-prom="1">{{ _t('promotion',$lang_file) }}</a></li>

        @foreach($postCategories as $itemCategory)
            <li><a href="{{ url("/menu/delivery/{$itemCategory->id}") }}"
                   class="xitem-by-categoryx" data-id="{{ $itemCategory->id }}"
                   data-prom="0">{{$itemCategory->title}}</a>
            </li>
        @endforeach
    </ul>
    <div class="line_end"></div>
</li>
<li class="mobiletoggle" tabindex="0">
    <a href="#" title="#">{{ _t('menu_in_restaurant',$lang_file) }}</a>
    <ul>
        @foreach($postCategories as $itemCategory)
            <li>
                <a href="{{ url("/menu/restaurant/{$itemCategory->id}") }}"
                   class="xitem-by-categoryx" data-id="{{ $itemCategory->id }}"
                   data-prom="0">{{$itemCategory->title}}</a>
            </li>
        @endforeach
    </ul>
    <div class="line_end"></div>
</li>
