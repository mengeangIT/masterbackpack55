
<div class="container hidden-md-up p-t">
    <div class="row">
        <form action="{{url('menu/delivery')}}" method="get">
            <div class="col-xs-8 hidden-md-up p-r-0">
                <div class="icon-addon addon-md">
                    <input type="search" placeholder="SEARCH" class="form-control" name="keyword"
                           value="{{ $keyword }}" style="border-radius: 0">
                    <label class="fa fa-search" rel="tooltip" title="email"></label>
                </div>
            </div>
            <div class="col-xs-4 hidden-md-up p-l-0">
                <input type="submit" value="SEARCH" class="btn btn-danger btn-sm form-control"
                       style="border-radius: 0;height: 33px;background:#f06e1e">
            </div>
        </form>
    </div>
</div>
@if(is_m() || is_t())
    @php
        $img_pro = url('ms/img/responsive/menu/promotion.png');
    @endphp
    <div class="nav-product-wrapper hidden-md-up m-t top-menu-delivery-toggle">
        <div class="cat-click-change nav-product-menu-responsive hidden-md-up">
            <i class="fa fa-play"></i>
            <img src="{{ $image == ''?$img_pro:url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($image)) }}" alt=""
                 class="img-category-delivery-list"
                 style="height: 30px;margin-top:-7px">
            <span class="title-category-delivery-list"
                  style="color:#009f4e;font-family: 'Roboto', serif;font-size: 16px;line-height: 52px">{{ $categoryName }}</span>
        </div>
    </div>

    <script>
        $(".nav-product-menu-responsive").click(function(){
            if ( $('.cat-click-change').hasClass('active') ){
                $('.cat-click-change').removeClass('active');
            }else{
                $(".cat-click-change").addClass("active");
            }
        });
    </script>
@endif
<div class="hidden-md-up menu-delivery-toggle"
     style="background:#eeeeee;position: relative;display:none">
    <div class="col-xs-12 line-between-nav-product">
        <hr class="m-a-0">
    </div>
    <ul style="height: 340px" class="container home-product-menu-mobile m-b-0 animated list-unstyled" role="tablist">

        <li class="col-xs-4 p-a-0 promotion nav-item img-category-delivery-list-click">
            <a data-imgname="promotion.png" class="nav-link promotion" href="#promotion-mobile"
               role="tab" data-toggle="tab">
                <img src="{{URL::asset('/')}}ms/img/responsive/menu/promotion.png"
                     alt="Vegetable" class="img-responsive img-center">
                <span class="title-category-delivery-list-click">{{_t('Promotion')}}</span>
            </a>
        </li>

        @foreach($itemCategories as $itemCategory)
            <li class=" col-xs-4 p-a-0 vegetable nav-item {{ $loop->first && $keyword?'my-keyword':'' }} img-category-delivery-list-click category{{ $itemCategory->id }}">
                <a style="line-height: 14px;bottom:-6px !important" data-imgname="vegetable.png"
                   class="nav-link category{{ $itemCategory->id }}"
                   href="#category{{ $itemCategory->id }}-mobile"
                   role="tab" data-toggle="tab">
                        <img src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($itemCategory->image)) }}"
                             alt="{{$itemCategory->title}}"
                             class="img-responsive img-center">
                    <span class="title-category-delivery-list-click">{{$itemCategory->title}}</span>
                </a>
            </li>
        @endforeach

        <div class="clearfix"></div>
        <br>
    </ul>
    <div class="overlay-menu-product animated"></div>
</div>

<div class="container">
    <div class="hidden-md-up">
            <div class="tab-content">

            <?php
                $cateItemss = \App\Models\TblProduct::where('status', '=','ACTIVE')
                    ->where('pro_status','=','ACTIVE')
                    ->get();
            ?>
            <div role="tabpanel" class="fade tab-pane fade" id="promotion-mobile">
                <div class="row masonry-grid">
                    @foreach ( collect($cateItemss)->chunk(2) as $chunk)
                        @foreach($chunk as $item)
                            <div class="col-xs-6 col-sm-4 col-md-3 product-list-responsive text-center masonry-item"
                                 data-page="1">
                                <div class="div-product-img">
                                    <img class="product-img" src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}" alt=" ">
                                </div>
                                <p class="m-a-0 kcal-detail">{{$item->title}}</p>

                                <hr>
                                <p class="m-a-0">
                                    <span class="pull-left">{{$item->kalory}} kcal.</span>
                                    <span class="pull-right"> {{$item->price}} $</span>
                                </p>

                                <div class="clearfix"></div>
                                <a href="#" data-id="{{$item->id}}"
                                   data-price="{{$item->price}}"
                                   data-name="{{$item->pro_des_en}}"
                                   data-image="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}"
                                   class="btnAddtoCartResponsive text-center m-t desktop-addCart">Add
                                    to cart <img
                                            src="{{URL::asset('/ms/')}}/img/responsive/arrow-right.png"
                                            class="btn-arrow-right" alt="">
                                </a>
                            </div>
                        @endforeach
                        <div class="hidden-sm-up clearfix"></div>
                    @endforeach
                </div>
            </div>


            @foreach($itemCategories as $itemCategory)
                <?php
                    if($keyword){
                        $cateItemss = \App\Models\TblProduct::where('status', '=','ACTIVE')->where('pro_des_en','like','%'.$keyword.'%')->get();
                    }else{
                        $cateItemss = \App\Models\TblProduct::where('status', '=','ACTIVE')->where('pro_cate',$itemCategory->id-0)->get();
                    }
                ?>
                <div role="tabpanel" class="fade tab-pane" id="category{{ $itemCategory->id }}-mobile">
                    <div class="row masonry-grid">
                        @foreach ( collect($cateItemss)->chunk(2) as $chunk)
                            @foreach($chunk as $item)
                                <div class="col-xs-6 col-sm-4 col-md-3 product-list-responsive text-center masonry-item"
                                     data-page="1">
                                    <div class="div-product-img">
                                        <img class="product-img" src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename(($item->image)) }}" alt="">
                                    </div>
                                    <p class="m-a-0 kcal-detail">{{$item->title}}</p>
                                    <hr>
                                    <p class="m-a-0">
                                        <span class="pull-left">{{$item->kalory}} kcal.</span>
                                        <span class="pull-right"> {{$item->price}} $</span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <a href="#" data-id="{{$item->id}}"
                                       data-price="{{$item->price}}"
                                       data-name="{{$item->pro_des_en}}"
                                       data-image="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename(($item->image)) }}"
                                       class="btnAddtoCartResponsive text-center m-t desktop-addCart">Add
                                        to cart <img
                                                src="{{URL::asset('/ms/')}}/img/responsive/arrow-right.png"
                                                class="btn-arrow-right" alt="">
                                    </a>
                                </div>
                            @endforeach
                            <div class="hidden-sm-up clearfix"></div>
                        @endforeach
                    </div>
                </div>
                @if($keyword)
                    @break
                @endif
            @endforeach

            <div class="btnBackToTop pull-left m-t-lg">
                <a class="btnBackToTop" href="#healthydelivery">
                    go to top</a>
            </div>
        </div>
    </div>
</div>
                