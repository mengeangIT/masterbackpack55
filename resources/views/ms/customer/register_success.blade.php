
@extends('ms.layout.front')
@section('title', 'RegisterSuccessPage')
@section('url'){{url('/register')}}@endsection
@section('sharefb'){{('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fregister')}}@endsection
    @section('layout-id')

         <div id="registersuccess">

    @endsection

        @section('content')
            <div class="boxpage">

                <div class="container">
                    @if(!is_m())
                        <div class="row hidden-md-down">
                            <div class="col-xs-12">
                                <div class="breadcrumbList">
                                    <ul class="breadcrumb">
                                        <li><a href="{{url('/home')}}">{{_t('Home')}}</a></li>
                                        <li class="active">{{_t('Register')}}</li>
                                    </ul>
                                </div>
                                <div class="titleText">
                                    <div class="">
                                        <div class="textHeader">
                                            <div class="linegray">
                                                <h2 id="textHeaderRegistration">{{_t('Registration')}}</h2>


                                                <div class="">
                                                    <div class="pull-right">
                                                        <div class="iconRegister"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>

                                            </div>

                                            <div class="redbox"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row hidden-lg-up">
                            <h1 class="textHeaderMobile"><img src="{{URL::asset('/')}}frontstyle/img/responsive/unlock-white.png" alt="">{{_t('Register')}}</h1>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <div class="contentRegisterSuccess">
                                <div class="textHeaderRegister">
                                    <h3 class="fontgreen ">{{_t('Successful Registration')}}</h3>
                                    <div class="descriptionHeader fontred"><p>{{_t('Welcome Master Suki Soup Online Membership')}}</p></div>
                                </div>
                                <div class="descriptionRegisterSuccess">
                                    {{--<p>Your special privileges with MS Online Membership have just begun!<br/>--}}
                                        {{--Every 100 baht purchase via our websites, www.msrestaurants.com or <br/>--}}
                                        {{--www.msrestaurants.com (after any discounts and excluding the delivery fee).</p>--}}
                                    {{--<p>Earn 10 Happy point, valued 10 baht for your next purchase discount. And we will serve you <br/>--}}
                                        {{--special privileges continuously.</p>--}}

                                    <p>{{_t('Your special privileges with Master Suski Soup Online Membership have just begun!')}}<br/>
                                    <p>{{_t('special privileges continuously.')}}</p>

                                    <div class="linkShopping">
                                        <ul>
                                            @if (Auth::guest())
                                                <li><span><a href="{{url('/customer/checkout')}}" class="fontred">{{_t('Checkout Your Order')}}</a></span></li>
                                            @else
                                                <li><span><a href="{{url('/customer/checkout').'/'.Auth::id()}}" class="fontred">{{_t('Checkout Your Order')}}</a></span></li>

                                            @endif

                                            <li><span><a href="{{url('/menu/delivery')}}" class="fontred"><u>{{_t('Continue Order')}}</u></a></span></li>
                                            <li><span><a href="{{url('/customer/profile')}}" class="fontred">{{_t('Update Your Profile')}}</a></span></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                        function selectBestSale()
                        {
                            return 'SELECT items.id,items.item_category_id,items.title,items.kalory,items.image_url,items.price,items.description,items.content,items.item_type,items.recommend,items.best_sale,items.is_active,items.created_by,items.updated_by,items.created_at,items.updated_at FROM items WHERE items.best_sale=1 AND items.is_active=1';
                        }
                        ?>
                        {{--<div class="col-xs-12 col-sm-3">--}}
                            {{--<div class="bestSellerProductRBox">--}}
                                {{--<h3><img src="{{URL::asset('/')}}frontstyle/img/healthymenu/icon_order_now.png" alt=" "/> {{_t('ORDER NOW!')}}</h3>--}}
                                {{--@foreach(\Illuminate\Support\Facades\DB::select(selectBestSale()) as $item)--}}
                                    {{--<div class="bestSellerProductDetailR">--}}
                                        {{--@foreach(json_decode($item->image_url) as $v)--}}
                                            {{--<img src="{{asset('/public/uploads/').'/'.$v}}">--}}
                                        {{--@endforeach--}}
                                        {{--<img src="https://mkrestaurant.com/uploads/image/BD04F15C-F435-4F36-9DA6-B3949BD79232.jpg" alt=" "/>--}}
                                        {{--<h4 class="fontred">{{_tt(json_decode($item->title))}}</h4>--}}
                                        {{--<p>{{_tt(json_decode($item->description))}}</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="price-addtocart">--}}
                                        {{--<div class="price-unit pull-left">--}}
                                            {{--<span class="productprice">{{$item->price}}</span> <span class="productunit">$ </span>--}}
                                        {{--</div>--}}
                                        {{--<div class="addtocart pull-right">--}}
                                            {{--<a class="btnAddtocart" href="https://mkrestaurant.com/en/checkout/add-cart-item-go-to-delivery/71" data-id="71">add to cart <img src="https://mkrestaurant.com/img/healthymenu/icon-tray.png" width="39" height="41" alt=" "/></a>--}}
                                            {{--<a class="btnAddtocart desktop-addCart" href="{{url('/menu/delivery')}}"  data-id="{{$item->id}}"--}}
                                               {{--data-price="{{$item->price}}"--}}
                                               {{--data-name="{{_tt(json_decode($item->title))}}"--}}
                                               {{--data-image="@foreach(json_decode($item->image_url) as $v){{asset('/public/uploads/').'/'.$v}}@endforeach" >{{_t('add to cart')}}<img src="{{URL::asset('/')}}frontstyle/img/healthymenu/icon-tray.png" width="39" height="41" alt=" "/></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="clear"></div>--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>

                </div>

            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent

@endsection