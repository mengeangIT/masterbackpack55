@extends('ms.layout.front')
@section('title', 'OrderDetailPage')
@section('url'){{url('/customer/your-order')}}@endsection
@section('sharefb'){{url('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mastersukisoup.com%2Fcustomer%2Fyour-order')}}@endsection
@section('layout-id')
    <div id="yourorder">
        @endsection

        @section('content')
            <div class="container">
                @if(!is_m())
                    <div class="row hidden-md-down">
                        <div class="col-xs-12">
                            <div class="breadcrumbList">
                                <ul class="breadcrumb">
                                    <li><a href="{{url('/home')}}">{{_t('Home')}}</a></li>
                                    <li class="active">{{_t('Order Information')}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('Order Information')}}</h2>

                                        <div class="iconProfile"></div>
                                        <div class="clearfix"></div>

                                    </div>
                                    <div class="redbox"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row hidden-lg-up">
                        <h1 class="textHeaderMobile">{{_t('Order Information')}}</h1>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="descriptionYourOrder">
                            <p>{{_t('Here is all your order information. You can click on the number of Order ID to see items that you order detail')}}.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="listYourOrderBox">
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class=" table listYourOrder" style="width: 940px;">
                                <tr class="tbHeader" style="width: 100%">
                                    <th class="fontred orderidYourOrder" style="width: 15%">{{_t('Order ID')}}</th>
                                    <th class="fontgreen dateYourOrder" style="width: 20%">{{_t('Date/Time')}}</th>
                                    <th class="fontred quatityYourOrder" style="width: 10%">{{_t('Quantity')}}</th>
                                    <th class="fontgreen totalYourOrder" style="width: 10%">{{_t('Total Price')}}</th>
                                    <th class="fontred toYourOrder" style="width: 25%">{{_t('Deliver to')}}</th>
                                    <th class="fontgreen statusYourOrder" style="width: 10%">{{_t('Status')}}</th>
                                    <th class="fontred actionYourOrder" style="width: 10%">{{_t('Action')}}</th>
                                </tr>
                                @foreach($OrderInfo as $info)
                                    @if($info->order_status != 'Paid')
                                        <tr class=" statusWait ">
                                            <td class="{{$info->id}}"><a href="javascript:void(0);" data-href="#" class="yourorderdetail_modal">MS {{$info->id}}</a></td>
                                            <td class="dateYourOrder">{{$info->delivery_date}} / {{$info->delivery_time}}</td>
                                            <td class="quatityYourOrder">{{$info->total_qty}}</td>
                                            <td class="totalYourOrder">{{$info->total_payable}} $</td>
                                            <td class="toYourOrder">{{$phone->phone}}</td>
                                            <td class="statusYourOrder">
                                                @if($info->order_status == 'New')
                                                    NEW
                                                @endif
                                                @if($info->order_status == 'Cancel')
                                                    CANCELLED
                                                @endif
                                            </td>
                                            <td class="actionYourOrder">
                                                @if($info->order_status == 'Cancel')
                                                    <a href="{{url('/customer/repeat-order').'/'.$info->id.'/'.session('customer_id')}}" class="btnRepeatOrder">{{_t('Repeat Order')}}</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                @foreach($OrderInfo as $info)
                    <div id="myModal" class=" modal hide fade in modal-content {{$info->id}}F" role="document">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div class="row-fluid">
                                <div class="span8">
                                    <p class="orderID"><strong class="fontred">{{_t('ORDER ID')}} : </strong> MS {{$info->id}} </p>
                                    <p><strong>{{$info->delivery_date}} / {{$info->delivery_time}}</strong></p>
                                    <strong>
                                    </strong>
                                </div>
                                <strong>
                                    @if($info->order_status == 'New')
                                        <div class="span4"><span class="fontred">NEW</span></div>
                                    @endif
                                    @if($info->order_status == 'Cancel')
                                        <div class="span4"><span class="fontred">CANCELLED</span></div>
                                    @endif

                                </strong>
                            </div>
                        </div>
                        <strong>
                            <div class="modal-body">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="fontred yourOrderMenuList">{{_t('Name')}}</th>
                                                <th class="fontred yourOrderQuantity">{{_t('Qty')}}</th>
                                                <th class="fontred yourOrderPrice">{{_t('Price')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $order_detail_data = \App\Models\OrderDetail::where('order_id','=',$info->id)->get();
                                            @endphp
                                            @foreach($order_detail_data as $order_detail)
                                            <tr>
                                                <td class="yourOrderMenuList">{{$order_detail->title}}</td>
                                                <td class="yourOrderQuantity">{{$order_detail->qty}}</td>
                                                <td class="yourOrderPrice">$ {{$order_detail->price}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="2" class="listPriceData">{{_t('Subtotal')}} :</td>
                                                <td class="yourOrderPrice">{{$info->total_amt}} $</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="listPriceData">{{_t('Tax')}} :</td>
                                                <td class="yourOrderPrice">{{$info->total_tax}} $</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="listPriceData">{{_t('Delivery Fee')}} :</td>
                                                <td class="yourOrderPrice"><span>+</span><span>0.00</span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="listPriceData">{{_t('Discount')}} :</td>
                                                <td class="yourOrderPrice"><span>-</span><span>0.00</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"><div class="linegray"></div></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="listPriceData grandTitleTotal fontred">{{_t('Total')}} :</td>
                                                <td class="yourOrderPrice grandTotal fontred">{{$info->total_payable}} $</td>
                                            </tr><tr>
                                            </tr></tfoot>
                                        </table>
                                    </div>
                                </div>
                                {{--<p><strong>{{_t('Delivery to')}} : </strong>--}}
                                    {{--<span>{{$customer_info->location_type}}</span>--}}
                                    {{--<span>{{$customer_info->house_number}}</span>--}}
                                    {{--<span>, {{$customer_info->road}}</span>--}}
                                    {{--<span>, {{$customer_info->sangkat}}</span>--}}
                                    {{--<span>,  {{$customer_info->khan}}</span>--}}
                                    {{--<span>,  {{$customer_info->province_city}}</span>--}}
                                {{--</p>--}}
                                <p>{{_t('Your order will arrive before')}}
                                    <span style="text-decoration: underline;">{{$info->delivery_date}} / {{$info->delivery_time}}</span>
                                </p>
                            </div>
                        </strong>
                    </div>
                @endforeach
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent
    <script type="text/javascript">
        @foreach($OrderInfo as $info)
            $(".{{$info->id}}").click(function () {
                $('.{{$info->id}}F').toggle();
            });
            $(".close").click(function () {
                $('.{{$info->id}}F').hide();
            });
       @endforeach
    </script>
@endsection