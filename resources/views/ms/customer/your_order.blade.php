@php
    $lang_file = 'ms_order_info';
@endphp
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
                                    <li><a href="{{url('/home')}}">{{_t('home',$lang_file)}}</a></li>
                                    <li class="active">{{_t('order_information',$lang_file)}}</li>
                                </ul>
                            </div>
                            <div class="titleText">
                                <div class="textHeaderNoImg">
                                    <div class="linegray">
                                        <h2>{{_t('order_information',$lang_file)}}</h2>

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
                        <h1 class="textHeaderMobile">{{_t('order_information',$lang_file)}}</h1>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xs-12">
                        <div class="descriptionYourOrder">
                            <p>
                                <span>{{_t('here_is_all_your_order_information',$lang_file)}}.</span>
                                <span>  {{_t('you_can_click_on_the_number_of_order_id_to_see_items_that_you_order_detail',$lang_file)}}.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="listYourOrderBox">
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class=" table listYourOrder" style="width: 940px;">
                                <tr class="tbHeader" style="width: 100%">
                                    <th class="fontred orderidYourOrder" style="width: 15%">{{_t('order_id',$lang_file)}}</th>
                                    <th class="fontgreen dateYourOrder" style="width: 20%">{{_t('date/time',$lang_file)}}</th>
                                    <th class="fontred quatityYourOrder" style="width: 10%">{{_t('qty',$lang_file)}}</th>
                                    <th class="fontgreen totalYourOrder" style="width: 10%">{{_t('total_price',$lang_file)}}</th>
                                    <th class="fontred toYourOrder" style="width: 25%">{{_t('deliver_to',$lang_file)}}</th>
                                    <th class="fontgreen statusYourOrder" style="width: 10%">{{_t('status',$lang_file)}}</th>
                                    <th class="fontred actionYourOrder" style="width: 10%">{{_t('action',$lang_file)}}</th>
                                </tr>
                                @foreach($OrderInfo as $info)
                                    @if($info->order_status != 'PAID')
                                        <tr class=" statusWait ">
                                            <td class="{{$info->id}}">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#postOrderDetail{{$info->id}}" class="yourorderdetail_modal">{{_t('ms',$lang_file)}} {{$info->id}}</a>
                                            </td>
                                            <td class="dateYourOrder">{{$info->date}} / {{$info->time}}</td>
                                            <td class="quatityYourOrder">{{$info->total_qty}}</td>
                                            <td class="totalYourOrder">{{$info->total_payable}} $</td>
                                            <td class="toYourOrder">{{$phone->phone}}</td>
                                            <td class="statusYourOrder">
                                                @if($info->status == 'NEW')
                                                    NEW
                                                @endif
                                                @if($info->status == 'CANCEL')
                                                    CANCELLED
                                                @endif
                                            </td>
                                            <td class="actionYourOrder">
                                                @if($info->status == 'CANCEL')
                                                    <a href="{{url('/customer/repeat-order').'/'.$info->id.'/'.session('customer_id')}}" class="btnRepeatOrder">{{_t('repeat_order',$lang_file)}}</a>
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
                        <div class="modal fade" id="postOrderDetail{{$info->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="cancelModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">
                                            <i class="fa fa-2x">×</i></span><span class="sr-only">{{_t('close',$lang_file)}}</span>
                                        </button>
                                        <h4 class="modal-title" id="payModalLabel">{{_t('finalize_sale',$lang_file)}}</h4>
                                    </div>
                                    <div class="modal-body" id="payment_content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                                <div class="row-fluid">
                                                    <div class="span8">
                                                        <p class="orderID">
                                                            <strong class="fontred">{{_t('order_id',$lang_file)}} : </strong> {{_t('ms',$lang_file)}} {{$info->id}} </p>
                                                        <p><strong>{{$info->date}} / {{$info->time}}</strong></p>
                                                        <strong>
                                                        </strong>
                                                    </div>
                                                    <strong>
                                                        @if($info->status == 'NEW')
                                                            <div class="span4"><span class="fontred">{{_t('new',$lang_file)}}</span></div>
                                                        @endif
                                                        @if($info->status == 'CANCEL')
                                                            <div class="span4"><span class="fontred">{{_t('cancelled',$lang_file)}}</span></div>
                                                        @endif

                                                    </strong>
                                                </div>

                                                <div class="row-fluid">
                                                    <div class="span12">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="fontred yourOrderMenuList">{{_t('name',$lang_file)}}</th>
                                                                <th class="fontred yourOrderQuantity">{{_t('qty',$lang_file)}}</th>
                                                                <th class="fontred yourOrderPrice">{{_t('price',$lang_file)}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php
                                                                $order_detail_data = \App\Models\TblOrderDetail::where('order_id','=',$info->id)->get();
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
                                                                <td colspan="2" class="listPriceData">{{_t('subtotal',$lang_file)}} :</td>
                                                                <td class="yourOrderPrice">{{$info->total_amt}} $</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="listPriceData">{{_t('tax',$lang_file)}} :</td>
                                                                <td class="yourOrderPrice">{{$info->total_tax}} $</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="listPriceData">{{_t('delivery_fee',$lang_file)}} :</td>
                                                                <td class="yourOrderPrice"><span>+</span><span>0.00</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="listPriceData">{{_t('discount',$lang_file)}} :</td>
                                                                <td class="yourOrderPrice"><span>-</span><span>0.00</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td colspan="2"><div class="linegray"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="listPriceData grandTitleTotal fontred">{{_t('total',$lang_file)}} :</td>
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
                                                <p>{{_t('your_order_will_arrive_before',$lang_file)}}
                                                    <span style="text-decoration: underline;">{{$info->date}} / {{$info->time}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        @endsection
        @section('layout-id-close')
    </div>
@endsection
@section('script')
    @parent

@endsection