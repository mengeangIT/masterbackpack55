<ul id="menucard" class="nav nav-tabs nav-justified xhiddenx-xs-down">
    @foreach($card_categories as $card_category)
        <li class="m-l-0 nav-item card{{$card_category->id}} my-card-my">

                <a data-toggle="tab"  href="#card{{$card_category->id}}"  class="my-activemenu-card">
                    <span>{{_t('MS')}} &nbsp;</span>
                    <br class="hidden-xs-down">{{$card_category->title}}
                </a>

        </li>
    @endforeach
</ul> 