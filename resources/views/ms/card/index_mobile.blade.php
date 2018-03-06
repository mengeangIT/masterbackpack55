<ul class="nav nav-tabs nav-card-responsive xhiddenx-sm-up affix-top" role="tablist">
    <li class="nav-item dropdown open">
        <a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true" > <i class="fa fa-play top-toggle-mobile-card " style="font-size: 16px;color:#999999"></i>
            <label class="text-for-change top-toggle-mobile-card title-card-list ms-select-card"><span>{{_t('ms')}} &nbsp;</span> </label>
        </a>
        <div>
            @foreach($card_categories as $card_category)

                    <a style="display: none;" data-id="{{$card_category->id}}" class="toggle-mobile-card card{{$card_category->id}} title-card-list-click my-activemenu-card-m"
                       href="#card{{$card_category->id}}">

                        <span>{{_t('MS')}} &nbsp;</span> {{$card_category->title}}
                    </a>

            @endforeach
        </div>
    </li>
</ul>