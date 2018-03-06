<div class="row textSubHeader m-b-0">
    <div class="col-xs-6 pull-right">
        <div class="paginationBox  paginationBoxTop">
            <div class="paginationList paginat-desk" style="display: block;">
                {{ $items->links('vendor.pagination.pagination_desk') }}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div id="productShopStore">
    <div class="row">
        <div class="col-xs-12">
            <div id="vegetable_render">
                <div class="row masonry-grid">
                    @foreach($items as $item)
                        <div class="healthymenuProductBox col-md-4 col-lg-3 col-xs-6 masonry-item">
                            <div class="productListHMBox">
                                <a href="#xitemx-{{ $item->id }}"
                                   data-toggle="modal">
                                    <img width="150" src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}">
                                </a>
                            </div>

                            <div class="caption">
                                <a href="#xitemx-{{ $item->id }}"
                                   data-toggle="modal">
                                        <h4>{{$item->title}}</h4>

                                </a>
                                <p><a class="readmore"
                                      href="#xitemx-{{ $item->id }}"
                                      data-toggle="modal">
                                        more...
                                    </a></p>
                            </div>
                            <div class="price-addtocart">
                                <div class="price-unit pull-left">
                                    <span class="productprice">{{$item->price}}</span><span
                                            class="productunit"> $</span>
                                </div>
                                <div class="addtocart pull-right">
                                    <a class="btnAddtocart btnAddtocartText desktop-addCart"
                                       href="#" data-id="{{$item->id}}"
                                       data-price="{{$item->price}}"
                                       data-name="{{$item->title}}"
                                       data-image="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}">
                                        {{_t('add to cart')}}<img src="{{asset('ms/img/healthymenu/icon-tray.png')}}" alt=" ">
                                    </a>
                                </div>
                                <div class="clear"></div>
                            </div>

                            {{--=============pop up detail======--}}
                            <div id="xitemx-{{ $item->id }}"
                                 class="menu-popup modal  hide fade fade-only"
                                 tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel"
                                 aria-hidden="true"
                                 data-backdrop="true">
                                <div class="modal-dialog menuPopupRedBox"
                                     role="document">
                                    <div class="modal-content">
                                        <div class="listDeliveryProduct modal-body">
                                            <button type="button"
                                                    class="close"
                                                    data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <p class="img imgMenuPopup">
                                                <img data-src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}" alt=" "
                                                         class="lazyloaded my-reload-img">
                                            </p>
                                                <h3>{{$item->title}}</h3>


                                            <p class="">{{$item->description}} </p>
                                            <p class="">
                                                kalory: {{$item->kalory}}
                                                kcal.</p>
                                            <div class="price-addtocart price-addtocartPopup addtocart-desc">
                                                <div class="price-unit pull-left">
                                                    <span class="productprice">{{$item->price}}</span><span
                                                            class="productunit"> $</span>
                                                </div>
                                                <div class="addtocart pull-right">
                                                    <a class="btnAddtocart btnAddtocartText desktop-addCart"
                                                       href="#"
                                                       data-id="{{$item->id}}"
                                                       data-price="{{$item->price}}"
                                                       data-name="{{$item->title}}"
                                                       data-image="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}">{{_t('add to cart')}}
                                                        <img  src="{{asset('ms/img/healthymenu/icon-tray.png')}}"
                                                                alt=" ">
                                                    </a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    @endforeach
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="btnBackToTop-Pagination">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="btnBackToTop pull-left">
                            <a class="btnBackToTop" href="#healthydelivery">
                                Go to top</a>
                        </div>
                    </div>
                    <div class="paginationBox col-xs-9">
                        <div class="paginationList paginat-desk" style="display: block;">
                            {{ $items->links('vendor.pagination.pagination_desk') }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
