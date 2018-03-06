@foreach($itemCategories as $itemCategory)
    <li class="nav-item">
        <a class="rest-item-by-category {{'RZX'.$itemCategory->id}}" id="vegetableHM"
           data-id="{{ $itemCategory->id }}" data-rzx="{{$itemCategory->cat_des_en}}"
           data-prom="0"
           href="#"
           data-toggle="tab">

            <img src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($itemCategory->image)) }}"
                 alt="{{ $itemCategory->title }}" class="img-responsive img-center">

                <p class="m-t">{{$itemCategory->title}}</p>

            <i class="fa fa-play"></i>
        </a>
    </li>
@endforeach