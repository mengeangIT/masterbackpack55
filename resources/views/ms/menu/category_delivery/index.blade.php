<?php
$lang_file = 'ms_menu';
?>
<li class="nav-item">
    <a id="promotionHM" href="#" data-toggle="tab"  class="item-by-category active ZX01"  data-id="0" data-prom="1" data-zx="{{_t('Promotion')}}">
        <img src="{{URL::asset('/')}}ms/img/responsive/menu/promotion.png"
             alt="Vegetable" class="img-responsive img-center">
        <p class="m-t">{{_t('promotion',$lang_file)}}</p>
        <i class="fa fa-play"></i>
    </a>
</li>
@foreach($itemCategories as $itemCategory)

    <li class="nav-item">
        <a class="item-by-category {{'ZX'.$itemCategory->id}}" id="vegetableHM"
           data-id="{{ $itemCategory->id }}" data-zx="{{$itemCategory->cat_des_en}}" data-prom="0"
           href="#"
           data-toggle="tab">

                <img src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($itemCategory->image)) }}"
                     alt="{{$itemCategory->title}}"
                     class="img-responsive img-center">

                <p class="m-t">{{$itemCategory->title}}</p> <i
                        class="fa fa-play"></i>


        </a>
    </li>
@endforeach