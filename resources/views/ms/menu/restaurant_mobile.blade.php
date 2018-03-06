<div class="container hidden-md-up p-t">
    <div class="row">
        <form action="" method="get">
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
<div class="nav-product-wrapper hidden-md-up m-t top-menu-restaurant-toggle">
    <div class="cat-click-change nav-product-menu-responsive hidden-md-up">
        <i class="fa fa-play"></i>
        <img src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($image)) }}" alt="" class="img-category-list" style="height: 30px;margin-top:-7px">
        <span style="color:#009f4e;font-family: 'Roboto', serif;font-size: 16px;line-height: 52px" class="title-category-list">{{$categoryName}}</span>
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

<div class="hidden-md-up menu-restaurant-toggle" style="background:#eeeeee;position: relative;display:none">
    <div class="col-xs-12 line-between-nav-product">
        <hr class="m-a-0">
    </div>
    <ul style="height: 340px" class="container home-product-menu-mobile m-b-0 animated list-unstyled" role="tablist">
        @foreach($itemCategories as $itemCategory)

            <li class="col-xs-4 p-a-0 vegetable nav-item img-category-list-click {{ $loop->first && $keyword?'my-keyword':'' }} category{{ $itemCategory->id }}">
                <a style="line-height: 14px;bottom:-6px !important" data-imgname="freshfood.svg" class="nav-link category{{ $itemCategory->id }}"
                   href="#category{{ $itemCategory->id }}-mobile" role="tab" data-toggle="tab">
                    <img src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($itemCategory->image)) }}"
                         alt="{{$itemCategory->cat_des_en}}" class="img-responsive img-center">
                    <span class="title-category-list-click">{{$itemCategory->cat_des_en}}</span>
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
                                <div class="col-xs-6 col-sm-4 col-md-3 product-list-responsive text-center masonry-item" data-page="1">
                                    <div class="div-product-img">
                                        <img class="product-img" src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}">
                                    </div>
                                    <p class="m-a-0 kcal-detail">{{$item->title}}</p>
                                    <hr>
                                    <p class="m-a-0 text-left">{{$item->kalory}} kcal.</p>
                                    <div style="background:#7a7a7a;color:#ffffff;font-family: 'Roboto', serif;font-size: 14px;line-height: 30px" class="text-center m-t">Menu in Restaurant</div>
                                </div>
                            @endforeach
                        @endforeach
                        <div class="hidden-sm-up clearfix"></div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="btnBackToTop pull-left m-t-lg">
            <a class="btnBackToTop" href="#healthymenu">
                goto top</a>
        </div>
    </div>
</div>

