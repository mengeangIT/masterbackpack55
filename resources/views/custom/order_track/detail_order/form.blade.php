@extends('backpack::layout')
@section('graph_style')
@endsection
@section('header')
    <section class="content-header">
        <h1>
            {{_t('Order Detail List') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{_t('order detail list')}}</li>
        </ol>
    </section>
@endsection
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <style>
                    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
                        border-top: 1px solid #CCCCCC;
                    }
                </style>

                @if(count($rows) > 0)
                    <table class="table table-hover" border="1" style="border-color: #CCCCCC">
                        <tr style="background-color: #7B7777; color: white;border-color: #CCCCCC">
                            <th class="text-center">Nº</th>
                            <th class="text-center">{{_t('Name')}}</th>
                            <th class="text-center">{{_t('Qty')}}</th>
                            <th class="text-center">{{_t('Price')}}</th>
                            <th class="text-center">{{_t('Image')}}</th>
                        </tr>
                        @php
                            $order_detail = \App\Models\TblOrderDetail::where('order_id','=',$rows->id)->get();
                            $count = 1;
                        @endphp
                            @foreach($order_detail as $row)
                                <tr style="@if($loop->index % 2 > 0) background-color: #f1f1f1; @endif">
                                    <td class="text-left">{{$count++}}</td>
                                    <td class="text-left">{{$row->title }}</td>
                                    <td class="text-left">{{$row->qty }}</td>
                                    <td class="text-left">$ {{$row->price }}</td>
                                    <td class="text-center"> <img width="40" height="40" src="{{$row->image}}"></td>
                                </tr>
                            @endforeach
                                <tr style="background-color: rgba(214,216,218,0.68)">
                                    <td colspan="4" style="text-align: right">សរុប</td>
                                    <td style="text-align: right">$ {{number_format($rows->total_amt,2)}}</td>
                                </tr>
                                <tr style="background-color: rgba(214,216,218,0.68)">
                                    <td colspan="4" style="text-align: right">tax</td>
                                    <td style="text-align: right">$ {{number_format($rows->total_tax,2)}}</td>
                                </tr>
                                <tr style="background-color: rgba(214,216,218,0.68)">
                                    <td colspan="4" style="text-align: right">បញ្ចុះតម្លៃ</td>
                                    <td style="text-align: right">$ {{number_format($rows->total_dis,2)}}</td>
                                </tr>
                                <tr style="background-color: rgba(214,216,218,0.68)">
                                    <td colspan="4" style="text-align: right">total payable</td>
                                    <td style="text-align: right">$ {{number_format($rows->total_payable,2)}}</td>
                                </tr>
                    </table>

                @else

                @endif

            </div>
        </div>
    </div>
@endsection
@section('graph_script')

@endsection


