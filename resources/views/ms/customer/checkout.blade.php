@extends('ms.layout.front')
@section('title', 'CheckOutPage')
@section('url'){{url('/customer/checkout')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcustomer%2Fcheckout')}}@endsection

<link href="{{asset('/')}}ms/datetime/datepicker.min.css" rel="stylesheet" type="text/css">

@section('layout-id')
    <div id="checkout">
        @endsection
        @section('content')
            <div class="container" style="">
                @if(!is_m())
                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/home')}}">Home</a></li>
                                    <li class="active">Checkout Your Order</li>
                                </ul>
                            </div>

                            <div class="row">
                                <div class="titleTextContact col-xs-12">
                                    <div class="">
                                        <div class="textHeader">
                                            <div class="linegray">
                                                <h2 id="textHeaderCheckout" class="col-xs-8">Checkout Your Order</h2>
                                                <div class="col-xs-4">
                                                    <div class="btnContinueShoppingBox">
                                                        <a class="btnContinueShopping" href="{{url('/menu/delivery')}}">CONTINUE SHOPPING</a>
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
                    </div>
                @else
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile m-a-0">Checkout Your Order</h1>
                    </div>
                @endif
                <div class="group-product-tier"></div>
                <form action="{{url('/customer/checkout')}}" method="POST" enctype="multipart/form-data" class="hidden-lg-up m-t m-b">
                    {{ csrf_field() }}
                    <h4 style="padding-left: 10px;color: #006633;">1. Confirm Order List</h4>
                    <div class="cart-list-responsive">
                        <div class="mobile-cart-detail">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 m-t">
                            <div class="totalPriceBox">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Subtotal : </label>
                                    </div>
                                    <div class="col-xs-6 text-right">$
                                        <input type="number" name="total_amt" style="border: none" class="subtotalPrice" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Tax (10%) : </label>
                                    </div>
                                    <div class="col-xs-6 text-right">$
                                        <input type="number" name="total_tax" style="border: none" class="tax_all" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Delivery Fee : </label>
                                    </div>
                                    <div class="col-xs-6 text-right">$
                                        <input type="number" value="0.00" name="" style="border: none" class="inputDeliveryFee"  readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label style="color:#ff3333">Total :</label>
                                    </div>
                                    <div class="col-xs-6 text-right">$
                                        <input type="number" name="total_payable" style="border: none" class="total_all"  readonly>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <h4 style="padding-left: 20px;color: #006633;">2. Customer Identify</h4>
                        <div class=" col-xs-12 tab-content">
                            <div role="tabpanel" class="tab-pane active" style="padding:10px" >
                                <div class="row">
                                    <div class="col-xs-4 p-a-0">Name : </div>
                                    <div class="col-xs-8 p-a-0 text-left">{{$customers->name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 p-a-0">Phone : </div>
                                    <div class="col-xs-8 p-a-0 text-left">{{$customers->phone}}</div>
                                </div>

                            </div>
                        </div>
                        <h4  style="padding-left: 20px;color: #006633;">3. Delivery Date</h4>
                        <div class="col-xs-12 p-a-0"><br>
                           @php
                                $mydate =  date('Y-m-d');
                                $daystomin = '0';
                                $datemin = date('Y-m-d', strtotime($mydate.' - '.$daystomin.' days'));
                            @endphp
                            <div class="form-group">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{$datemin}}" placeholder="month/date/year *" name = "date" class="form-control pull-right" id="datepicker-mobile">
                                </div>
                            </div>
                        </div>
                        <h4  style="padding-left: 20px;color: #006633;">4. Delivery Time</h4>
                        <div class="col-xs-12 p-a-0"><br>
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <div class="input-group">

                                        <input type="text" name="time" class="form-control timepicker">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="cust_id" value="{{ session('customer_id') }}" required>
                        <div class="clear"></div>
                        <button type="submit" class=" btnGreenResponsive text-center m-t btnConfirmOrderResponsive">Confirm Check Out
                        </button>
                    </div>
                </form>
                {{--<!--====================================--}}
                {{--=            UI for Desktop            =--}}
                {{--=====================================-->--}}
                <div class="row hidden-md-down">
                    <div class="col-sm-12 col-xs-12 col-md-8">
                        <form action="{{url('/customer/checkout')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" id="checkoutProductForm">
                            {{ csrf_field() }}
                            <div class="checkoutProductBox">
                                <div class="confirmOrder">
                                    <h3 class="fontgreen">1. CONFIRM ORDER LIST</h3>
                                    <div class="tableOrderListBox">
                                        <table class="tableOrderList checkout-cart-detail" style="width:100%">

                                        </table>
                                    </div>
                                    <div class="linegray"></div>
                                    <div class="yourPoints row">
                                        <div class="col-xs-6">
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="totalPriceBox">
                                                <p>
                                                    <label>Total Qty :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <span style="font-size: 14px; " class="totalqty1"></span>
                                                    <span style="font-size: 14px;" >&nbsp;items</span>
                                                </p>
                                                <p>
                                                    <label>Subtotal :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</label>
                                                    <input style="font-size: 14px;" type="number" name="total_amt" class="subtotalPrice" readonly>
                                                </p>
                                                <p>
                                                    <label>Tax(10%) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</label>
                                                    <input style="font-size: 14px;" type="number" name="total_tax" class="tax_all" readonly>
                                                </p>
                                                <p>
                                                    <label>Delivery Fee :&nbsp;&nbsp;$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>
                                                    <span style="font-size: 14px;" >0.00</span>
                                                </p>
                                                <p id="grandTotalPrice" >
                                                    <label>Total :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</label>
                                                    <input style="font-size: 14px;" type="number" name="total_payable" class="total_all" readonly>
                                                </p>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="deliveryAddress">
                                    <div class="deliveryAddresssHeaderBox" id="deliveryAddresssHeaderBox">
                                        <div class="row">
                                            <h3 class="fontgreen col-xs-9">2. Customer Identify</h3>
                                        </div>
                                    </div>
                                    <div class="linegray"></div>
                                    <div class="row">
                                        <div class="col-xs-12 radio_listaddress_info" style="padding-left:0">
                                            <div class="detailAddress">
                                                <div class="detailAddressData">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="address-detail-73578" data-address="{&quot;id&quot;:&quot;73578&quot;,&quot;customer_id&quot;:&quot;71539&quot;,&quot;address_name&quot;:&quot;Primary Address&quot;,&quot;contact_person&quot;:&quot;hak mengeang&quot;,&quot;phone&quot;:&quot;0989898989&quot;,&quot;province_zone_id&quot;:&quot;1&quot;,&quot;aumpher_zone_id&quot;:&quot;4&quot;,&quot;location_type_id&quot;:&quot;4&quot;,&quot;floor&quot;:&quot;1&quot;,&quot;thumbol&quot;:null,&quot;zipcode&quot;:&quot;22222&quot;,&quot;building_name&quot;:&quot;fdsf&quot;,&quot;room_number&quot;:&quot;22&quot;,&quot;address_number&quot;:&quot;33&quot;,&quot;soi&quot;:&quot;efe&quot;,&quot;moo&quot;:&quot;erwer&quot;,&quot;road&quot;:&quot;erew&quot;,&quot;direction_guide&quot;:&quot;erwr&quot;,&quot;primary&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2017-02-13 00:22:51&quot;,&quot;updated_at&quot;:&quot;2017-02-13 00:22:51&quot;,&quot;deleted_at&quot;:null,&quot;thumbol_zone_id&quot;:&quot;16&quot;,&quot;branch&quot;:null,&quot;address_repeat&quot;:&quot;1&quot;,&quot;location_type&quot;:{&quot;id&quot;:&quot;4&quot;,&quot;status&quot;:&quot;enable&quot;,&quot;created_at&quot;:&quot;2014-02-11 04:17:17&quot;,&quot;updated_at&quot;:&quot;2014-02-11 04:17:17&quot;,&quot;deleted_at&quot;:null},&quot;thumbol_zone&quot;:{&quot;id&quot;:&quot;16&quot;,&quot;province_zone_id&quot;:&quot;1&quot;,&quot;aumpher_zone_id&quot;:&quot;4&quot;,&quot;status&quot;:&quot;enable&quot;,&quot;created_at&quot;:&quot;2014-03-17 12:08:49&quot;,&quot;updated_at&quot;:&quot;2014-03-17 12:08:49&quot;,&quot;deleted_at&quot;:null},&quot;aumpher&quot;:{&quot;id&quot;:&quot;4&quot;,&quot;province_zone_id&quot;:&quot;1&quot;,&quot;status&quot;:&quot;enable&quot;,&quot;created_at&quot;:&quot;2014-03-17 12:08:49&quot;,&quot;updated_at&quot;:&quot;2014-03-17 12:08:49&quot;,&quot;deleted_at&quot;:null},&quot;province&quot;:{&quot;id&quot;:&quot;1&quot;,&quot;status&quot;:&quot;enable&quot;,&quot;created_at&quot;:&quot;2014-01-09 11:08:03&quot;,&quot;updated_at&quot;:&quot;2014-01-09 11:08:03&quot;,&quot;deleted_at&quot;:null}}">
                                                            <table>
                                                                <tr>
                                                                    <td class="titleAddressData fontred">Name : </td>
                                                                    <td class="semicolonAddressData"> </td>
                                                                    <td class="infoAddressData" id="infoAddressBookData_name" >{{$customers->name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="titleAddressData fontred">Phone : </td>
                                                                    <td class="semicolonAddressData"> </td>
                                                                    <td class="infoAddressData" id="infoAddressBookData_locationtype" >{{$customers->phone}}</td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="titleAddressData fontred"> </td>
                                                                    <td class="semicolonAddressData"> </td>
                                                                    <td class="infoAddressData" >
                                                                        <a class="btnEdit" onclick="myAlert1()">Edit</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .input-group .form-control {
                                         position: static !important;
                                    }
                                </style>

                                <div class="deliverySchedule">
                                    <h3 class="fontgreen p-t">3. Delivery Date</h3>
                                    @php
                                        $mydate =  date('Y-m-d');
                                        $daystomin = '0';
                                        $datemin = date('Y-m-d', strtotime($mydate.' - '.$daystomin.' days'));
                                    @endphp
                                    <div class="selectDeliverySchedule col-xs-9 p-a-0">
                                        <!-- Date -->
                                        <div class="form-group">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text"  value="{{$datemin}}"  name="date" class="form-control deliveryDate" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div><br>

                                <div class="deliverySchedule">
                                    <h3 class="fontgreen p-t">4. Delivery Time</h3>

                                    <div class="selectDeliverySchedule col-xs-9 p-a-0">
                                        <div class="bootstrap-timepicker">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" value="" name="time" class="form-control deliveryTime" required>
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div><br>


                                <input type="hidden" name="cust_id" value="{{ session('customer_id') }}" required>

                                <div class="btnConfirmOrderBox" >
                                    <button type="submit" class="btnConfirmOrder">CONFIRM ORDER NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                        $item_recommend = \App\Models\TblProduct::where('status','=','ACTIVE')->where('pro_promotion','=','ACTIVE')->get();
                    ?>
                    <div class="col-xs-4 hidden-md-down">
                        <div class="recommendMenuBox">
                            <h3 class="titleRecommendMenu">RECOMMENDED MENUS</h3>
                            <ul id="recommendMenuList" class="media-list">
                                @foreach($item_recommend as $item)
                                    <li class="media">
                                        <a href="#" class="pull-right">
                                            <img class="media-object" alt="" src="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading fontred">{{$item->title}}</h4>
                                            <p>{{$item->description}}</p>
                                        </div>
                                        <div class="price-addtocart">
                                            <div class="price-unit pull-left">
                                                <span class="productprice">{{$item->price}}</span> <span class="productunit">$</span>
                                            </div>
                                            <div class="addtocart pull-right">
                                                <a class="btnAddtocart desktop-addCart" href="{{asset('/add-cart')}}"
                                                   data-id="{{$item->id}}"
                                                   data-price="{{$item->price}}"
                                                   data-name="{{$item->title}}"
                                                   data-image="{{ url('img/cache/img300x300/'.\App\Helpers\ITPC::get_basename($item->image)) }}">add to cart
                                                </a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                    <style>
                        .my-box {
                            display: none;
                            position: fixed;
                            z-index: 1;
                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            overflow: auto;
                            background-color: rgba(0, 0, 0, 0.5);
                        }
                        .box-content {
                            margin: 10% auto;
                            font-size: 16px;
                            font-weight: 600;
                            padding: 10px;
                            width: 70%;
                        }
                    </style>
                <div id="modal1" class="my-box">
                    <div class="box-content">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="modal-content" method="POST" action="{{url('customer/update-customer-info')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" id="{{'id',$customers->id}}">
                            <div class="modal-header">
                                <h3 id="myModalLabel" class="m-b-0">Address Book</h3>
                            </div>
                            <div class="modal-body">
                                <div class="addressbookForm">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="addDataAddress form">

                                                <div class="addDataAddressDetail">

                                                    <div class="form-group row">

                                                        <label class="form-control-label col-xs-2 text-right p-r-0" for="inputBuilding">Name. <span class="semicolonBox">:</span></label>
                                                        <div class="col-xs-4">
                                                            <input type="text" class="form-control" name="name" value="{{$customers->name}}" id="inputBuilding">
                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>


                                                        <label class="form-control-label col-xs-2 text-right p-r-0" for="inputBuilding">Phone<span class="semicolonBox">:</span></label>
                                                        <div class="col-xs-4">
                                                            <input type="text" name="phone" class="form-control" value="{{$customers->phone}}" id="inputBuilding">
                                                            @if ($errors->has('phone'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>


                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button onclick="myClose()" class="btn btnBack">Close</button>
                                <button type="submit" class="btn btn-primary btnNext" id="address_save">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
        @section('layout-id-close')
    </div>

@endsection
@section('script')
    <script src="{{ asset('vendor/adminlte/') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>

    <script src="{{asset('/')}}ms/datetime/datepicker.js"></script>
    <script src="{{asset('/')}}ms/datetime/datepicker.en.js"></script>

    @parent
    <script>
        function myAlert1() {
            document.getElementById('modal1').style.display = "block";
        }
        function myClose() {
            document.getElementById('modal1').style.display = "none";
        }
    </script>
    <script>
        $('.deliveryDate').datepicker({
            language: 'en',
            clearButton: true,
            dateFormat: 'yyyy-mm-dd',
            minDate: new Date()
        })
        $('.deliveryTime').datepicker({
            language: 'en',
            onlyTimepicker: true,
            clearButton: true,
            timepicker: true
        })
    </script>





@endsection