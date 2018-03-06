@extends('ms.layout.front')
@section('title', 'CheckOutSuccessPage')
@section('url'){{url('/customer/checkout-success')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcustomer%2Fcheckout-success')}}@endsection
@section('layout-id')
    <div id="checkoutsuccess">
        @endsection

        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">

                        <div class="orderComplete">
                            <h3><img src="{{URL::asset('/')}}ms/img/ordercomplete/success/icon_right.png" class="xhiddenx-sm-down" alt=" "/> Your Order<span class="fontred"> Success</span></h3>
                            <div class="linegray"></div>
                            <div class="contentDetail">
                                <div class="iconStatus"><img src="{{URL::asset('/')}}ms/img/ordercomplete/success/icon_smile.png" alt=" "/></div>
                                <p class="textThanks fontred">Thank you for your ordering! </p>
                                <p>You will be arrive before  <span class="fontgreen"> date time arrive</span> </p>
                                <p class="fontgreen">If you would like to change your order detail or have not receive your order within  <span class="fontgray">60</span> minute <br/>  please call us: 023 222 230/ 081 288 882</p>
                                <a class="btnViewYourOrder btnRedResponsiveMedium" href="{{url('/customer/order-info').'/'.session('customer_id')}}">Order Information
                                    <img src="{{URL::asset('/')}}ms/img/responsive/arrow-right.png" class="btn-arrow-right" alt="">
                                </a>
                            </div>
                        </div>
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